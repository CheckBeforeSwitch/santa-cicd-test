<?php
$base = '../';

$not_f_contact = true;
require_once('../contact-libs.php');
//head要素に入れる企業名とタイトルのサブスクリプションを指定。
$company_name = 'グループホーム　サンタクロース';
$title_sub = '｜長野県坂城町の認知症高齢者グループホーム';
$company_tel = '0268-81-3611';  //企業の電話番号
$company_mail = 'sidecar@snow.ocn.ne.jp';   //企業のメールアドレス 

/*
不正なアクセスはリダイレクトさせる
*/
// POST送信でない場合
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ./', true, 303);
    exit;
}
//投稿項目を定義し、エラーチェックと表示に用いる
$input_list = [
    ['name' => 'your_name', 'label' => '相談者氏名', 'required' => true],
    ['name' => 'your_name_kana', 'label' => '相談者氏名（フリガナ）', 'required' => true],
    ['name' => 'contact_type', 'label' => 'お問い合わせ項目', 'required' => true],
    ['name' => 'your_address', 'label' => '相談者住所', 'required' => true],
    ['name' => 'your_tel', 'label' => '電話番号', 'required' => false],
    ['name' => 'your_email', 'label' => 'メールアドレス', 'required' => true],
    ['name' => 'sche_occupy_name', 'label' => '入居予定者氏名', 'required' => true],
    ['name' => 'occupy_address', 'label' => '入居予定者住所', 'required' => true],
    ['name' => 'nurse_level', 'label' => '要介護度', 'required' => false],
    ['name' => 'dementia_level', 'label' => '認知症の度合い', 'required' => false],
    ['name' => 'contact_content', 'label' => 'お問い合わせ内容', 'required' => false],
];

foreach ($input_list as $data) {
    // 入力項目が定義リストと一致しない場合
    if ( !isset($_POST[$data['name']]) ) {
        echo "{$data['name']}は定義されていません。ブラウザの戻るボタンを押してやり直してください。";
        exit;
    }

    // 必須項目が空の場合
    if ($data['required'] === true && empty($_POST[$data['name']])) {
        echo "{$data['label']}は必須項目です。ご確認の上、再度投稿してください。";
        exit;
    }
}

// RECAPTCHAによる検証
$err = '';

$recaptcha_code = $_POST['g-recaptcha-response'];

if (empty($recaptcha_code)) {
    header('Location: ./', true, 303);
    exit;
}

$secret_recaptcha_code = '6LemcqwhAAAAAMJpU-6DvWD-yueEecPqzCC5CmOT';
$res = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret_recaptcha_code}&response={$recaptcha_code}");

if (empty($res)) {
    $err = 'reCAPTCHAの検証に失敗しました。';
} else {
    $res_result = json_decode($res, true);
    if ($res_result['success'] === false) {
        $err = 'reCAPTCHAの検証に問題があります。：' . $res_result['error-codes'];
    }
}

if (!empty($err)) {
    header('Location: ./', true, 303);
    exit;
}


/*
送信内容の整形
*/
$post_input_items = [];
foreach ($input_list as $data) {
    // 非必須項目について、未入力の場合は代替テキストを入れる
    if (!$data['required'] && empty($_POST[$data['name']])) {
        $post_input_items[$data['label']] = '（入力なし）';

    // それ以外は送信された値を入れる
    } else {
        $post_input_items[$data['label']] = $_POST[$data['name']];
    }
}

$input_content = "\r\n-----\r\n";
foreach ($post_input_items as $label => $value) {
    $input_content .= "【{$label}】\r\n{$value}\r\n";
}
$input_content .= "\r\n-----\r\n\r\n";

/*
メール送信の実行
*/
mb_language('Japanese');
mb_internal_encoding('utf-8');

//お問い合わせメールに用いるアドレス
$from = 'no-reply@sakaki-santaclaus.jp';
$reply = $_POST['your_email'];
$bcc = 'form@nextreservation.jp';

/* お問い合わせメールの送信 */
// To
$to = $company_mail;
$mime_header = mb_encode_mimeheader($company_name, 'iso-2022-jp');

// Header
$header =<<< EOM
From: {$mime_header}<{$from}>
Reply-To: {$reply}
BCC: {$bcc}
EOM;

// Subject
$subject = "【{$company_name} ホームページからお問い合わせがありました。】";

// メール本文
$message =<<< EOM
{$company_name}のお問い合わせページから下記のようにお問い合わせがありました。
内容をご確認の上、ご対応をよろしくお願いいたします。

EOM;
$message .= brReplace(periodReplace($input_content));
$mime_header = mb_encode_mimeheader($company_name, 'iso-2022-jp');
// ユーザーから会社への投稿Submit
    $options = "-f $from";
    $contact_complete = mb_send_mail($to, $subject, $message, $header, $options);
    /* お問い合わせ者への確認メールの送信 */
    if ($contact_complete) {
        // To
        $to = $_POST['your_email'];
        $mime_header = mb_encode_mimeheader($company_name, 'iso-2022-jp');  //ヘッダーのカナ漢字を7ビット文字列に変換

    // Header
// Header
    $header =<<< EOM
From: {$mime_header}<{$from}>
BCC: {$bcc}
EOM;    // Subject
    $subject = "{$company_name}ホームページよりお問い合わせいただきありがとうございます。";
    
    // メール本文
    $message = <<<EOM
この度はホームページよりお問い合わせいただき、ありがとうございます。
下記の通りお問い合わせ内容を承りましたので、今一度ご確認ください。

EOM;
        $message .= brReplace(periodReplace($input_content));
        // ユーザーへの返信メール(ありがとうメール)のSubmit
        $contact_complete_user = mb_send_mail($to, $subject, $message, $header, $options);
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include_once('../gtag.inc'); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $contact_complete ? 'お問い合わせありがとうございました' : '送信に失敗しました' ?> - お問い合わせ - <?= h($company_name) ?><?= h($title_sub) ?></title>
<link rel="icon" href="../favicon.png">
<link rel="canonical" href="https://sakaki-santaclaus.jp/contact/submit.php">
<link rel="stylesheet" href="<?= $base ?>hamburger.css">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="style-contact.css">
<meta name="robots" content="noindex">
</head>
<body>
<?php include_once($base . 'header.php'); ?>
<div id="main-content">
    <main id="main-column" class="basic_block contact_by_form submit_page">
        <h1><?= $contact_complete ? 'お問い合わせが完了しました' : 'お問い合わせの送信に失敗しました' ?></h1>
<?php if ($contact_complete) {//サンキューメール返信できない場合もエラーを表示 ?>
        <div class="content">
            <p>この度はお問い合わせいただき、ありがとうございました。</p>
    <?php if($contact_complete_user) { ?>
            <p>ご入力されたメールアドレス宛に確認メールを送信いたしましたのでご確認ください。</p>
    <?php } ?>
            <p>確認後、改めてご連絡いたします。</p>
        </div>
<?php } else { ?>
        <div class="content">
            <p>お問い合わせ内容の送信に失敗しました。</p>
            <p>お手数ですが、次のお問い合わせ方法からお問い合わせください。</p>
            <div class="tel">
                <a href="tel:<?= h($company_tel) ?>"><?= h($company_tel) ?></a><br>
            </div><br>
            <div class="email_area email"></div>
        </div>
<?php } ?>
        <a href="./" class="btn_1 link_btn">お問い合わせページへ戻る</a>
        <a href="../" class="btn_1 link_btn">トップページへ</a>
    </main>
</div>
<?php include_once('../footer.php'); ?>
<script src="../email.js"></script>
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>