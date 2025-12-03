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
<link rel="stylesheet" href="<?= $blog_base ?>style-blog.css?v=2">
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
            <h2>4月10日　🚙「雨の日花盛りドライブ」☔🌸</h2>
            <div class="border"></div>
        </div>
        <p>
        今日は施設内の清掃のため、雨の日ではありましたが、お花見ドライブへ行きました。
        お見送りを受け、出発です♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="施設長が雨の中、車の外から両手を振って見送ります。"></div>
        </div>
        <h3 class="heading">
            午前の部
        </h3>
        <p>
        Yさんは
        「雨の日でも、車の中なら濡れないから安心だｗ」
        とルンルンです♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/3.jpg" alt="Yさんが窓の外を眺めています。"></div>
            <div class="media"><img src="./img/4.jpg" alt="窓際でお花見が楽しみで笑顔満面の人もいます。"></div>
        </div>  
        <p>
        道中、風に飛ばされた"三角コーン"や"旗"、川に流れている"ボール"を発見！<br>
        「午後は雨が弱まるといいなあ。」
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="雨の中、車内のフロントガラスからは満開のあんずの花が見えました。"></div>
            <div class="media"><img src="./img/6.jpg" alt="あんずの花が咲いている中を車が進んでいきます。"></div>
        </div>    
        <p>
        『あんずの里』が見えてきました！！
        きれいなピンク色のお花が窓からもよく見えます。
        </p>
        <h3 class="heading">
            午後の部
        </h3>
        <p>
            午後は『信州国際音楽村』へドライブ🚙
        </p>
        <p>
            雨足も弱まったので、窓を開けてお花見です！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt="車の後部座席の扉を開け、音楽村の水仙を眺めています。"></div>
            <div class="media"><img src="./img/8.jpg" alt="斜面いっぱいに黄色いスイセンが咲き誇っています。ちらほらと白いスイセンもあります。"></div>
        </div>
        <p>
            スイセンもきれいに咲いていますね☺
        </p>
        <div>
            <div class="media"><img src="./img/9.jpg" alt="助手席の利用者さん、スイセンをバックにうれしそう。"></div>
        </div>
        <p>
            ドライブでは恒例になりつつある"『北向観音（上田市別所温泉）』に車内からお参り"
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/10.jpg" alt="助手席から手を合わせる利用者さん。"></div>
            <div class="media"><img src="./img/11.jpg" alt="北向き観音とは全く正反対の方向に向かって手を合わせている利用者さん。"></div>
        </div>
        <p>
            カメラマンの願い事は、「皆さんがいつまでも健康でいられますように…」<br>
            さて皆さんどんなお願い事をしたのでしょうか？
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