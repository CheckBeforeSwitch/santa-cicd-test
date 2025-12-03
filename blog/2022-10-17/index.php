<?php
require_once '../blog_lib.php';
require_once './blog_header.php';
$base = '../../';
$blog_base = '../';

//ブログタイトル

// ページタイトル
$title = "{$blog_title}｜サンタのお便り｜グループホームサンタクロース";
//ブログメタデータの挿入
putBlogData($data);
// ページデスクリプション
$description = '';

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';
// 
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
<!--<section id="fv">
	<div class="fv-area">
		<img src="top_1.jpg" alt="">	
	</div>
	<div class="text_area">
		施設概要
	</div>
</section>-->
<section class="basic_block">
    <article id="blog_art">
        <div class="h2_wrapper">
            <div class="ball"></div>
            <h2>10月17日 秋祭り</h2>
            <div class="border"></div>
        </div>
        <p>
            朝晩ひんやりとした空気になり、一気に秋らしくなりました。<br>
            サンタクロースの風景も少しずつ秋に変わってきました！<br>
            そして今日は「秋祭り」。”あひる釣り”や“輪投げ”を真剣に、楽しみながら遊びました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/akimaturi-1.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-2.jpeg" alt=""></div>
        </div>
        <p>
            「あひる釣りは難しい！」の声が多発しました。<br>
            「できないわ～」と言いながらも釣り上げるまで粘ったり、真剣な表情で諦めずにやりきったり。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/akimaturi-3.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-4.jpeg" alt=""></div>
        </div>
        <p>
            中にはひょいっ♪と簡単に釣り上げる方がいたり、「2個釣り上げた！」と見事な技を披露した釣り師もいました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/akimaturi-5.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-6.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-7.jpeg" alt=""></div>
        </div>
        <p>
            輪投げも「なかなか入らない～」と言いながらじりじりと前へ出て、近くからポイっと投げていました。どんどん前へ出てくるのは皆さん共通の行動。絶対に入れてやるぞ！といった気持ちがこちらにも伝わってきました。
        </p>
        <div class="flexbox">
             <div class="media"><img src= "./img/akimaturi-8.jpeg" alt=""></div>
             <div class="media"><img src= "./img/akimaturi-9.jpeg" alt=""></div>
             <div class="media"><img src= "./img/akimaturi-10.jpeg" alt=""></div>
             <div class="media"><img src= "./img/akimaturi-11.jpeg" alt=""></div>
        </div>
        <P>
            周りで見ていた方も外せば「あ～」と声が上がり、入れば「おー！」と歓声を上がり、みんなで一緒に楽しめた時間でした。
        </P>
        <div class="flexbox">
            <div class="media"><img src="./img/akimaturi-12.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-13.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-14.jpeg" alt=""></div>
        </div>
        <p>
            おやつは手作りポップコーンにベビーカステラ。そして勝利のチョコ！<br>
            ゲームをクリアした方に贈られたチョコは間違えなく美味しいでしょう！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/akimaturi-15.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-16.jpeg" alt=""></div>
        </div>
        <p>
            ベビーカステラと一緒にパシャリ！<br>
            「食べる？」とこちらを気遣ってくれました。美味しいおやつにピース！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/akimaturi-17.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-18.jpeg" alt=""></div>
        </div>
        <p>
            最後は突然始まった大合唱で締めました。<br>
            「信濃の国」は手拍子と一緒に、ノリノリな歌声が室内に響き渡りました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/akimaturi-19.jpeg" alt=""></div>
            <div class="media"><img src="./img/akimaturi-20.jpeg" alt=""></div>
        </div>
        <p>
            秋の歌も歌い、今日のサンタクロースは「秋まみれ」。秋に染まった1日でした。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/akimaturi-21.jpeg" alt=""></div>
        </div>
        <div class="bottom_link">
            <a class="btn_1" href="./">ブログ一覧に戻る</a> 
            <a class="btn_1" href= "../enter/">ご入居について</a>
        </div>
    </article>
</section>
</main>
<?php include $base . 'footer.php'; ?>	
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>