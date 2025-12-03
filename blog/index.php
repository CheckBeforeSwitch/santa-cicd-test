<?php

$base = '../';
$blog_base = './';
$file = $blog_base .'blog.json';
require_once $blog_base .'blog_lib.php';
$blog = getBlogData($file);
// ページタイトル
$title = 'サンタのお便り｜グループホームサンタクロース';

// ページデスクリプション
$description = 'グループホームサンタクロースの行事やお出かけなど、利用者の皆さんの日々の出来事や日常を発信しています。';

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';
// 
// 正規URL
$canonical = 'https://sakaki-santaclaus.jp/blog/';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include $base . 'gtag.inc'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $base ?>hamburger.css">
<link rel="stylesheet" href="<?= $base ?>style.css"><link rel="stylesheet" href="style-blog.css?v=1">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="<?= $canonical ?>">
<title><?= $title ?></title>
<meta name="keywords" content="<?= $keywords ?>">
<meta name="description" content="<?= $description ?>">
<meta property="og:site_name" content="グループホーム　サンタクロース">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="https://sakaki-santaclaus.jp/ogp_image.jpg">
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<section id="fv">
	<div class="fv-area">
		<img src="top_1.jpg" alt="">	
	</div>
	<div class="text_area">
		サンタのお便り
	</div>
</section>
<section id="blog-list"><?php
foreach($blog as $b) { 
	if(isset($b)) { ?>
	<div class="nitizyou_box_wrapper">
		<a href="./<?= h($b['date']) ?>" class="nitizyou_box">
			<div class="thumbs" ><img src="./<?= h($b['date']) .'/img/'. h($b['fv']) ?>" alt=""></div>
				<div class="content">
					<time datetime="<?= h($b['date']) ?>"><?= h($b['date']) ?></time>
					<h2 class="title"><div class="circle"></div><span><?= h($b['title']) ?></span></h2>
					<p><?= h($b['desc']) ?></p>
				<div class="link btn_1" href="./<?= h($b['date']) ?>/">続きを読む</div>
			</div>
		</a>
	</div><?php
	}
}?>
</section>
</main>
<?php include $base . 'footer.php'; ?>
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>