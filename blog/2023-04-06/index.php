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
            <h2>4月6日 お花見</h2>
            <div class="border"></div>
        </div>

        <p>
            今日はお花見</br>大きな車でドライブしながら上田市内のお花見スポットを回ります♪  
        </p>
        <p>
            今年の桜は通年よりも早く咲いてしまいましたが、場所によっては満開です！ 
        </p>
        <p>
             今日は独鈷山のふもと、旧丸子にある音楽村へ向かいます。坂城のほうへ向かう予定でしたが、山火事が発生したため、断念……。 
        </p>
        <p
            >車窓からも桜が見え、皆さん「キレイだね～」と声を上げます。
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt=""></div>
        </div>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt=""></div>
            <div class="media"><img src="./img/3.jpg" alt=""></div>
        </div>
        <div class="flexbox">
            <div class="media"></div>
        </div>
        <p>
            独鈷山のふもとで、休憩 
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt=""></div>
        </div>
        <p>
            車の中から桜を見ます。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt=""></div>
            <div class="media"><img src="./img/6.jpg" alt=""></div>
        </div>
        <p>
            上田城の桜はもう散ってしまいましたが、こちらは満開です。</br>
            窓から桜の甘い香りがしますね。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt=""></div>
            <div class="media"><img src="./img/8.jpg" alt=""></div>
        </div>
        <p>
            続いて向かったのが旧丸子にある音楽村です。</br>
            黄色とピンクが見えてきた～！ 
        </p>
        <div>
            <div class="media"><img src="./img/9.jpg" alt=""></div>
        </div>
        <p>
            あいにく曇りですが、空と山と桜と水仙と緑で５層になっていてキレイ！ 
        </p>
        <p>
            何名かは、歩いて水仙と桜を見に行くことに。</br>
            水仙はちょうど見頃です。
        </p>
        <div class="flexbox">
        <div class="media"><img src="./img/10.jpg" alt=""></div>
            <div class="media"><img src="./img/11.jpg" alt=""></div>
            <div class="media"><img src="./img/12.jpg" alt=""></div>
            <div class="media"><img src="./img/13.jpg" alt=""></div>
        </div>
        <div class="bottom_link">
            <a class="btn_1" href="../">ブログ一覧に戻る</a> 
            <a class="btn_1" href= "../../enter/">ご入居について</a>
        </div>
    </article>
</section>
</main>
<?php include $base . 'footer.php'; ?>	
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>