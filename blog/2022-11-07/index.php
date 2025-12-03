<?php 
require_once '../blog_lib.php';
require_once './blog_header.php';
$base = '../../';
$blog_base = '../';

//ブログメタデータの挿入
putBlogData($data);

// ページタイトル
$title = "{$blog_title}｜サンタのお便り｜グループホームサンタクロース";

// ページデスクリプション
$description = '';

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';
// 
// 正規URL
$canonical = "https://sakaki-santaclaus.jp/blog/{$blog_date}/";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include $base . 'gtag.inc'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $base ?>hamburger.css">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="../style-blog.css?v=1">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="<?= $canonical ?>">
<title><?= $title ?></title>
<meta name="keywords" content="<?= $keywords ?>">
<meta property="og:site_name" content="グループホーム　サンタクロース">
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="https://sakaki-santaclaus.jp/ogp_image.jpg">
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<!--<section id="fv">
	<div class="fv-area">
		<img src="top_1.jpg" alt="">	
	</div>
	<div class="text_area">
		施設概要
	</div>
</section>-->
<section class="basic_block">
    <article id="blog_art">
        <div class="h2_wrapper">
            <div class="ball"></div>
            <h2>11月07日 紅葉ドライブ</h2>
            <div class="border"></div>
        </div>
        <p>
            11月7日にサンタクロースの利用者みんなで、上田～丸子生島足島神社を巡り、様々な色合いに色付いた山々を見ながらドライブに行ってきました。<br>
            当日は天候にも恵まれ、「いい日に連れて来てもらった！」と感嘆の声も上がり、その流れで午後には「善光寺」まで足を運びました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/zenkoji-1.jpg" alt=""></div>
            <div class="media"><img src="./img/zenkoji-2.jpg" alt=""></div>
            <div class="media"><img src="./img/zenkoji-3.jpg" alt=""></div>
        </div>
        <p>
            利用者の方々は坂城町、上山田出身の方が多いので、善光寺までの道のりで「私はここに住んでた。」「ここで農業してた。フルーツ作ってた。」など思い出話をしながら。黄色や赤みがかった木々、山々をみながら楽しく向かいました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/zenkoji-4.jpg" alt=""></div>
        </div>
        <p>
            コロナの影響もあって、ここ数年は遠出ができなかったこともあり、長野駅前のビルの街並みをみたとき、その発展具合にとても驚いている利用者さんもいました。
        </p>
        <p>
            また善光寺にはたくさんの観光客が来ていたこともあり、コロナ対策のため、利用者の方々は外に出ず、車内から善光寺を拝観しました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/zenkoji-5.jpg" alt=""></div>
        </div>
        <p>
            帰りは善光寺で買った、そば饅頭を食べながら帰りました。<br>
            長時間バスに乗った疲れのせいもあってか、少し口数が少なくなりましたが、長野県の県歌を歌いながら楽しく帰りました。
        </p>
        <div class="flexbox">
             <div class="media"><img src= "./img/zenkoji-6.jpg"alt=""></div>
        </div>
        <P>
            来年もまたみんなで一緒に紅葉を楽しみたいなぁ。
        </P>
        <div class="bottom_link">
            <a class="btn_1" href="./">ブログ一覧に戻る</a> 
            <a class="btn_1" href= "../enter/">ご入居について</a>
        </div>
    </article>
</section>
</main>
<?php include $base . 'footer.php'; ?>	
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>