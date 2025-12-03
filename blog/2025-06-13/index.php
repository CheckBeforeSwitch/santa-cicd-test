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
            <h2>🌹6月13日『バラ公園』🌹</h2>
            <div class="border"></div>
        </div>
        <p>
           今日は、ドライブで「さかき千曲川 バラ公園」へ行ってきました！
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="さかき千曲川バラ公園は今が見ごろ"></div>
        </div>
        <p>
            梅雨の間のやわらかな日差しに恵まれて、気持ちの良いお出かけ日和となりました☀<br>
            準備ができた人から車に乗り込み、いざ出発です🚙
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="玄関の椅子に座り、靴を履きます。"></div>
            <div class="media"><img src="./img/3.jpg" alt="スタッフに支えられながら、車に乗り込みます。"></div>
        </div>  
        <p>
            「時期が過ぎちゃったかな？」と少し心配していましたが、まだたくさんのバラが咲いていて、私たちを迎えてくれました🌹✨
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt="満開の赤いバラ。ちょうど見ごろの品種もありました。"></div>
        </div>    
        <p>
            到着すると、なぜか突然始まる大合唱（笑）<br>
            普段は控えめな入居者さんもノリノリで、楽しい雰囲気に包まれました🎶
        </p>
        <div>
            <div class="media"><img src="./img/5.jpg" alt="手拍子をしながら、大きな声で歌います。"></div>
        </div>  
        <p>
            歌い終わったら、公園の中をのんびり散策。<br>
            「きれいだね～」「どの色が好き？」「どんな匂いかな？」なんて声があちこちから聞こえてきました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/6.jpg" alt="ピンクのバラのアーチの中で、写真をパシャリ。"></div>
            <div class="media"><img src="./img/7.jpg" alt="この大きなピンクのバラは、どんな匂いかな？"></div>
            <div class="media"><img src="./img/8.jpg" alt="にこにこ楽しそうに歩いていきます。"></div>
            <div class="media"><img src="./img/9.jpg" alt="車から降りるのを悩んでいた入居者さんも、来てよかった～と嬉しそう。"></div>
        </div> 
        <p>
            “LOVE”という名前のバラに、興味津々の入居者さんも👀💕
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/10.jpg" alt="ラブという名前のバラを見つけました。"></div>
            <div class="media"><img src="./img/11.jpg" alt="スタッフと一緒に写真をパシャリ。いい笑顔です。"></div>
        </div>
        <p>
            色とりどりのバラが咲き誇り、穏やかな時間を過ごすことができました。
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/12.jpg" alt="仲良し男３人で。"></div>
            <div class="media"><img src="./img/13.jpg" alt="バラのお手入れをしている方から、ピンクのバラをもらって喜んでいます。"></div>
        </div>
        <p>
            
            今回も、笑顔いっぱいの楽しいイベントになりました😊<br>
            来月のイベントも、どうぞお楽しみに！
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