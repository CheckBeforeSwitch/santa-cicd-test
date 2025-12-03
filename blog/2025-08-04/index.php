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
            <h2>🎆8月4日『夏の花火会』🎆 </h2>
            <div class="border"></div>
        </div>
        <p>
            今年も、花火の季節がやってきましたね！<br>
            8月4日、ホーム前の駐車場で『花火会』を開催しました🎇
        </p>
        <p>
            まずは、スタッフから開会のあいさつです。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="空が少し暗くなり始めたころ、入居者さんたちが集まりました。"></div>
            <div class="media"><img src="./img/2.jpg" alt="何が始まるのか、少しそわそわしています。"></div>
        </div>
        <p>
           「大きい音の花火もあるから、びっくりして心臓止まらないようにね！」なんて冗談に、「は～い！😊」と笑いがおきていました（笑） 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/3.jpg" alt="スタッフのカメラに向かって、ポーズを決める入居者さん。"></div>
        </div>  
        <p>
            点火された手持ち花火を、スタッフからおそるおそる受け取ります。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="手持ち花火の端ぎりぎりを、慎重につかみます。"></div>
            <div class="media"><img src="./img/5.jpg" alt="火花をじっと見つめる入居者さん。"></div>
        </div>  
        <p>
            嬉しそうに花火を見せてくれる入居者さんもいました😊
        </p>
         <div class="flexbox">
            <div class="media"><img src="./img/6.jpg" alt="オレンジや緑など、色とりどりの花火を楽しみます。"></div>
            <div class="media"><img src="./img/7.jpg" alt="カメラに花火を見せてくれました。"></div>
            <div class="media"><img src="./img/8.jpg" alt="スタッフに腕を支えられながら、花火を楽しむ入居者さんもいました。"></div>
            <div class="media"><img src="./img/9.jpg" alt="こちらでは、入居者さんとスタッフが一緒に花火を見つめています。"></div>
        </div>
        <p>
            今年も近所の子どもたちが参加してくれて、にぎやかであたたかい時間を過ごしました。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/10.jpg" alt="ピンク色の手持ち花火を持って、歩き回る子どもたち。"></div>
            <div class="media"><img src="./img/11.jpg" alt="次は黄色の花火です。"></div>
            <div class="media"><img src="./img/12.jpg" alt="手で持てない入居者さんには、スタッフが少し離れたところから花火を見せます。"></div>
        </div> 
        <p>
            噴き出し花火は、静かに光るものから、びっくりするほど勢いのあるものまで！ <br>
            みなさんの「わあっ！」という声や驚いた表情に、スタッフもつい笑顔に。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/13.jpg" alt="シューという音と共に、まぶしい火花が上がりました。"></div>
            <div class="media"><img src="./img/14.jpg" alt="バチバチと音を立てて、黄色い火花が飛び散ります。"></div>
        </div>
        <p>
            そして最後は、迫力ある打ち上げ花火！ <br>
            夜空に大きく広がる花火に、「おーっ！」という歓声が上がり、みんなの拍手が響きました👏 
        </p> 
        <div>
            <div class="media"><img src="./img/15.jpg" alt="入居者さんとスタッフの顔が、花火に照らされています。"></div>
        </div>
        <p>
            今年の夏も、素敵な思い出が増えました✨ 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/16.jpg" alt="入居者さんとスタッフが、肩を寄せ合って花火の感想を伝え合います。"></div>
            <div class="media"><img src="./img/17.jpg" alt="最後は、やっぱり線香花火ですね。"></div>
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