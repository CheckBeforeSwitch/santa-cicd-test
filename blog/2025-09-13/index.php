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
            <h2>💃9月13日『手話ダンス』💃</h2>
            <div class="border"></div>
        </div>
        <p>
            手話ダンスサークル「かたくりの会」のみなさんをお招きし、手話ダンスを披露していただきました💃<br>
            「赤い花白い花」「見上げてごらん夜の星を」「瀬戸の花嫁」「ふるさと」を披露してくれました。<br>
            赤や白、花、星といった簡単な手話を教わりながら、入居者さんたちもノリノリで参加😊
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="歌やダンスに合わせて、楽しそうに手を動かす入居者さんたち"></div>
            <div class="media"><img src="./img/2.jpg" alt="「ふるさと」の手話を教わりながら、一緒に歌います"></div>
            <div class="media"><img src="./img/3.jpg" alt="こちらの入居者さんは少し恥ずかしそうに、スタッフとダンスに参加します"></div>
        </div>
        <p>
            最後の「ふるさと」は、手話を教わりながらみんなで歌いきり、拍手と笑顔でいっぱいに！<br>
            入居者さんからは「アンコール！」という声もあがり、楽しい時間となりました👏✨
        </p>
        <p>
            盛り上がったあとは、かたくりの会のみなさんと一緒にお茶会🍵<br>
            焼き菓子を食べながら、楽しいおしゃべりのひとときを過ごしました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="食べるのも忘れて、笑顔でおしゃべりを楽しみます"></div>
            <div class="media"><img src="./img/5.jpg" alt="おいしいよ！とカメラにアピール"></div>
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