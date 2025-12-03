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
            <h2>5月16日 🏕️「ピクニック in びんぐしの里公園」🏕️</h2>
            <div class="border"></div>
        </div>
        <p>
            本日は『びんぐしの里公園』にピクニックに行ってきました！
        </p>
        <p>
            出発前は雨日和だったのが、直前になって晴れました。「日頃の行いが良いからかな？w」と話しながら『びんぐしの里公園』に向かいました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="グループホームサンタクロース、快晴の中サンタクロースの外に出てきました。"></div>
            <div class="media"><img src="./img/2.jpg" alt="マイクロバスの中で入居者さん同士で話をしています。"></div>  
        </div>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="ピクニックチェアに到着です。"></div>
        </div>    
        <p>
           あらかじめ、スタッフが日よけのテントを設置しておきました。入居者の皆さんテント付近に集合です。
        </p>
            <div class="media"><img src="./img/5.jpg" alt="各々椅子に座りながら一休み"></div>  
        <p>
           一往復では乗り切らなかったため、後から入居者さんが合流です。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/6.jpg" alt="歩ける入居者さんはスタッフに手を引かれながらテントに向かっていきます。"></div>
            <div class="media"><img src="./img/7.jpg" alt="車いすを使ってテントに向かう入居者さんもいます。"></div>
            <div class="media"><img src="./img/8.jpg" alt="スタッフが一生懸命車いすを押して、テントまで運びます。"></div>
            <div class="media"><img src="./img/9.jpg" alt="無事、入居者さん全員びんぐしの里公園に集合です！"></div>
        </div>
        </div> 
        <p>
            11時過ぎになると陽が出始め、暖かくなってきました。
        </p>
        <div class="media"><img src="./img/10.jpg" alt="スタッフがピクニックチェアに座った入居者さんの写真撮影を行っています。"></div>
        <p>
            久しぶりのピクニックで、入居者の皆さんとてもニコニコしていました！
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/12.jpg" alt="施設長と一緒にガーデンテーブルを囲んで団らん。周りでは新緑が生い茂っています。"></div>
        </div>
        <p>
           そんな時、後ろから不穏な黄色い影が・・・・
        </p>
        <div class="media"><img src="./img/13.jpg" alt="岩の後ろにだれかが隠れているぞ。"></div> 
        <p>
           "阪神Tシャツ"を着たサンタクロースのスタッフでしたw。夜勤明けの疲れた身体を押して遊びに来てくれました。
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/14.jpg" alt="見つかっちゃったと岩の後ろから顔を出します。"></div>
        </div>
        <p>
            スタッフが登場したおかげもあってか、カメラに向かって入居者さんがピースしてくれました。
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/16.jpg" alt="満面の笑みでカメラに向かってピース！"></div>
        </div>
        <p>
            そんなこんなでお昼時です。本日はスタッフの"手作りのお弁当"です。
        </p>
        <div>
            <div class="media"><img src="./img/17.jpg" alt="早速入居者さんがお弁当のふたを開けています。"></div>
        </div>
        <p>
            みんなで手を合わせて「いただきま～す！」
        </p>
        <div>
            <div class="media"><img src="./img/18.jpg" alt="スタッフと入居者さんがみんなで手を合わせました。"></div>
        </div>
        <p>
            皆さんおいしそうにご飯を食べています。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/19.jpg" alt="スタッフに食べさせてもらって食べている入居者さん"></div>
            <div class="media"><img src="./img/20.jpg" alt="赤いカーディガンを着た入居者さんがおいしそうにご飯を食べています。"></div>
            <div class="media"><img src="./img/21.jpg" alt="木陰でピクニックテーブルを囲んでご飯を食べています。"></div>
            <div class="media"><img src="./img/22.jpg" alt="カメラ目線でお弁当を食べている方も・・・"></div>
        </div>
        <p>
            中には、我慢できなくて手で直接食べる入居者さんもいました
        </p>
            <div class="media"><img src="./img/23.jpg" alt="手を使っておにぎりを一心不乱に食べています"></div>
        <p>
            皆さんしっかりお弁当を完食！！ おいしかったかな？😋
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/24.jpg" alt="箸を使って大根をパクっと"></div>
            <div class="media"><img src="./img/25.jpg" alt="手で口元を隠しながら食べている上品な方も・・・"></div>
            <div class="media"><img src="./img/26.jpg" alt="皆さんほとんど完食してくれました！"></div>
        </div>
        <p>
            食後は公園内をお散歩しました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/27.jpg" alt="スタッフに寄りそわれながら植え込みの間を歩きます。"></div>
            <div class="media"><img src="./img/28.jpg" alt="自分で歩けない人は車いすをスタッフに押してもらいながら"></div>
            <div class="media"><img src="./img/29.jpg" alt="入居者さんの旦那さんも駆けつけ、一緒に移動します。"></div>
            <div class="media"><img src="./img/30.jpg" alt="移動しながらカメラに向かってピース！"></div>
            <div class="media"><img src="./img/31.jpg" alt="ニッコリ笑顔でスタッフ押してもらいながら車いすでお散歩です。"></div>
        </div>
        <p>
            『びんぐしの里公園』には、とても大きい滑り台や様々な動物のオブジェがありました。
        </p>
        <div>
            <div class="media"><img src="./img/32.jpg" alt="そのほかにもジャングルジムや子供向けの遊具などもあります。"></div>    
        </div>
        <p>
            ベンチが隣にあったので、ひと休み。 入居者の皆さん、どんな木が生えているのか気にしてあたりをキョロキョロ👀
        </p>
        <div class="media"><img src="./img/33.jpg" alt="東屋の屋根の下に集まりました。"></div> 
        <div class="media"><img src="./img/34.jpg" alt="東屋の陰からたくさん並んだ動物の像を眺めています。"></div>
        <p>
            何やらリスに近づいていきます。。
        </p>
            <div class="media"><img src="./img/35.jpg" alt="目の前のリスのオブジェに早く触ろうと車いすから乗り出しています。"></div>
        <p>
            まるで生きているかのように撫でていました🐿️
        </p>
            <div class="media"><img src="./img/36.jpg" alt="入居者さんがニコニコでリスの像を撫でています。"></div>
        <div class="flexbox">
            <div class="media"><img src="./img/37.jpg" alt="今度はキリンの像にタッチ"></div>
            <div class="media"><img src="./img/38.jpg" alt="最後は羊の像と触れ合いました。"></div>
            <div class="media"><img src="./img/39.jpg" alt="別の入居者さんも小鹿の像に触れています。"></div>
        </div>
        <p>
            気持ちよくてウトウトする入居者さんもいらっしゃいました。
        </p>
        <div class="media"><img src="./img/40.jpg" alt="東屋の屋根の下で休みながらウトウト"></div>
        <p>
            コロナ明け、久しぶりのピクニックでした。
        </p>
        <p>
        皆さんとても楽しそうに過ごしていました⛺
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