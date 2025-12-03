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
            <h2>🌾9月27日『お神楽』🌾</h2>
            <div class="border"></div>
        </div>
        <p>
            今年も、入居者さんや地域の方々の健やかな暮らしを願い、そして『五穀豊穣』『厄災払拭』『豊作』への感謝を込めて、地元「鼠宿太々神楽保存会」のみなさんがお神楽を舞ってくださいました。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="集まった入居者さんの前で、大きな獅子が舞います"></div>
            <div class="media"><img src="./img/2.jpg" alt="獅子がポーズを決め、ひょっとこが入居者さんに近づきます"></div>
            <div class="media"><img src="./img/3.jpg" alt="棒の先についた赤い布で、入居者さんのおでこをそっと触るひょっとこ"></div>
        </div>
        <p>
            太鼓や笛の音色が響き始めると、一気に会場が引き込まれます。<br>
            「ありがとう！お兄さん！」「良いぞ～！」「アンコ～ル！？」などの声援が飛び交い、笑顔と拍手の絶えない時間になりました👏✨ 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="獅子舞の被り物と「世話人」と書かれた提灯を持てせてもらい、うれしそうな入居者さん"></div>
            <div class="media"><img src="./img/5.jpg" alt="獅子舞の被り物を興味津々に触る入居者さん"></div>
            <div class="media"><img src="./img/6.jpg" alt="被り物を借りて、笑顔でピース"></div>
        </div>
        <p>
            日本の伝統を身近に感じながら、にぎやかで楽しいひとときを満喫しました😊<br>
            また明日からも、元気いっぱいで過ごしましょう！ 
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