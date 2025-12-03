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
            <h2>🏅10月16日『ミニ運動会』🏅</h2>
            <div class="border"></div>
        </div>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="トップ"></div>
        </div>
        <p>
            秋といえば「食欲の秋」、「読書の秋」…いいえ、「運動の秋」！！<br>
            サンタクロースでは、「ミニ運動会」を開催しました🎌
        </p>
        <div>
            <div class="media"><img src="./img/2.jpg" alt="壁には、秋を感じる紅葉の貼り絵が貼られています。"></div>
        </div>  
        <p>
            定番BGM『天国と地獄』と共に、選手たちがぞくぞくと集まります。<br>
            運動会は、2チームに分かれての対抗戦です。
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt="入居者さんたちが集まってきました。"></div>
        </div>   
        <p>
            まずは準備体操。<br>
            体を伸ばしたり、手をぶらぶらさせたりして、しっかりウォーミングアップ。
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt="入居者さんが一列に向き合って座り、手を伸ばしてウォーミングアップしています。"></div>
        </div>  
        <p>
            1種目めは“ボール渡し”。<br>
            隣の人へスピーディにボールをパスしていき、先に一周したチームが勝ちです😊
        </p>
        <div>
            <div class="media"><img src="./img/5.jpg" alt="青いボールを隣から隣へ受け渡します。"></div>
        </div>
        <p>
            勝ったチームには、拍手が送られます👏
        </p>
        <div>
            <div class="media"><img src="./img/6.jpg" alt="お互いのチームに、拍手を送り合います。"></div>
        </div>
        <p>
            2種目めは“玉入れ”。<br>
            それぞれ両手にボールを持ち、スタッフが動かすカゴをめがけて投げ入れます。
        </p> 
        <div>
            <div class="media"><img src="./img/1.jpg" alt="カゴめがけて、ボールを投げ入れる入居者さん。"></div>
        </div>
        <p>
            「がんばれ～！」「今だ！」「投げるの上手！」と声が飛び交い、盛り上がりました😝
        </p>
        <div>
            <div class="media"><img src="./img/7.jpg" alt="各チーム向き合って座り、スタッフの動かすカゴにボールを入れていきます。"></div>
        </div>
        <p>
            皆さんお上手で、どちらのチームも接戦です！
        </p>
        <p>
            3種目めは“風船バレー”🎈<br>
            たくさんの風船を落とさないように、ラリーを続けられたチームが勝利となります。<br>
            色とりどりの風船がふわりと舞い、みんな夢中で風船を打ち合います。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/8.jpg" alt="一つの風船が落ちていく様子を、みんなで真剣に見つめています。"></div>
            <div class="media"><img src="./img/9.jpg" alt="椅子に座った入居者さんたちが手を伸ばし、風船を打とうとしています。"></div>
        </div> 
        <p>
            反射神経抜群の皆さんに、スタッフもびっくりです👀
        </p>
        <p>
            たくさん体を動かしたあとは、手を洗っておやつタイム🍵<br>
            「二葉堂」のお菓子を、みんなでおいしくいただきました。
        </p>
        <div>
            <div class="media"><img src="./img/10.jpg" alt="食べやすく一口サイズに切られたお菓子が、それぞれのお皿に並べられています。"></div>
        </div>
        <p>
            口いっぱいに、おやつを頬張って大満足✨
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/11.jpg" alt="お菓子を口に頬張る入居者さんたち。"></div>
            <div class="media"><img src="./img/12.jpg" alt="スプーンでおやつを食べる入居者さん。"></div>
        </div> 
        <p>
            甘いお菓子には、お茶が合いますね🍵
        </p>
        <div>
            <div class="media"><img src="./img/13.jpg" alt="スタッフに介助されながら、お茶を飲む入居者さん。"></div>
        </div>
        <p>
            気になる運動会の勝敗は…<br>
            みんな頑張ったので、結果は全員優勝！🏅
        </p>
        <p>
            来年の運動会も、元気いっぱい体を動かしましょう！
        </p>
        <div>
            <div class="media"><img src="./img/14.jpg" alt="カメラ目線で、ポーズをとってくれる入居者さん。"></div>
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