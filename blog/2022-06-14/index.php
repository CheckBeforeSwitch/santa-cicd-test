<?php 
require_once '../blog_lib.php';
require_once './blog_header.php';
$base = '../../';
$blog_base = '../';

//ブログページが表示された時にブログの日付がJsonに含まれてなければブログメタデータを挿入
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
            <h2>6月14日 バラ公園散策</h2>
            <div class="border"></div>
        </div>
        <p>
            　６月１４日に「さかき千曲バラ公園」でバラを見てきました！
        </p>
        <p>
            　当日は風が強く、急に寒くなったので利用者の皆さんからは「寒い～」といった声が続々上がりました。利用者Y.Yさんは「風で飛ばされちゃうから捕まらせてよ」と言って、利用者K. Kさんの車いすの取っ手に捕まる一面がありました。「寒い寒い」と言いつつも、にこにこ笑顔で和気藹々としている姿を見ると、寒さも吹き飛んでほっこりしちゃいます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/baraen-1.jpg" alt=""></div>
            <div class="media"><img src="./img/baraen-2.jpg" alt=""></div>
        </div>
        <p>
            　バラ公園内では色とりどりのバラを見て「きれいね～」「鮮やかだね」と声を上げながら、笑顔で鑑賞を楽しんでいました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/baraen-5.jpg" alt=""></div>
            <div class="media"><img src="./img/baraen-9.jpg" alt=""></div>
            <div class="media"><img src="./img/baraen-10.jpg" alt=""></div>
             <div class="media"><img src="./img/baraen-11.jpg" alt=""></div>
             <div class="media"><img src="./img/baraen-12.jpg" alt=""></div>
             <div class="media"><img src="./img/baraen-13.jpg" alt=""></div>
             <div class="media"><img src="./img/baraen-14.jpg" alt=""></div>
        </div>
        <p>
            　利用者H.Sさんの「バラを取って持ち帰りたいわ～」という冗談に周りのみんなから笑い声が聞こえました。確かにお部屋に飾りたいくらい綺麗なバラでした！
        </p>
        <div class="flexbox">
             <div class="media"><img src= "./img/baraen-6.jpg" alt=""></div>
             <div class="media"><img src= "./img/baraen-15.jpg" alt=""></div>
             <div class="media"><img src= "./img/baraen-8.jpg" alt=""></div>
        </div>
        <P>
            　さあ帰ろう！といった時に利用者S.Hさんの旧友と会いました。「会えてよかった」と、再会に驚きながら、お二人とも満面の笑みで喜びあっていました。
        </P>
        <P>
        
            　天気が悪いため、長居はできませんでしたが、寒さを忘れる美しさや嬉しい出会いがあったので、いい思い出になったのではないでしょうか
        </p>
        <div class="flexbox">
             <div class="media" ><img  src="./img/baraen-7.jpg" alt=""></div>
             <div class="media" ><img  src="./img/baraen-16.jpg" alt=""></div>
        </div>
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
</html