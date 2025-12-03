<?php 
$base = '../';


// ページタイトル
$title = 'スタッフ紹介｜グループホームサンタクロース';

// ページデスクリプション
$description = '長野県坂城町に密着した要支援2以上、認知症高齢者の方がご利用できるグループホームです。まるで自宅のような空間で、月一行事を開催。家族との交流もあります。';

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';
// 
// 正規URL
$canonical = 'https://sakaki-santaclaus.jp/staff/';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include $base . 'gtag.inc'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $base ?>hamburger.css">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="<?= $base ?>style-top.css?v=1">
<link rel="stylesheet" href="style.css?v=1">
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
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<section id="fv">
	<div class="fv-area">
		<img src="fv.jpg" alt="">	
	</div>
	<div class="text_area">
		スタッフ紹介
	</div>
</section>
<section class="staff">
    <p class="intro">
        当法人は「医療法人」として平成18年から坂城町でサービスを始めました。<br>
        令和2年に「株式会社」として分社化し、分社化前から働いてくださっているスタッフもたくさんおります。
    </p>
    <ul class="staff-list">
        <li class="card">
            <img src="takayama.jpg" alt="">
            <p class="in">2006年入社</p>
            <div class="inner">
                <p class="position">代表取締役/ケアマネ</p>
                <p class="name">高山さん・社長</p>
            </div>
        </li>
        <li class="card">
            <img src="koike.jpg" alt="">
            <p class="in">2007年入社</p>
            <div class="inner">
                <p class="position">ユニットリーダー</p>
                <p class="name">小池さん・太郎ちゃん</p>
            </div>
        </li>
        <li class="card">
            <img src="oono.jpg" alt="">
            <p class="in">2009年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">大野さん</p>
            </div>
        </li>
        <li class="card">
            <img src="hayashi.jpg" alt="">
            <p class="in">2022年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">林さん</p>
            </div>
        </li>
        <li class="card">
            <img src="ide.jpg" alt="">
            <p class="in">2023年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">井出ちゃん</p>
            </div>
        </li>
        <li class="card">
            <img src="nachi.jpg" alt="">
            <p class="in">2008年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">ナチさん・なっちゃん</p>
            </div>
        </li>
        <li class="card">
            <img src="pyoo.jpg" alt="">
            <p class="in">2024年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">ピョオちゃん</p>
            </div>
        </li>
        <li class="card">
            <img src="makita.jpg" alt="">
            <p class="in">2006年入社</p>
            <div class="inner">
                <p class="position">ユニットリーダー</p>
                <p class="name">蒔田くん・蒔田氏</p>
            </div>
        </li>
        <li class="card">
            <img src="tobi.jpg" alt="">
            <p class="in">2011年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">とびさん</p>
            </div>
        </li>
        <li class="card">
            <img src="employee3.jpg" alt="">
            <p class="in">2019年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">喜代美ちゃん</p>
            </div>
        </li>
        <li class="card">
            <img src="miyuki.jpeg" alt="">
            <p class="in">2020年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">みゆきちゃん</p>
            </div>
        </li>
        <li class="card">
            <img src="yanagi.jpg" alt="">
            <p class="in">2013年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">栁澤さん</p>
            </div>
        </li>
        <li class="card">
            <img src="maki.jpg" alt="">
            <p class="in">2020年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">まきちゃん</p>
            </div>
        </li>
        <li class="card">
            <img src="tecchan.jpg" alt="">
            <p class="in">2025年入社</p>
            <div class="inner">
                <p class="position">スタッフ</p>
                <p class="name">テッちゃん</p>
            </div>
        </li>
    </ul>
</section>
</main>
<?php include $base . 'footer.php'; ?>
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>