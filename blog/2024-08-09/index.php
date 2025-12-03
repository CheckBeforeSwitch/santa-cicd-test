<?php 
require_once '../blog_lib.php';
require_once './blog_header.php';

$base = '../../';
$blog_base = '../';

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
<link rel="stylesheet" href="<?= $blog_base ?>style-blog.css?v=1">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="<?= $canonical ?>">
<title><?= $title ?></title>
<meta name="keywords" content="<?= $keywords ?>">
<meta name="description" content="<?= $blog_description ?>">
<meta property="og:site_name" content="グループホーム　サンタクロース">
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="https://sakaki-santaclaus.jp/blog/<?= $blog_date ?>/img/<?= $blog_fv ?>">
<meta property="og:description" content="<?= $blog_description ?>">
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<section class="basic_block">
    <article id="blog_art">
        <div class="h2_wrapper">
            <div class="ball"></div>
            <h2>8月9日 🎇「夏の花火会」🎇</h2>
            <div class="border"></div>
        </div>
        <p>
            今年も“花火”の季節がやってきました！<br>
            というわけで、８月９日にグループホームサンタクロースの敷地内で“花火”を楽しみました！
        </p>
        <p>
            まずはスタッフから、開会のあいさつ！
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="スタッフから注意事項を入居者さんに向けて話しました。"></div>
        </div>
        <p>
            今年のラインナップはこちら✨
        </p>
        <div>
            <div class="media"><img src="./img/2.jpg" alt="打ち上げ花火や手持ち花火、ねずみ花火など様々な種類の花火を用意しました。"></div>
        </div>    
        <p>
            今年も、スタッフや入居者さんだけでなく、近所の子供たちと一緒に花火を楽しみました。入居者さんに花火を配ったり、花火に火を着けたりするのを手伝ってくれたりしました🎇
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/3.jpg" alt="スタッフの息子さんがコンクリートブロックに固定しながら恐る恐る着火！"></div>
            <div class="media"><img src="./img/4.jpg" alt="スタッフの子供たちから花火を入居者さんに配っていただきました。"></div>
        </div>  
        <p>
            手持ち花火に点火されると、目を丸くして“じぃ～”と見る入居者さんや、「キレイだねぇ～」としみじみと趣を感じている入居者さんがいました😆
        </p>
        <div>
            <div class="media"><img src="./img/5.jpg" alt="入居者さんが手持ち花火に見とれています。"></div>
        </div> 
        <p>
            花火が持てない入居者さんは、スタッフが一緒に持ちながら眺めました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/6.jpg" alt="車いすに座りながら花火をじっと見ています。"></div>
            <div class="media"><img src="./img/7.jpg" alt="こちらの入居者さんは口を開け驚きながら見ています。"></div>
            <div class="media"><img src="./img/8.jpg" alt="こちらは少し火が怖い様子…"></div>
        </div>
        <p>
            締めの“打ち上げ花火”🧨🎆<br>
            「ドン！」「パーン!!」 の迫力に拍手や歓声が上がり、しばらく夜空を見上げてました。
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt="打ち上げ花火を点火しました"></div>
            <div class="media"><img src="./img/10.jpg" alt="合計で10個以上の打ち上げ花火を打ち上げました。"></div>
            <div class="media"><img src="./img/11.jpg" alt="皆さん真剣に1個1個見ていました。"></div>
        </div>
        <p>
            今年もキレイな花火を、入居者さん、スタッフ共に楽しみました。<br>
            少しでも入居者さんの思い出に残るといいなぁ。😊
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