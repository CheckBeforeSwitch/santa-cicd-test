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
<link rel="stylesheet" href="<?= $blog_base ?>style-blog.css?v=2">
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
            <h2>6月24日　🚙「花盛りのバラドライブ」🌹</h2>
            <div class="border"></div>
        </div>
        <p>
        今日は、午前・午後で坂城町の『さかき千曲川 バラ公園』へドライブ！
        </p>
        <h3 class="heading">
            午前の部
        </h3>

        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="ピンクのバラのアーチの前で集合写真を撮りました"></div>
        </div>
        <p>
                ”アーチ”の前で「ハイチーズ！」
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="Yさんがバラに指を差しながらカメラ目線でパシャリ"></div>
        </div>
        <p>
        ピンクのバラかと思ったら、ピンクの服を着たYさんでした！
        </p>

        <h3 class="heading">
            午後の部
        </h3>
        <p>
        午後はさらに暑くなることが予想されたので、暑さ対策で“羊さん”になってみました。
        韓国で流行している巻き方のようです。本人も気に入った様子！かわいい🎶

        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt="利用者さんが頭に羊のようなタオルの巻き方をして笑顔でこちらを向いています。"></div>
        </div>  
        <p>
        改めて『さかき千曲川 バラ公園』に到着！
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt="公園前の看板で車いすに座った利用者さんのツーショットです。"></div>
        </div>   
        
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="熱中症対策のため麦わら帽子をかぶります。"></div>
            <div class="media"><img src="./img/6.jpg" alt="介護職員から帽子をかぶせてもらっている利用者さんもいました。"></div>
        </div>
        <p>
        “麦わら帽子”をかぶって、日差しからを身体を守ります。
        </p>
        <div>
            <div class="media"><img src="./img/7.jpg" alt="入居者さん全員帽子をかぶり、準備万端です。"></div>
        </div>
        <p>
        みんなでおそろいの帽子で素敵です。（ある意味“麦わらの一味”ｗ）

        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/8.jpg" alt="入居者さんたちでバラ公園の中で談笑しています。"></div>
            <div class="media"><img src="./img/9.jpg" alt="話が終わると皆さんバラをじっくり見つめていました。"></div>
        </div>
        </p>
        まずはみんなで集合写真
        ちょっぴり暑さにやられております。
        <p>
        <div class="flexbox">
            <div class="media"><img src="./img/10.jpg" alt="麦わら帽子をしっかりかぶりつつ、バラの前で集合写真です。"></div>
            <div class="media"><img src="./img/11.jpg" alt="今度は帽子を外した集合写真も撮りました"></div>
        </div>

        <div>
            <div class="media"><img src="./img/12.jpg" alt="こっそり手をつなぎながら写真撮影を行う利用者さんもいました。"></div>
        </div>

        <p>
        手をつないで、仲良しですね～！
        </p>
        
        <p>
        午後はもっと暑いかと思いましたが、少し日が陰って風が出てきたので、散策することに。
        </p>
        <div>
            <div class="media"><img src="./img/13.jpg" alt="なにやら、見に行きたい方向を指さす入居者さん"></div>
        </div>
        <p>
        「あっちのバラを見に行きたい！」とご希望です。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/14.jpg" alt="羊タオルを巻き、カメラ目線で写真に写る入居者さんもいました。"></div>
        </div>
        <p>
        散策、いってらっしゃ～い！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/15.jpg" alt="ピンクのバラの香りをかぐ入居者さん"></div>
        </div>
        <p>
        こんなに近くでバラを見れて、幸せそう。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/17.jpg" alt="赤いバラの前で写真撮影、ちょっと暑そうです"></div>
            <div class="media"><img src="./img/18.jpg" alt="ピンクのバラでひょうきんな顔をする入居者さん"></div>
        </div> 
        <div class="flexbox">
            <div class="media"><img src="./img/19.jpg" alt="ピンクのバラをまじまじと見つめている入居者さんも…"></div>
            <div class="media"><img src="./img/20.jpg" alt="黄色のバラの前で職員と談笑している入居者さんもいました。"></div>
        </div>
        <p>
        “バラのアーチ”の中でひと休み。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/21.jpg" alt="バラのアーチの中からカメラに向かってピース！"></div>
            <div class="media"><img src="./img/22.jpg" alt="にこにこでバラの間から顔を覗いている入居者さんでした。"></div>
        </div>
        <h3 class="heading">
            おまけ
        </h3>
        <p>
            坂の下の駐車場まで、バックで降りていく、サンタクロース御一行。
        </p>

        <div>
            <div class="media"><img src="./img/23.jpg" alt="安全に坂道を下るため介護職員が後ろ歩きで車いすを引いています。"></div>
        </div>

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