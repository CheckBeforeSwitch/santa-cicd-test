<?php 
$base = '../../';
$blog_base = '../';

require_once '../blog_lib.php';
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
            <h2>8月5日 花火大会</h2>
            <div class="border"></div>
        </div>
        <p>
            夏といったら花火！<br>
            というわけで、８月５日にグループホームの外で花火会を楽しみました！<br>
            上田の花火大会と同日に開催したので、あちらこちらから賑やかな声が聞こえてきました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/hanabi-1.jpg" alt=""></div>
        </div>
        <p>
            サンタクロースでも、社員さんの子どもたちや職業体験で来てくれた中学生の女の子が来てくれたので、賑やかな声が上がりましたよ。<br>（※コロナ禍でありますが、屋外行事のため、一時的に外部との交流の機会を設けました。コロナ対策を万全にして、子どもたちとも上手に距離を取りながら花火を楽しみました。）
        </p>
        <p>
            噴き出し花火が点火されると目を大きくしてじっとみる利用者さんや隣の方に「きれいねぇ」と声をかける利用者さん。美しい花火の光をそれぞれで楽しんでいるように感じられました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/hanabi-2.jpg" alt=""></div>
            <div class="media"><img src="./img/hanabi-3.jpg" alt=""></div>
        </div>
        <p>
            お子さんたちは利用者さんが花火をしっかり持てるようにお手伝いしてくれたり、花火を配ってくれたり。子どもたちが利用者さんたちに積極的に関わってくれたので、利用者さんからは明るい笑顔が浮かんでいました！
        </p>
        <div class="flexbox">
             <div class="media"><img src= "./img/hanabi-4.jpg" alt=""></div>
             <div class="media"><img src= "./img/hanabi-5.jpg" alt=""></div>
             <div class="media"><img src= "./img/hanabi-6.jpg" alt=""></div>
        </div>
        <P>
            美しい花火の光を楽しみながら、少しでも夏を感じてもらえたらいいなあ。
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