<?php 
require_once '../blog_lib.php';
require_once './blog_header.php';

$base = '../../';
$blog_base = '../';

require_once '../blog_lib.php';
//ブログメタデータの挿入
putBlogData($data);

// ページタイトル
$title = "{$blog_title}｜サンタのお便り｜グループホームサンタクロース";

// ページデスクリプション
$blog_description = '鬼を追い払い、福を呼び寄せるイベントですね！平和なグループホーム サンタクロースにも…';

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';

// ページデスクリプション
$description = '';

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
<link rel="stylesheet" href="../style-blog.css?v=1">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="<?= $canonical ?>">
<title><?= $title ?></title>
<meta name="keywords" content="<?= $keywords ?>">
<meta property="og:site_name" content="グループホーム　サンタクロース">
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="https://sakaki-santaclaus.jp/ogp_image.jpg">
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<!--<section id="fv">
	<div class="fv-area">
		<img src="top_1.jpg" alt="">	
	</div>
	<div class="text_area">
		施設概要
	</div>
</section>-->
<section class="basic_block">
    <article id="blog_art">
        <div class="h2_wrapper">
            <div class="ball"></div>
            <h2>2月3日 節分の日</h2>
            <div class="border"></div>
        </div>
        <p>
            鬼を追い払い、福を呼び寄せるイベントですね！ <br>
            平和なグループホーム サンタクロースにも、鬼が現れたようです。
        </p>
        <div class="flexbox">
            <div class="media"><img src="img/1.jpg" alt=""></div>
        </div>
        <p>
        鬼退治のために、まずは準備運動。</br>
        いつもより気合が入ります！ 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt=""></div>
            <div class="media"><img src="./img/3.jpg" alt=""></div>
            <div class="media"><img src="./img/4.jpg" alt=""></div>
        </div>
        <p>
            「鬼は外ー！」と大きな声が出せるように、口の運動もします。</br>
            やる気満タン！         
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt=""></div>
        </div>
        <p>
            なんとこの鬼は増えるタイプの鬼みたい！ 
            巨悪な力で利用者のW.Kさんも鬼になってしまいました。
        </p>
        <div class="flexbox">
             <div class="media"><img src= "./img/6.jpg"alt=""></div>
        </div>
        <P>
            Wさんを救え！ </br>
            ってアレ？座っちゃった・・・
        </P>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt=""></div>
        </div>
        <p>
            鬼の力はWさんに及ばなかったみたいですね。</br>
            仲間を一人失った鬼は容赦なく利用者さんに威嚇しています！ 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/8.jpg" alt=""></div>
            <div class="media"><img src="./img/9.jpg" alt=""></div>
        </div>
        <p>
            それに負けじと戦う利用者さんたち！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/10.jpg" alt=""></div>
            <div class="media"><img src="./img/11.jpg" alt=""></div>
        </div>
        <p>
            豆ではなく“ボール”で鬼退治</br>
            「なげろー！たたけー！」 </br>
            そして皆の力を合わせて倒すことができました！
        </p>
            <div class="media"><img src="./img/12.jpg" alt=""></div>
        <p>
            ばいばーい！・・・？</br>
            意外と…　みんな…　興味ないゾ(-_-;) 
        </p>
            <div class="media"><img src="./img/13.jpg" alt=""></div>
        <p>
            鬼を倒し</br>
            福を呼び寄せたところで、歌を歌って、おやつの時間です。</br>
            食べる前にしっかり消毒。 
        </p>
        <div class="media"><img src="./img/14.jpg" alt=""></div>
        <p>
            今日のおやつは、</br>
            「恵方巻ロール」と「甘納豆」
        </p>
        <div class="media"><img src="./img/15.jpg" alt=""></div>
        <p>
            年の数にしてしまうと、100粒越える方もいらっしゃるので、ほどほどに</br>
            まって！この人いただきますの前にフライングしてますっっっ！
        </p>
        <div class="media"><img src="./img/16.jpg" alt=""></div>
        <p>
            H.Kさん、カメラに向かって、だれが鬼なのか教えてくれました。 
        </p>
        <div class="media"><img src="./img/17.jpg" alt=""></div>
        <p>
            いえいえ、鬼は存在するんですよ～施設職員じゃないですよ～！</br>
            平和が戻ったサンタクロース。</br>
            午後の自由時間を楽しむのでした～。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/18.jpg" alt=""></div>
            <div class="media"><img src="./img/19.jpg" alt=""></div>
            <div class="media"><img src="./img/20.jpg" alt=""></div>
        </div>
        <div class="bottom_link">
            <a class="btn_1" href="../">ブログ一覧に戻る</a> 
            <a class="btn_1" href= "../../enter/">ご入居について</a>
        </div>
    </article>
</section>
</main>
<?php include $base . 'footer.php'; ?>	
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>