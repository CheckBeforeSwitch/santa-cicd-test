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
            <h2>🌸4月17日『喫茶会』🍵</h2>
            <div class="border"></div>
        </div>
        <p>
            「サンタ喫茶へようこそ！」<br>
            スタッフの元気な掛け声とともに、春の喫茶会が始まりました🌸🍵
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="スタッフが手を挙げて、元気よく挨拶します。"></div>
        </div>
        <p>
            この日のメインは、“ふんわり焼きたてのホットケーキ”🥞
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="今日のメインメニューのホットケーキと、リンゴジュース。"></div>
            <div class="media"><img src="./img/3.jpg" alt="スタッフが鉄板上のホットケーキをひっくり返します。"></div>
        </div>  
        <p>
            スタッフが焼き始めると、「いい匂い～！」「美味しそうだね～」と、入居者さんたちが自然と集まってきました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="カメラを見つけ、にっこりとポーズしてくれる入居者さん。"></div>
            <div class="media"><img src="./img/5.jpg" alt="こちらの入居者さんは、フライ返しを持って興味津々。"></div>
        </div>    
        <p>
            ホットケーキには、クリームやカラフルなチョコを自由にトッピング！<br>
            思い思いの1枚を完成させて、みなさん笑顔いっぱいに😊✨
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/6.jpg" alt="スタッフと一緒に生クリームを絞っています。"></div>
            <div class="media"><img src="./img/7.jpg" alt="こちらの入居者さんは、生クリームを丸く絞っていきます。"></div>
            <div class="media"><img src="./img/8.jpg" alt="チョコレートソースのトッピングに挑戦。"></div>
            <div class="media"><img src="./img/9.jpg" alt="スプーンを使って、カラフルなチョコを振りかけます。"></div>
            <div class="media"><img src="./img/10.jpg" alt="生クリーム、チョコ、チョコレートソースがトッピングされたホットケーキが完成しました。"></div>
        </div>  
        <p>
            飲み物は、スタッフお手製のメニュー表を見ながら注文します。
        </p>
        <div>
            <div class="media"><img src="./img/11.jpg" alt="お品書きは、緑茶、紅茶、コーヒー、ブドウジュース、リンゴジュース、オレンジジュースです。"></div>
        </div> 
        <p>
            「うーん、迷っちゃう！」と悩む方もいれば、「コーヒーで！」と“いつもの一杯”が決まっている方も☕
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/12.jpg" alt="全部おいしそう！と笑顔で悩んでいる入居者さん。"></div>
            <div class="media"><img src="./img/13.jpg" alt="こちらの入居者さんは、いつものコーヒーを注文。"></div>
            <div class="media"><img src="./img/14.jpg" alt="はやくホットケーキを食べたくてうずうずしてきました。"></div>
        </div>
        <p>
            飲み物が届いたら、みんなで「いただきます！」
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/15.jpg" alt="大きなホットケーキにかぶりつきます。"></div>
            <div class="media"><img src="./img/16.jpg" alt="お皿を持って、こぼさないように食べる入居者さん。"></div>
            <div class="media"><img src="./img/17.jpg" alt="大きな口で食べ進めます。"></div>
            <div class="media"><img src="./img/18.jpg" alt="嬉しそうな顔の入居者さん。"></div>
        </div>
        <p>
            「甘くておいしいね～！」「ジュースおかわりできる？」と、嬉しそうな声があちこちから聞こえてきました✨<br>
            みなさんペロリと完食！
        </p>
        <p>
            食後はみんなで歌を歌って、にぎやかで楽しい時間を過ごしました🎶
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/19.jpg" alt="みんなで手拍子しながら歌っています。"></div>
            <div class="media"><img src="./img/20.jpg" alt="スタッフの隣で、大きな口で歌う入居者さん。"></div>
            <div class="media"><img src="./img/21.jpg" alt="こちらの入居者さんも大きな声で歌います。"></div>
            <div class="media"><img src="./img/22.jpg" alt="スタッフの隣でにこにこ楽しそうな入居者さん。"></div>
        </div>
        <p>
            来月のイベントもお楽しみに！
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