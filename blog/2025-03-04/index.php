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
            <h2>3月4日「冬のドライブ」🚙⛄</h2>
            <div class="border"></div>
        </div>
        <p>
            この日は久しぶりの雪景色❄<br>
            外の空気はとても冷たく、玄関を開けると「凍りつきそう！」と驚く入居者さんも。
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="寒い！と思わず目を閉じる入居者さん。"></div>
        </div>
        <p>
            そんな寒さに負けないように、帽子やマフラーでしっかり防寒対策をします🧣
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="帽子を被り、上着のチャックを一番上まで上げます。"></div>
            <div class="media"><img src="./img/3.jpg" alt="しっかりマフラーを巻いて、靴を履いていきます。"></div>
        </div>  
        <p>
            いざ出発！スタッフと一緒に、順番に乗り込んでいきます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="スタッフの手を握り、ゆっくり歩きます。"></div>
            <div class="media"><img src="./img/5.jpg" alt="スタッフに手を引かれ、外に出ます。"></div>
            <div class="media"><img src="./img/6.jpg" alt="助手席に座った入居者さんの座り心地を確認します。"></div>
        </div>    
        <p>
            車内は暖かく、窓の外の雪景色を眺めながらのドライブにワクワク🎶
        </p>
        <div>
            <div class="media"><img src="./img/7.jpg" alt="ドライブ中。ここ知ってる！と嬉しそうな入居者さん。"></div>
        </div>  
        <p>
            今回のドライブの目的地は、地元にある『鉄の展示館』です！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/8.jpg" alt="鉄の展示館に向かって歩きます。"></div>
            <div class="media"><img src="./img/9.jpg" alt="寒かった！と手を握る入居者さん。"></div>
        </div> 
        <p>
            普段は刀などの展示がメインですが、この日は期間限定の特別展示として、たくさんの雛人形が飾られていました。<br>
            館内に入ると、色とりどりの雛人形がずらり！🎎🌸<br>
            「かわいいね～」「ずっと見ていられるね！」と、入居者さんたちも嬉しそうに眺めていました😊
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/10.jpg" alt="立派だねー!と6段の雛人形を見ています。"></div>
            <div class="media"><img src="./img/11.jpg" alt="車いすの2人が並んで見学しています。"></div>
            <div class="media"><img src="./img/12.jpg" alt="昔の雛人形も。"></div>
            <div class="media"><img src="./img/14.jpg" alt="どの雛人形が好きか、選んでいる入居者さんもいました。"></div>
        </div>
        <p>
            雛人形を見たあとは、常設されている刀の展示も楽しみました👀
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/15.jpg" alt="本物みたい！とイラストに触れる入居者さん。"></div>
            <div class="media"><img src="./img/16.jpg" alt="スタッフの説明を聞きながら、展示場を回ります。"></div>
            <div class="media"><img src="./img/17.jpg" alt="こちらの入居者さんは、説明文をじっくり読んでいます。"></div>
        </div>
        <p>
            展示室の外には椅子もあり、休憩しながらのんびり観賞できました。
        </p>
        <div>
            <div class="media"><img src="./img/18.jpg" alt="談笑する入居者さんたち。"></div>
        </div>
        <p>
            そして、ここで撮影タイム！✨<br>
            「ここにもお雛様！」
        </p>
        <div>
            <div class="media"><img src="./img/19.jpg" alt="昔ながらのお雛様をパシャリ"></div>
        </div>
        <p>
            「ここにもお雛様！」
        </p>
        <div>
            <div class="media"><img src="./img/20.jpg" alt="現代風のかわいらしいお雛様もパシャリ"></div>
        </div>
        <p>
            「こっちにもお雛様…？」
        </p>
        <div>
            <div class="media"><img src="./img/21.jpg" alt="刀匠の宮入さんの銅像の隣にお雛様のように並ぶ入居者さんを、ツーショットでパシャリ"></div>
        </div>
        <p>
            思わず笑ってしまう楽しい一コマでした🤭
        </p>
        <p>
            最後は、集合写真もパシャリ！📷✨
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/22.jpg" alt="入居者さんたちが、カメラに向かってポーズしています。"></div>
            <div class="media"><img src="./img/23.jpg" alt="こちらの入居者さんたちは少し緊張しています。"></div>
        </div>
        <p>
            帰りの車内では、地元のお店の話や、好きな出前の話で大盛り上がり!<br>
            「よくカラオケに行ったよ」「私はお寿司が好き！」と、話が尽きませんでした。
        </p>
        <div>
            <div class="media"><img src="./img/24.jpg" alt="スタッフと一緒に、思い出話に花を咲かせています。"></div>
        </div>
        <p>
            雪景色の中、楽しい思い出がまたひとつ増えました❄✨<br>
            次回のお便りもお楽しみに🎶
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