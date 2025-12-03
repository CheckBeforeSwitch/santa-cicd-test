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
            <h2>💐9月15日『敬老会』💐</h2>
            <div class="border"></div>
        </div>
        <p>
            9月15日の『敬老の日』💐<br>
            今年88歳を迎えた入居者さんの“米寿”のお祝いを行いました！<br>
            「今日の主役です」と書かれたタスキを肩にかけ、スタッフから記念品を受け取ります🎁
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="スタッフが記念品を手渡します"></div>
        </div>
        <p>
            ご夫婦で並んだ写真を見て、嬉しそうな顔を見せてくれました😊
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="これは誰だっけ？と興味津々"></div>
            <div class="media"><img src="./img/3.jpg" alt="記念品を手にして、誇らしげにカメラへ披露"></div>
        </div>
        <p>
            お昼には特別献立として、“お寿司🍣”や“からあげ🍗”を用意。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="色とりどりのお寿司や唐揚げが並ぶ、豪華な昼食"></div>
        </div>
        <p>
            「お寿司大好き！」「おいしいねえ」と箸を進める入居者さんたち。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="いただきますの前に、ちょっとつまみ食い"></div>
            <div class="media"><img src="./img/6.jpg" alt="大きな口で、おいなりさんを頬張ります"></div>
            <div class="media"><img src="./img/7.jpg" alt="美味しい！と食べ進める入居者さん"></div>
            <div class="media"><img src="./img/8.jpg" alt="みんなで食卓を囲んで、特別メニューのお昼をいただきました"></div>
            <div class="media"><img src="./img/9.jpg" alt="お腹がいっぱいで、ついウトウト"></div>
        </div>
        <p>
            たくさん食べて、元気いっぱいの1日になりました！<br>
            来年も、みんな揃ってこの日が迎えられるよう、また1年頑張りましょう！
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