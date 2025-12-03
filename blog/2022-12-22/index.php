<?php 
$base = '../../';

require_once '../blog_lib.php';
//ブログメタデータの挿入
putBlogData($data);

// ページタイトル
$title = "{$blog_title}｜サンタのお便り｜グループホームサンタクロース";

// ページデスクリプション
$description = '';

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
            <h2>12月22日 クリスマス忘年会</h2>
            <div class="border"></div>
        </div>
        <p>
            本日は、一足お先にクリスマス会と忘年会を兼ねた「クリスマス忘年会」を開催しました♪<br>
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/xmas1.jpg" alt=""></div>
        </div>
        <p>
            素敵なサンタさんが午後に遊びに来てくれるとのこと！<br>
            先にクリスマス会を始め、職員さんが愛情を込めて作ってくれたケーキを食べながらサンタさんを待ちます。
            ケーキは可愛いショートケーキで、「かわいいわね！」「お店のケーキみたい」と賛辞の声を上げながら、皆さん大きな口を開けてもぐもぐと食べていました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/xmas2.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas3.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas4.jpg" alt=""></div>
        </div>
        <p>
            ケーキに乗っているデコレーションのチョコやカラースプレーをゴミだと思ってなかなか食べられない方がいましたが、「これ食べられるのよ」と職員さんが声をかけると「これ食べられるだか」といってぱくりと食べました。<br>「あら、美味しいじゃない」の声に「ごみじゃないのよこれ」とひと笑いが生まれました。ほんとに可愛い勘違いでした♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/xmas5.jpg" alt=""></div>
        </div>
        <p>
            そして、ついにサンタさんの登場です！ノリノリなサンタさんに皆さんも手を振り返したり、拍手をしたり！まるでライブのようです。
        </p>
        <div class="flexbox">
             <div class="media"><img src= "./img/xmas6.jpg"alt=""></div>
             <div class="media"><img src= "./img/xmas7.jpg"alt=""></div>
        </div>
        <P>
            さらにサンタさんたちは皆さんにクリスマスプレゼントを用意してくれました。一人一人にプレゼントをしっかりと手渡ししてくれます。
        </P>
        <div class="flexbox">
            <div class="media"><img src="./img/xmas8.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas9.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas10.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas11.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas12.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas13.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas14.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas15.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas16.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas17.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas18.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas19.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas20.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas21.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas22.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas23.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas24.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas25.jpg" alt=""></div>
        </div>
        <p>
            中にはプレゼントをもらって涙を流している方もいました。クリスマス会を開催出来てよかったなぁと改めて思います。<br>
            そして皆さんにプレゼントを届けてくれたサンタさんたちにも！メリークリスマス！！<br>
            ありがとう、サンタさんたち♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/xmas26.jpg" alt=""></div>
        </div>
        <p>
            最後は、クリスマスソングではなく、懐かしい昭和歌謡でクリスマス会を締めました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/xmas27.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas28.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas29.jpg" alt=""></div>
        </div>
        <p>
            忘年会ではいつもより豪勢なお夕食が出ました！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/xmas30.jpg" alt=""></div>
        </div>
        <p>
            今年一年を振り返ると、コロナに苦しめられましたが、対策をとりながら行事やお出掛けが出来たことをうれしく思います。また、２０２２年の最後を、皆さんと過ごせてよかったです。<br>
            ２０２３年も健康第一で、楽しくゆったりと過ごしましょう・・・。では、よいお年を！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/xmas31.jpg" alt=""></div>
            <div class="media"><img src="./img/xmas32.jpg" alt=""></div>
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