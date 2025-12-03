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
            <h2>2月3日  👹「豆まき」👹 </h2>
            <div class="border"></div>
        </div>
        <p>
            2月3日は、節分の“豆まき”を楽しみました！ 
        </p>
        <p>
            始まりの挨拶では、 <br>
            スタッフ「本当は、歳の数より1つ多い豆を食べるんだよ～」 <br>
            入居者さん「そんなに食べられないよ！」 <br>
            スタッフ「お店の豆、なくなっちゃうよね！！」 <br>
            と大笑い🤣 
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="車いすに乗った入居者さんたちが輪になって、スタッフからの説明を聞きました。"></div>
        </div>
        <p>
            豆の代わりに、カラーボールを使って鬼を倒します👹<br>
            スタッフからボールを受け取り、まずは練習から… 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="入居者さんがスタッフからピンクのボールを受け取りました。"></div>
            <div class="media"><img src="./img/3.jpg" alt="別な入居者さんには、オレンジ色のボールが渡されました。"></div>
            <div class="media"><img src="./img/4.jpg" alt="入居者さんがスタッフに向かって、ボールを投げる練習をしています。"></div>
        </div>  
        <p>
            いよいよ鬼の登場です👹 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="スタッフが仮装した赤鬼と青鬼がピコピコハンマーを持って現れました。"></div>
        </div>    
        <p>
            「オニはそと～！」と、ボールを投げて鬼を退治する入居者さんたち。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/6.jpg" alt="入居者さんの投げたボールが赤鬼に命中しました。"></div>
            <div class="media"><img src="./img/7.jpg" alt="さらに、入居者さんたちが右腕を大きく振りかぶって、ボールを投げようとしています。"></div>
            <div class="media"><img src="./img/8.jpg" alt="ボールを両手に持って、タイミングを伺っている入居者さんも。"></div>
        </div>  
        <p>
            入居者さんの中には、鬼に近づいてボールを投げる方や、“ピコピコハンマー”で戦う方も！🤣
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt="入居者さんが立ち上がって、赤鬼に向かってボールを投げています。"></div>
            <div class="media"><img src="./img/10.jpg" alt="こちらの入居者さんは、ピコピコハンマーで赤鬼を叩いています。"></div>
        </div> 
        <p>
            身体を動かして、自然と笑顔も増えました😊 
        </p>
        <p>
            「お疲れさまです！」と握手をして、鬼をねぎらう優しい入居者さんたち（笑） 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/11.jpg" alt="入居者さんが、赤鬼と笑顔で握手をしています。"></div>
            <div class="media"><img src="./img/12.jpg" alt="こちらの入居者さんは、赤鬼と真剣な顔で握手をしています。"></div>
        </div>
        <p>
            鬼退治の後は、みんなでお茶会です🍵<br>
            準備をしていると、「まだ鬼いるよー！」「うしろ、うしろ！」という声が🤭
        </p> 
        <div>
            <div class="media"><img src="./img/13.jpg" alt="スタッフがまだ鬼のお面を頭の後ろにつけているのに、入居者さんが気が付きました。"></div>
        </div>
        <p>
            鬼のお面をかぶって、ノリノリの入居者さんも！ 
        </p>
        <div>
            <div class="media"><img src="./img/14.jpg" alt="入居者さんも、鬼のお面をかぶって、ピース。"></div>
        </div>
        <p>
            お茶会では、甘納豆を楽しみました！ <br>
            「甘くておいしいねぇ～♪」という声があちこちから聞こえてきました😊 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/15.jpg" alt="入居者さんが、パクパクと甘納豆を食べ進めています。"></div>
            <div class="media"><img src="./img/16.jpg" alt="入居者さんがおやつを食べる手伝いも、スタッフが行います。"></div>
            <div class="media"><img src="./img/17.jpg" alt="スタッフが持ち上げたお皿から、甘納豆をぱくり。"></div>
            <div class="media"><img src="./img/18.jpg" alt="カメラを見つけてポーズしてくれる入居者さんも。"></div>
            <div class="media"><img src="./img/19.jpg" alt="食べ終えた入居者さんは、笑顔で話しています。"></div>
            <div class="media"><img src="./img/20.jpg" alt="こちらの入居者さんは、スタッフと一緒に嬉しそうです。"></div>
            <div class="media"><img src="./img/21.jpg" alt="スタッフと入居者さんが笑顔で話しています。"></div>
        </div>
        <p>
            お茶会の後は、懐かしい童謡や唱歌を口ずさみながら、穏やかな時間を過ごしました🎶👏 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/22.jpg" alt="入居者さんたちが、テレビに映る歌詞を見ています。"></div>
            <div class="media"><img src="./img/23.jpg" alt="入居者さんたちが、スタッフと一緒に手拍子をしながら、曲を口ずさんでいます。"></div>
        </div>
        <p>
            “福”がたくさん訪れますように🙏✨ 
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