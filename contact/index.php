<?php
$base = '../';

// ページタイトル
$title = 'グループホームサンタクロース｜長野県坂城町の認知症高齢者グループホーム';

// ページデスクリプション
$description = '長野県坂城町に密着した要支援2以上、認知症高齢者の方がご利用できるグループホームです。まるで自宅のような空間で、月一行事を開催。家族との交流もあります。';

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';
// 
// 正規URL
$canonical = 'https://sakaki-santaclaus.jp/';

//要介護度
$nurse_level = [
    0 => '要支援2',
    1 => '要支援1',
    2 => '要介護1',
    3 => '要介護2',
    4 => '要介護3',
    5 => '要介護4',
    6 => '要介護5',
];

//認知症の度合
$dementia_level = [
    0 => '軽度',
    1 => '中度',
    2 => '重度',
];

$not_f_contact = true;

require_once '../contact-libs.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include $base . 'gtag.inc'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $base ?>hamburger.css">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="./style-contact.css">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="<?= $canonical ?>">
<title><?= $title ?></title>
<meta name="keywords" content="<?= $keywords ?>">
<meta name="description" content="<?= $description ?>">
<meta property="og:site_name" content="グループホーム　サンタクロース">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="https://sakaki-santaclaus.jp/ogp_image.jpg">
<script>
function onSubmit(token) {
	if (document.getElementById("contact-form").reportValidity()) {
    	document.getElementById("contact-form").submit();
	}
}
</script>
</head>
<body>
<?php include_once $base .'header.php'; ?>
<div id="main-content">
    <div id="article-area">
        <main id="main-column">
            <section id="fv">
                <div class="fv-area">
		            <img src="../top_1.jpg" alt="">	
	            </div>
                <div class="text_area">お問い合わせ</div>
            </section>
            <article>
                <section class="basic_block contact_by_form" id="otoiawase">
                    <div class="content">
                        <p style="text-align: center;">お問い合わせやご質問は下記のフォームにて承っております。</p>
                    </div>
                    <form id="contact-form" action="confirm.php" method="post">
                        <dl class="form_list">
                            <div>
                                <dt><label for="your_name">相談者氏名</label><span class="required">必須</span></dt>
                                <dd><input type="text" id="your_name" name="your_name" value="" maxlength="100" autocomplete="name" required></dd>
                            </div>
                            <div>
                                <dt><label for="your_name_kana">相談者氏名（フリガナ）</label><span class="required">必須</span></dt>
                                <dd><input type="text" id="your_name_kana" name="your_name_kana" value="" maxlength="100" required></dd>
                            </div>
                            <div>
                            <dt>お問い合わせ項目<span class="required">必須</span></dt>
                                <dd class="radio_items">
                                    <label><input type="radio" name="contact_type" value="ご入居・見学希望" checked required>ご入居・見学希望</label>
                                    <label><input type="radio" name="contact_type" value="資料制作">資料制作</label>
                                    <label><input type="radio" name="contact_type" value="その他">その他</label>
                                </dd>
                            </div>
                            <div>
                                <dt><label for="your_address">相談者住所</label><span class="required">必須</span></dt>
                                <dd><input type="text" id="your_address" name="your_address" value="" maxlength="100" autocomplete="address" required></dd>
                            </div>
                            <div>
                                <dt><label for="your_tel">電話番号</label></dt>
                                <dd><input type="tel" id="your_tel" name="your_tel" value="" autocomplete="tel" maxlength="100"></dd>
                            </div>
                            <div>
                                <dt><label for="your_email">メールアドレス</label><span class="required">必須</span></dt>
                                <dd><input type="email" id="your_email" name="your_email" value="" maxlength="100" autocomplete="email" required></dd>
                            </div>

                            <div>
                                <dt><label for="sche_occupy_name">入居予定者氏名</label><span class="required">必須</span></dt>
                                <dd><input type="text" id="sche_occupy_name" name="sche_occupy_name" value="" maxlength="100" autocomplete="occupy_name" required></dd>
                            </div>

                            <div>
                                <dt>
                                    <label for="occupy_address">入居予定者住所<span>*</span></label><span class="required">必須</span>
                                    <br>
                                    <span style="color: gray;"><small>＊市町村まで記入してください</small></span>
                                </dt>
                                
                                <dd><input type="text" id="occupy_address" name="occupy_address" value="" maxlength="100" autocomplete="occupy_address" required></dd>
                            </div>
                            <div>
                                <dt><label for="nurse_level">要介護度</label></dt>
                                <dd>
                                    <select name="nurse_level" id="nurse_level">
                                        <option value="">選択</option><?php
foreach($nurse_level as $nurse => $value) { ?>
                                        <option value="<?= h($value) ?>"><?= h($value) ?></option><?php
} ?>
                                    </select>
                                </dd>
                            </div>
                            <div>
                                <dt><label for="dementia_level">認知症の度合い</label></dt>
                                    <dd>
                                        <select name="dementia_level" id=""><!-- 認知症の度合 -->
                                            <option value="">選択</option><?php
foreach($dementia_level as $dementia => $value) { ?>
                                            <option value="<?= h($value) ?>"><?= h($value) ?></option><?php
} ?>
                                        </select>
                                    </dd>
                            </div>
                            <div>
                                <dt><label for="condition">入居予定者の現状(症状・医療行為)</label></dt>
                                <dd><textarea id="condition" name="condition" maxlength="1000"></textarea></dd>
                            </div>
                            <div>
                                <dt><label for="contact_content">お問い合わせ内容</label></dt>
                                <dd><textarea id="contact_content" name="contact_content" maxlength="1000"></textarea></dd>
                            </div>
                        </dl>
                        <p style="text-align: center;">※お問い合わせいただいた個人情報は、適切にお取り扱いさせていただきます。</p>
                        <button class="btn_1 submit_btn g-recaptcha" data-sitekey="6LemcqwhAAAAAKjrjNQRgTZd6pEIi1AqT6MvDmlj" data-callback="onSubmit" data-action="confirm" type="submit">確認画面へ</button>
                    </form>
                </section>
            </article>
        </main><!--
        -->
<?php include_once('../footer.php'); ?>
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>