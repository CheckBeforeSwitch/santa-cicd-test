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
            <h2>7月4日　🎋「七夕まつり」🎋</h2>
            <div class="border"></div>
        </div>
        <p>
        「七夕まつり」を始める前に、まずは七夕ゼリーを入居者さんと一緒に作ります♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="全員分のゼリーを盛り付けて…"></div>
            <div class="media"><img src="./img/2.jpg" alt="盛り付け途中でカメラに向けてニッコリ。"></div>
        </div>  
        <p>
            みかんを乗っけて完成・・・！？
        </p>
        <p>
            つるつるしていて、手からみかんが逃げちゃいます（笑）
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt="入居者さんがスタッフと一緒に生クリームを一生懸命絞っています。"></div>
        </div>    
        <p>
            クリームを真剣に絞る入居者、スタッフもつられて真剣な表情で見守ります。
        </p>
            <div class="media"><img src="./img/4.jpg" alt="入居者さんが早速七夕ゼリーを食べようとしています。"></div>
        </div>  
        <p>
            出来ました～✨✨
        </p>
        <p>
            今日のために、みんなで考えた“七夕ゼリー（サンタVer）”です🎋🌟
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="一口パクリ"></div>
            <div class="media"><img src="./img/6.jpg" alt="みかんと生クリームは直前まで冷蔵庫で冷やしていました。"></div>
        </div> 
        <p>
            完成した七夕ゼリーをみなさんでパクリ♪
        </p>
        <p>
            「冷たくてとっても美味しい～☺☺」
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt="スタッフと一緒に七夕の願いを短冊に飾ろうとしています。"></div>
            <div class="media"><img src="./img/8.jpg" alt="「元気になりたい」という願い事でした！"></div>
        </div>
        <p>
            続いて、メインイベントの“短冊の飾り付け”🌟
        </p> 
        <p>
            お願い事は一体どんなことを書いたのでしょうか・・・？
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt="別の入居者さんも短冊に願い事を飾っています。"></div>
            <div class="media"><img src="./img/10.jpg" alt="「美味しいものを食べて長生き」など様々な願い事が飾られました"></div>
        </div>
        <p>
            素敵な願い事がたくさん書かれています🌌✨🌟
        </p> 
        <p>
            来年もまたやりましょう～！！
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/11.jpg" alt="入口の横に短冊のついた笹を飾りました。"></div>
        </div>
        <p>
            みなさんの願い事はリビングに飾ってあります！
        </p> 
        <p>
        <p>
            とっても見えやすい位置ですね✨✨
        </p> 
        </p> 
        <div>
            <div class="media"><img src="./img/12.jpg" alt="「われは海の子」と「茶摘」の歌詞が冊子に記載されています。"></div>
        </div>
        <p>
            おまつりの最後には、入居者のみなさんで歌を唄いました♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/13.jpg" alt="入居者さんがはきはきと歌っています。"></div>
            <div class="media"><img src="./img/14.jpg" alt="こちらはカメラ目線でニコニコと！"></div>
            <div class="media"><img src="./img/15.jpg" alt="「信濃の国」もみんなで歌いました。"></div>
        </div>
        <p>
            締めはやっぱり長野県歌「信濃の国」で大盛り上がり✨✨
        </p>
        <p>
            七夕まつりはこれでおしまい！
        </p>
        <p></p>
        <p></p>
        <p>
            ゼリーを食べて願い事を飾って、歌を唄って。
        </p>
        <p>
            思い出に残る素敵なイベントでした🎋🎋🌟
        </p>
        <p>
            スタッフのお願い事は「来年も、みんなで七夕まつりを開催できますように☺✨」
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