<?php
$base = '../';

$not_f_contact = true;
//head要素に入れる企業名とタイトルのサブスクリプションを指定。
$company_name = 'グループホーム　サンタクロース';
$title_sub = '｜長野県坂城町の認知症高齢者グループホーム';

require_once('../contact-libs.php');

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
    ['name' => 'contact_content', 'label' => 'お問い合わせ内容', 'required' => false]
];

foreach ($input_list as $data) {
    // 入力項目が定義リストと一致しない場合
    if ( !isset($_POST[$data['name']]) ) {
        echo $data['name'] . 'は定義されていません。お手数ですが最初からやり直してください。';
        exit;
    }

    // 必須項目が空の場合
    if ($data['required'] && $_POST[$data['name']] == '') {
        echo $data['label']. 'は必須項目です。ご確認の上、再度投稿してください。';
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include_once('../gtag.inc'); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>入力内容の確認 - <?= h($company_name) ?><?= h($title_sub) ?></title>
<link rel="icon" href="../favicon.png">
<link rel="canonical" href="https://sakaki-santaclaus.jp/contact/confirm.php">
<link rel="stylesheet" href="<?= $base ?>hamburger.css">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="style-contact.css">
<meta name="robots" content="noindex">
<script>
function onSubmit(token) {
	if (document.getElementById("contact-form").reportValidity()) {
    	document.getElementById("contact-form").submit();
	}
}
</script>
</head>
<body>
<?php include_once $base.'header.php'; ?>
<div id="main-content">
    <main id="main-column" class="basic_block contact_by_form submit_page">
        <h1>入力内容のご確認</h1>
        <div class="content">
            <p>入力内容についてご確認いただき、よろしければ<span class="font_bold">「送信する」</span>を押してください。</p>
            <p>修正したい場合は、「入力内容を修正」を押してください。</p>
        </div>
        <form id="contact-form" action="submit.php" method="post">
<?php foreach ($input_list as $data) { ?>
            <input type="hidden" name="<?= h($data['name']) ?>" value="<?= h($_POST[$data['name']]) ?>">
<?php } ?>
            <dl class="form_list">
<?php foreach ($input_list as $data) { ?>
                <div>
                    <dt><?= $data['label'] ?></dt>
                    <dd><?= !empty($_POST[$data['name']]) ? nl2br(h($_POST[$data['name']])) : '（入力なし）' ?></dd>
                </div>
<?php } ?>
            </dl>
            <div class="btn_wrapper">
                <button class="btn_1 fix_btn" type="button" onclick="history.back();">入力内容を修正</button>
                <button class="btn_1 submit_btn g-recaptcha" data-sitekey="6LemcqwhAAAAAKjrjNQRgTZd6pEIi1AqT6MvDmlj" data-callback="onSubmit" data-action="submit" type="submit">送信する</button>
            </div>
        </form>
    </main>
</div>
<?php include_once('../footer.php'); ?>
</body>
<script src="<?= $base ?>hamburger.js"></script>
</html>