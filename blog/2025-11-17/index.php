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
            <h2>🍁11月17日『秋のドライブ』🚙</h2>
            <div class="border"></div>
        </div>
        <p>
            “もみじ”や“イチョウ”が色づき、まさに秋本番！<br>
            午前・午後に分かれて、みんなでドライブに出かけました🚙
        </p>
        <div class="flexbox">
            <div class="media">
                <img src="./img/01.jpg" alt="雲一つない空の下、サンタクロースの車が停まっています">
            </div>
            <div class="media">
                <img src="./img/02.jpg" alt="上着やマフラーでしっかり防寒">
            </div>
        </div>
        <p>
            お留守番のスタッフに見送られながら、いざ出発🎶
        </p>
        <div class="media">
            <img src="./img/03.jpg" alt="車窓から、赤や黄色に色づいた木々が広がります">
        </div>  
        <p>
            午前チームが向かうのは、別所温泉方面。<br>
            途中で立ち寄った『生島足島神社』では、真っ赤に染まったもみじに「わぁキレイ～！」と大歓声✨
        </p>
        <div class="flexbox">
            <div class="media">
                <img src="./img/04.jpg" alt="車のドアを開けて、真っ赤なもみじを鑑賞">
            </div>
            <div class="media">
                <img src="./img/05.jpg" alt="カメラを見つけて笑顔の入居者さん">
            </div>
        </div>
        <p>
            『前山寺』では、なんと猫が2匹お出迎え！<br>
            今回いちばんの盛り上がりポイントでした🐱
        </p>
        <div class="flexbox">
            <div class="media">
                <img src="./img/06.jpg" alt="敷地の入り口で、まるで出迎えているような猫">
            </div>
            <div class="media">
                <img src="./img/07.jpg" alt="枯草と同じ色の猫に、一所懸命手を振ります">
            </div> 
        </div>
        <p>
            「私は赤いもみじが好き」「ここ、昔よく来たよ」など、車内でも会話が弾みます。<br>
            途中何度か“寄り道”を……🍂
        </p>
        <div class="flexbox">
            <div class="media">
                <img src="./img/08.jpg" alt="イチョウの落ち葉を拾いました">
            </div>
            <div class="media">
                <img src="./img/09.jpg" alt="イチョウの落ち葉を手に乗せて嬉しそうな入居者さん">
            </div>
            <div class="media">
                <img src="./img/10.jpg" alt="開けたドアから、外を眺めます">
            </div>
            <div class="media">
                <img src="./img/11.jpg" alt="こちらの入居者さんは、思わず身を乗り出していました">
            </div>
        </div>
        <p>
            別所温泉に着いたら、車窓越しに『北向観音』へ手を合わせます。
        </p>
        <div class="media">
            <img src="./img/12.jpg" alt="手を合わせてお参り">
        </div>
        <p>
            代表の入居者さんがスタッフと一緒に購入したお饅頭は、3時のおやつにみんなでいただきました。
        </p> 
        <div class="media">
            <img src="./img/13.jpg" alt="饅頭を片手に、店から出てくる入居者さんとスタッフ">
        </div>
        <p>
            秋空の下、ゆったり景色を楽しむ笑顔いっぱいのドライブになりました😊<br>
            また来年も、みんなで綺麗な紅葉を見に行きましょう🍁✨
        </p>
        <div class="media">
            <img src="./img/14.jpg" alt="スタッフも入居者さんも笑顔いっぱいの車内でした">
        </div>
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