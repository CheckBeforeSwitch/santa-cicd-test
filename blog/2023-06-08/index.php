<?php 
require_once '../blog_lib.php';
require_once './blog_header.php';

$base = '../../';
$blog_base = '../';

require_once '../blog_lib.php';
//ブログメタデータの挿入
putBlogData($data);

// ページタイトル
$title = "{$blog_title}｜サンタのお便り｜グループホームサンタクロース";

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';

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
<section class="basic_block">
    <article id="blog_art">
        <div class="h2_wrapper">
            <div class="ball"></div>
            <h2>6月8日 ばら祭り</h2>
            <div class="border"></div>
        </div>
        <p>
            今日はばら祭りへ遊びに来ました。 
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt=""></div>
        </div>
        <p>
            この季節にしか見ることのできない、咲き誇るバラ。 
        </p>
        <p>
            咲き誇るバラに「きれいだね～」と歓声があがります。  
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/3.jpg" alt=""></div>
            <div class="media"><img src="./img/4.jpg" alt=""></div>
        </div>
        <p>
            みなさん、自分のペースで行けるところまでバラ園を回ります。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt=""></div>
            <div class="media"><img src="./img/6.jpg" alt=""></div>
        </div>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt=""></div>
            <div class="media"><img src="./img/8.jpg" alt=""></div>
        </div>
        <p>
            Hさん、バラを優しく触ったり、匂いをかいだり楽しんでいます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt=""></div>
            <div class="media"><img src="./img/10.jpg" alt=""></div>
        </div>
        <div>
            <div class="media"><img src="./img/11.jpg" alt=""></div>
        </div>
        <p>
            バラの下に咲くスミレに目を奪われてしまったHさん。<br> 
            手を伸ばそうとしています。        
        </p>
        <p>
            今日のお日様は薄い雲に隠れ、ちょうどいい気温！<br> 
            ゆったり見ることができました。 
        </p>

        <div class="flexbox">
            <div class="media"><img src="./img/12.jpg" alt=""></div>
            <div class="media"><img src="./img/13.jpg" alt=""></div>
            <div class="media"><img src="./img/15.jpg" alt=""></div>
        </div>
        <p>
            帰りに四ツ屋のバラ園へ。<br>
            こちらは車を駐車することができないため窓から楽しみます。         
        </p>
        <div>
            <div class="media"><img src="./img/16.jpg" alt=""></div>
        </div>
        <p>
            バラの町さかきを存分に楽しめるイベントでした。 
        </p>
        <div>
            <div class="media"><img src="./img/14.jpg" alt=""></div>
        </div>
        <p>
            来月のイベントは七夕です♪ 
        </p>
        <div class="bottom_link">
            <a class="btn_1" href="<?= $blog_base ?>">ブログ一覧に戻る</a> 
            <a class="btn_1" href= "<?= $base ?>enter/">ご入居について</a>
        </div>
    </article>
</section>
</main>
<?php include $base . 'footer.php'; ?>	
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>