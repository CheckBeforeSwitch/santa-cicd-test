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
            <h2>2月3日　「豆まき」</h2>
            <div class="border"></div>
        </div>
        <p>
            本日は豆まきを行いました。
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="壁一面におたふく、鬼、升に入った豆の塗り絵が貼られています。"></div>
        </div>  
        <p>
            今年は全日本鬼協会より、鬼のKさんが来てくれるそうです！
        </p>
        <div>
            <div class="media"><img src="./img/2.jpg" alt="鬼のお面と鬼のパンツが準備してあります。"></div>
        </div>    
        <p>
           鬼が来る前に予行練習。
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt="利用者さんがボールを投げる練習をしました。"></div>
        </div>  
        <p>
           グループホームサンタクロースでは、ボールを使って鬼退治です。
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt="職員が利用者さんそれぞれにボールを手渡ししています。"></div>
        </div> 
        <p>
            鬼が現れるまで、待機。<br>
            手に汗握る瞬間です。
        </p> 
        <div>
            <div class="media"><img src="./img/5.jpg" alt="利用者さんそれぞれが違う色のボールを力強く握っています。"></div>
        </div>
        <p>
           現れました！ついに鬼のＫさんです！
        </p> 
        <div>
            <div class="media"><img src="./img/6.jpg" alt="通路奥から鬼の仮面を被り、鬼のパンツをはいたKさんが出てきました。左手にはプラスチックバットの棍棒を持っています。"></div>
        </div>
        <p>
           みなさん。Kさんに向かって投げ始めました！
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt="利用者さんはとても楽しそうに座ったままボールを投げています。"></div>
            <div class="media"><img src="./img/8.jpg" alt="他の利用者さんも一生懸命ボールを投げようとしています。"></div>
        </div>
        <p>
            ボールを拾う間は待っていてくれる優しい鬼です。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt="利用者さんが投げ終わったボールを拾っています。"></div>
            <div class="media"><img src="./img/10.jpg" alt="早速拾ったボールを鬼に投げようとしています。臨場感たっぷり"></div>
            <div class="media"><img src="./img/11.jpg" alt="鬼が利用者さんに急接近、ニコニコ楽しみながらボールを投げています。"></div>
            <div class="media"><img src="./img/12.jpg" alt="鬼が近づいても悠長に、ボールを持ったままの利用者さんもいました。"></div>
            <div class="media"><img src="./img/13.jpg" alt="鬼のこん棒を持った利用者さんが興奮しています。"></div>
        </div>
        <p>
            こん棒が利用者さんの手に……！！
        </p>
        <div>
            <div class="media"><img src="./img/14.jpg" alt="こん棒がとられている間に・・・"></div>
        </div>
        <p>
            そんなすきを狙って横から投げる方もいました。
        </p>
        <div>
            <div class="media"><img src="./img/17.jpg" alt="別の利用者さんも棍棒を取ろうと必死です。"></div>
        </div>
        <p>
            こん棒をうばって
        </p>
        <div>
            <div class="media"><img src="./img/15.jpg" alt="こん棒で鬼を退治しようとしています。"></div>
        </div>
        <p>
            えいやー！！！！
        </p>
        <div>
            <div class="media"><img src="./img/16.jpg" alt="さらに別の利用者さんがピコピコハンバーで鬼のお尻を叩こうとしています。"></div>
        </div>
        <p>
            すきを狙って、おしりも！<br>
            四方八方から、退治される鬼、ちょっとかわいそうになってきました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/18.jpg" alt="利用者さんはボールを鬼に向かって投げています。"></div>
            <div class="media"><img src="./img/19.jpg" alt="鬼も投げられるボールをキャッチしようとしています。"></div>
            <div class="media"><img src="./img/20.jpg" alt="やり切った鬼、入居者の皆さんに手を振っています。"></div>
        </div>
        <p>
            へとへとのKさん、帰っていきました。
        </p>
        <div>
            <div class="media"><img src="./img/21.jpg" alt="鬼が持っていた青いピコピコハンマーをまだ持っています"></div>
        </div>
        <p>
            カメラは見逃してしまいましたが、どうやらこの一撃で撃沈したようです。
        </p>
        <div>
            <div class="media"><img src="./img/22.jpg" alt="おやつの時間です。利用者さん各々が机に向かって座っています。机の上にはおやつと飲み物があります。"></div>
        </div>
        <p>
            今日のおやつは甘納豆。<br>
            「いただきます」をしている間にフライングをしている方がいますね・・・。<br>
            ひと働きの後は、ゆっくりお茶を楽しみます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/23.jpg" alt="甘納豆をパクリっ"></div>
            <div class="media"><img src="./img/24.jpg" alt="おやつを食べながらカメラ目線"></div>
            <div class="media"><img src="./img/25.jpg" alt="利用者の皆さんおいしそうに甘納豆を食べています。"></div>
            <div class="media"><img src="./img/26.jpg" alt="あったかい飲み物をのみながらゆったり"></div>
            <div class="media"><img src="./img/27.jpg" alt="おやつを食べ終わった後は太陽にあたりながらまったりしています。"></div>
        </div>
        <p>
            日差しが暖かくなってきましたね！
        </p>
        <div>
            <div class="media"><img src="./img/28.jpg" alt="一人の利用者さんが鬼の被り物をしながらおやつを食べていました。"></div>
        </div>
        <p>
            おや？鬼が豆を食べている・・・・。
        </p>
        <div>
            <div class="media"><img src="./img/29.jpg" alt="最後に鬼の被り物をしながらカメラに向かってピース！"></div>
        </div>
        <p>
            来年は私が鬼です！<br>
            後ろから闘志に満ちた目をしているHさん。<br>
            二人の対決をお楽しみに！
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