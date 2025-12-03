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
            <h2>8月19日 防災訓練</h2>
            <div class="border"></div>
        </div>
        <p>
            本日は雨模様の中、年に２度の防災訓練を行いました！
        </p>
        <p>
            防災訓練が始まる直前の風景です。みなさん各々ロビーでくつろいでいます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt=""></div>
            <div class="media"><img src="./img/2.jpg" alt=""></div>
        </div>
        <p>
            防災ベルが鳴り始めました！皆さん、スタッフと共に避難し始めます。
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt=""></div>
        </div>
        <p>
           煙を吸わないように、タオルを口に当てながら避難を行います。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt=""></div>
            <div class="media"><img src="./img/5.jpg" alt=""></div>
        </div>
        <p>
            利用者の皆さん、避難完了しました！<br>
            雨が降っているので外には出ずに、玄関付近でみんな仲良く並んで座っています。
        </p>
        <div>
            <div class="media"><img src="./img/6.jpg" alt=""></div>
        </div>
        <p>
            整列中もタオルは欠かせません。
        </p>
        <div>
            <div class="media"><img src="./img/7.jpg" alt=""></div>
        </div>
        <p>
            ロビーに戻った後は、利用者さんも一緒に全員で防災訓練の振り返りです。<br>
            実際の場面ではどのようなことが起こると予測されるのか、消防署にはどのような情報を伝えるのかを再確認。
        </p>
        <div>
            <div class="media"><img src="./img/8.jpg" alt=""></div>
        </div>
        <p>
            防災訓練に参加したスタッフからの質問もありました。
        </p>
        <div>
            <div class="media"><img src="./img/9.jpg" alt=""></div>
        </div>
        <p>
            翌日には、水が入った消火器を使って使い方を再確認しました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/10.jpg" alt=""></div>
            <div class="media"><img src="./img/11.jpg" alt=""></div>
        </div> 
        <p>
            災害が起きないほうがいいですが、“もしも”に備えてしっかり対応出来るよう訓練を行いました！
        </p>
        <p>
            以上！今月のサンタクロースのお便りは「防災訓練」でした！ 
        </p>
    </article>
</section>
</main>
<?php include $base . 'footer.php'; ?>	
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>