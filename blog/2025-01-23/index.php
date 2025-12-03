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
            <h2>1月23日  新年会🎍🌅</h2>
            <div class="border"></div>
        </div>
        <p>
            今年は"巳年"🐍
        </p>
        <p>
            巳=蛇は「復活」と「再生」の象徴と言われています。そんな縁起の良い年の始まりに、新年会を開催しました！
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="新年会を開催しました。"></div>
        </div>
        <p>
            事前に書初めを行い、新年会の準備を整えました。<br>書道が久しぶりの方も多く、少し緊張気味。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="初めは少し緊張気味でした。"></div>
            <div class="media"><img src="./img/3.jpg" alt="集中して取り組みました。"></div>
            <div class="media"><img src="./img/4.jpg" alt="丁寧に書き上げました。"></div>
        </div>  
        <p>
            難しいところはスタッフがお手伝いしながら、みなさん集中して取り組まれていました！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="スタッフと一緒に書きました。"></div>
            <div class="media"><img src="./img/6.jpg" alt="作品を飾りました。"></div>
        </div>    
        <p>
            新年の挨拶の後は、"おしるこ"を楽しみました。
            <br>あんこ好きな方が多く、「おしるこ大好物！」と笑顔がたくさん見られました😆
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt="みなさんで一緒にいただきました。"></div>
            <div class="media"><img src="./img/8.jpg" alt="とてもおいしいおしるこでした。"></div>
            <div class="media"><img src="./img/9.jpg" alt="当日いただいたおしるこです。"></div>
        </div>  
        <p>
            その後は、お正月遊びを満喫！
            <br>『お手玉』や『けん玉』、『ことわざクイズ』で盛り上がりました。
        </p>
        <div>
            <div class="media"><img src="./img/10.jpg" alt="けん玉に挑戦しました。"></div>
        </div> 
        <p>
            スタッフが上の句を読み、入居者のみなさんが下の句を答えるゲームでは…
        </p>
        <p>
            スタッフ：「犬も歩けば…」<br>入居者さん：「棒にあたる！！」
        </p>
        <p>
            スタッフ：「2階から…」
            <br>入居者さん：「落ちる…？？」
        </p> 
        <p>
            「それは大けがしちゃいますよ！」とみんなで大笑い！ 😆😆
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/11.jpg" alt="素敵な笑顔でピース！"></div>
            <div class="media"><img src="./img/12.jpg" alt="笑顔あふれる新年会でした。"></div>
        </div>
        <p>
            今年も笑顔あふれる毎日を、みなさんと一緒に作っていきたいです ✨
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