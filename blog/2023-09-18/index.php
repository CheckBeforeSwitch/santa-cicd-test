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
<style>
.dots span {
  position: relative;
}
.dots span::before {
  content: "・";
  position: absolute;
  top: -0.7em;
  left: 0;
}
</style>
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<section class="basic_block">
    <article id="blog_art">
        <div class="h2_wrapper">
            <div class="ball"></div>
            <h2>9月18日 「敬老の日」</h2>
            <div class="border"></div>
        </div>
        <p>
            9月18日は「敬老の日」です。
        </p>
        <p>
            サンタクロースの入居者さんたちの長寿のお祝いをします♪
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt=""></div>
        </div>
        <p>
            ご家族から、お祝いのお花が届きました。
        </p>
        <div>
            <div class="media"><img src="./img/2.jpg" alt=""></div>
        </div>
        <p>
           今年『100歳』のS.H.さん<br>
           なんと総理大臣と長野県知事から賞状が届きました。
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt=""></div>
        </div>
        <p>
            遊びに来ていた小さなお客様から証書を授与！
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt=""></div>
        </div>
        <p>
            賞状をもらってうれしそう♪
        </p>
        <p>
            今年、『米寿』の方がお二人<br>
            N.Y.さんとK.K.さん
        </p>
        <div>
            <div class="media"><img src="./img/5.jpg" alt=""></div>
        </div>    
        <p>
            N.Y.さんは、お祝いしてもらってとてもうれしそう。
        </p>
        <div>
            <div class="media"><img src="./img/6.jpg" alt=""></div>
        </div>
        <p class="dots">
            K.K.さんは、まさか自分がお祝いされているとは気づかず、「誰が？」なんて<span>お</span><span>と</span><span>ぼ</span><span>け</span>しております。
        </p>
        <p>
           今日の🌸お祝いメニュー🌸は
        </p>
        <p>
            ・たこ焼き<br>
            ・ポップコーン<br>
            ・マシュマロ
        </p>
        <div class="flexbox">
                <div class="media"><img src="./img/7.jpg" alt=""></div>
                <div class="media"><img src="./img/8.jpg" alt=""></div>
        </div>
        <p>
            たこ焼きの焼き上がりをじっと待っております。
        </p>
        <div>
            <div class="media"><img src="./img/9.jpg" alt=""></div>
        </div>
        <p>
            たこ焼きは、食べやすいようにウィンナーを入れてアレンジしました。
        </p>
        <div>
            <div class="media"><img src="./img/10.jpg" alt=""></div>
        </div>
        <p>
            ポップコーンはフライパン＋ざるで作りました。
        </p>
        <p>
            マシュマロは、写真奥のキャンプ用バーナーを使ってスタッフが丁寧に焼き上げます。
        </p>
        <div>
            <div class="media"><img src="./img/11.jpg" alt=""></div>
        </div>
        <p>
            ポンポン♬とはじけるポップコーンを心配そうに見つめるふたり。
        </p>
        <div>
            <div class="media"><img src="./img/12.jpg" alt=""></div>
        </div>
        <p>
            そんな二人の心配をよそに、無事 もりもりのポップコーンができあがりました。 
        </p>       
        <div>
            <div class="media"><img src="./img/13.jpg" alt=""></div>
        </div>
        <p>
            アツアツのマシュマロは少し冷ましていただきます。
        </p>
        <p>
            Mさんの願いは…… 
        </p>
        <p>
            「今年こそマイケルに会いたい」 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/14.jpg" alt=""></div>
            <div class="media"><img src="./img/15.jpg" alt=""></div>
            <div class="media"><img src="./img/16.jpg" alt=""></div>
        </div>
        <p>
            アツアツのたこ焼きは『ふ～ふ～』しながらいただきます。
        </p>
        <p>
            食べ終わった後は、スタッフがつくった『寿』の前で記念撮影をしましょう！<br>
            全員のお写真を載せたいところですが、ピカピカの笑顔を抜粋して紹介します！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/17.jpg" alt=""></div>
            <div class="media"><img src="./img/18.jpg" alt=""></div>
            <div class="media"><img src="./img/19.jpg" alt=""></div>
            <div class="media"><img src="./img/20.jpg" alt=""></div>
            <div class="media"><img src="./img/21.jpg" alt=""></div>
            <div class="media"><img src="./img/22.jpg" alt=""></div>
            <div class="media"><img src="./img/23.jpg" alt=""></div>
            <div class="media"><img src="./img/24.jpg" alt=""></div>
            <div class="media"><img src="./img/25.jpg" alt=""></div>
        </div>
        <p>
            来年もみんなで「敬老の日」にお祝いできるといいですね～！
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