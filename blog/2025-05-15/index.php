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
            <h2>🍖5月15日『BBQ』🍖</h2>
            <div class="border"></div>
        </div>
        <p>
            心地よい風が吹く中、サンタクロースの庭でBBQを楽しみました！<br>
            スタッフが炭に火をつけると、匂いに誘われるように入居者さんたちがひとり、またひとりと外へ。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="車いすの入居者さんが、スタッフと笑顔で話しています。"></div>
            <div class="media"><img src="./img/2.jpg" alt="知っている入居者さんを見つけて、嬉しそうに話しかけている入居者さんも。"></div>
        </div>
        <p>
            麦わら帽子をかぶってのんびり集まってくる様子に、自然と笑みがこぼれます😊<br>
            遠くから、一所懸命うちわであおいでくれる入居者さんの姿もあり、スタッフも思わずほっこり（笑）
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt="がんばれー！と一所懸命うちわであおぎます。"></div>
        </div>  
        <p>
            “ぽかぽか陽気”のなか、うとうと…と気持ちよさそうにしている方もいらっしゃいました🌿
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt="麦わら帽子で顔が隠れています。"></div>
        </div>    
        <p>
            炭火では、“お肉”や“フランクフルト”が焼き上がっていきます🍖
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="スタッフがお肉をどんどん焼いていきます。"></div>
            <div class="media"><img src="./img/6.jpg" alt="焼きあがったフランクフルトの山。"></div>
        </div>  
        <p>
            さらに、スタッフ特製の“おにぎり”や“漬物”も！
        </p>
        <div>
            <div class="media"><img src="./img/7.jpg" alt="お肉や漬物を紙皿に盛り付けていきます。"></div>
        </div> 
        <p>
            準備ができた人から、焼きたてをいただきます🤤<br>
            「お肉おかわり！」「おいしい！」と元気な声が飛び交いました🍖✨
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/8.jpg" alt="大きな口を開けて、お肉を食べます。"></div>
            <div class="media"><img src="./img/9.jpg" alt="こちらの入居者さんはおにぎりを頬張っています。"></div>
            <div class="media"><img src="./img/10.jpg" alt="嬉しそうにお肉をおかわりする入居者さん。"></div>
            <div class="media"><img src="./img/11.jpg" alt="黙々と食べ進める入居者さんも。"></div>
            <div class="media"><img src="./img/12.jpg" alt="風で飛びそうな麦わら帽子を押さえています。"></div>
            <div class="media"><img src="./img/13.jpg" alt="こちらでは、スタッフがスプーンで食事介助をしています。"></div>
            <div class="media"><img src="./img/14.jpg" alt="スプーンでおかゆを食べる入居者さん。"></div>
        </div>
        <p>
            それぞれが好きな飲み物を選んで、わいわいにぎやかな時間に🍹
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/15.jpg" alt="どれにしようか真剣に悩んでいます。"></div>
            <div class="media"><img src="./img/16.jpg" alt="カメラを見つけた入居者さんが、ポーズしてくれました。"></div>
        </div>
        <p>
            途中で、おいしい匂いにつられたのか、ハチがひと騒動…！🐝<br>
            スタッフのひとりが果敢に立ち向かってくれました💪（笑）
        </p>
        <div>
            <div class="media"><img src="./img/17.jpg" alt="スタッフが虫たたきでハチを追いかけています。"></div>
        </div>
        <p>
            今回も、笑顔いっぱいの楽しいイベントになりました😊<br>
            来月のイベントも、どうぞお楽しみに🎶
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