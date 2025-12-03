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
            <h2>5月9日 バーベキュー</h2>
            <div class="border"></div>
        </div>
        <p>
            今月のサンタクロースのイベントはバーベキューです。<br>
            職員は慣れた手つきで炭に火をつけ、フランクフルトと焼き鳥を焼いていきます。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt=""></div>
            <div class="media"><img src="./img/2.jpg" alt=""></div>
        </div>
        <p>
            焼けるまでしばしご歓談を。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/3.jpg" alt=""></div>
            <div class="media"><img src="./img/4.jpg" alt=""></div>
        </div>
        <p>
            麦わら帽子の三姉妹(本当の姉妹ではありません……) 
        </p>
        <div>
            <div class="media"><img src="./img/5.jpg" alt=""></div>
        </div>
        <p>
            今日のお肉の共はおにぎりとお漬物です
        </p>
        <div>
            <div class="media"><img src="./img/6.jpg" alt=""></div>
        </div>
        <p>
            焼きたてお肉をいただきます！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt=""></div>
            <div class="media"><img src="./img/8.jpg" alt=""></div>
            <div class="media"><img src="./img/9.jpg" alt=""></div>
        </div>
        <p>
            上田と言えば、美味だれ！<br>
            焼き鳥にかけていただきます
        </p>
        <div>
            <div class="media"><img src="./img/10.jpg" alt=""></div>
        </div>
        <p>
            ネギも登場！
        </p>
        <div>
            <div class="media"><img src="./img/11.jpg" alt=""></div>
        </div>
        <p>
            ステーキ肉は食べやすくカット。<br>
            その後ろではマシュマロを焼いております。
        </p>
        <div>
            <div class="media"><img src="./img/12.jpg" alt=""></div>
        </div>
        <p>
            どうやら何を焼いているのか気になるご様子。
        </p>
        <div>
            <div class="media"><img src="./img/13.jpg" alt=""></div>
        </div>
        <p>
            まだおなかに余裕のある方はマシュマロ食べます！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/14.jpg" alt=""></div>
            <div class="media"><img src="./img/15.jpg" alt=""></div>
        </div>
        <p>
            はじめて見る大きなマシュマロに「怖い」といいながらも挑戦します！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/16.jpg" alt=""></div>
            <div class="media"><img src="./img/17.jpg" alt=""></div>
        </div>
        <p>
            Hさんはお肉もマシュマロもペロリ☆と平らげました。
        </p>
        <div>
            <div class="media"><img src="./img/18.jpg" alt=""></div>
        </div>
        <p>
            食事の後のにこにこショット
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/19.jpg" alt=""></div>
            <div class="media"><img src="./img/20.jpg" alt=""></div>
        </div>
        <p>
            最後に握手！<br>
            次のイベントも楽しみですね！
        </p>
        <div>
            <div class="media"><img src="./img/21.jpg" alt=""></div>
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