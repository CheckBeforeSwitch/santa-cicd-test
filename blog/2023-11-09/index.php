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
            <h2>11月9日　「紅葉おさんぽ🍂」</h2>
            <div class="border"></div>
        </div>
        <p>
            午前中は、上山田を経由して、「更埴中央公園」へ。
        </p>
        <p>
            見事なイチョウと素敵なイチョウの絨毯の上を散策。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="鬱金色や緑色のきれいなイチョウの葉です。"></div>
            <div class="media"><img src="./img/2.jpg" alt="みんなで木に残った葉や辺り一面に広がっている落ち葉を見ました。"></div>
        </div>  
        <p>
            途中からは"銀杏"拾いに夢中になりました。
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt="職員さんと入居者で銀杏を探しました。"></div>
        </div>
        <p>
            午後は、東御市経由で小諸「懐古園」へ。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="車で懐古園に着きました。"></div>
            <div class="media"><img src="./img/5.jpg" alt="シートベルトを外して外に出る準備をしています。"></div>
        </div>    
        <p>
            キレイに色付いた紅葉に、皆さん大変喜ばれておりました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/6.jpg" alt="助手席に乗っている入居者が懐古園の紅葉を見て満面の笑みです。"></div>
            <div class="media"><img src="./img/7.jpg" alt="車の窓から懐古園の紅葉を楽しみました。"></div>
        </div>  
        <div class="flexbox">
            <div class="media"><img src="./img/8.jpg" alt="空、木立、紅葉を背景に入居者は満面の笑みです。"></div>
            <div class="media"><img src="./img/9.jpg" alt="懐古園の駐車場で車内から外の景色を見ています。"></div>
        </div>  
        <div>
            <div class="media"><img src="./img/10.jpg" alt="懐古園で見られる空、木立、紅葉の鮮やかな景色です。"></div>
        </div>
        <p>
            その後、"牛"はいませんでしたが、「布引観音」を経由して渓谷と紅葉を楽しんでまいりました。
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