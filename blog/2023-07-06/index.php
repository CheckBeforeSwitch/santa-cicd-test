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
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<section class="basic_block">
    <article id="blog_art">
        <div class="h2_wrapper">
            <div class="ball"></div>
            <h2>7月6日 七夕</h2>
            <div class="border"></div>
        </div>
        <p>
            7月6日のイベントは「七夕」です。
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt=""></div>
        </div>
        <p>
            みなさん、それぞれの願い事を短冊に書いて用意してくれました。
        </p>
        <p>
           どんな願い事を書いたのでしょうか？ <br>
           今日ものぞいてみましょう～！
        </p>
        <p>
            今日のおやつは、"七夕ゼリー"<br>
            利用者さんにも調理を手伝っていただきます。
        </p>
        <p>
            クリームを絞って・・・
        </p>
        <div>
            <div class="media"><img src="./img/2.jpg" alt=""></div>
        </div>
        <p>
            色とりどりのチョコレートをのせます。
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt=""></div>
        </div>
        <p>
            アクシデント発生！！ <br>
            チョコレートをのせたときに指についたクリームをペロリしちゃった <br>
            （手を洗ってもらいました）
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt=""></div>
        </div>
        <p>
            完成で～す(⌒∇⌒) 
        </p>
        <div>
            <div class="media"><img src="./img/5.jpg" alt=""></div>
        </div>    
        <p>
            反対側のユニットでも、Yさんがつくってくれています！
        </p>
        <div>
            <div class="media"><img src="./img/6.jpg" alt=""></div>
        </div>
        <p>
            チョコレートは残さず全部のせる算段のようです。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt=""></div>
            <div class="media"><img src="./img/8.jpg" alt=""></div>
        </div>
        <p>
            配ぜん中にUさんから「会費は？」との声 <br>
            それにはみなさん、大笑いです。 
        </p>
        <p>
            それでは手を合わせていただきます。 
        </p>
        <div>
            <div class="media"><img src="./img/9.jpg" alt=""></div>
        </div>
        <p>
            お食事中ですが、失礼しまーす
        </p>
        <div>
            <div class="media"><img src="./img/10.jpg" alt=""></div>
        </div>
        <p>
            クリームが口についてますよ～
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/11.jpg" alt=""></div>
            <div class="media"><img src="./img/12.jpg" alt=""></div>
        </div>
        <p>
            おいしい顔をして！といったらしてくれるサービス精神多めなHさん 
        </p>
        <p>
            食べ終わった人から、短冊を飾ります <br>
            まずは自分で書いた願い事を読み上げてもらいしょう！ 
        </p>
        <p>
            Mさんの願いは…… 
        </p>
        <div>
            <div class="media"><img src="./img/13.jpg" alt=""></div>
        </div>
        <p>
            「今年こそマイケルに会いたい」 
        </p>
        <div>
            <div class="media"><img src="./img/14.jpg" alt=""></div>
        </div>
        <p>
            マイケルってどのマイケルなんだろう？ <br>
            ジャクソン？ 
        </p>
        <p>
            Hさんの願いは？<br> 
            こんな苦虫を嚙み潰したような顔していますが 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/15.jpg" alt=""></div>
            <div class="media"><img src="./img/16.jpg" alt=""></div>
        </div>
        <p>
            「元気で過ごせますように」 <br>
            ずっとこんな元気な笑顔を見せてね！ 
        </p>
        <div>
            <div class="media"><img src="./img/17.jpg" alt=""></div>
        </div>
        <p>
            かわいい願いをしたYさん 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/18.jpg" alt=""></div>
            <div class="media"><img src="./img/19.jpg" alt=""></div>
        </div>
        <p>
            「おいしいりんご食べたい」 <br>
            今年もたくさんリンゴが食べられるといいですね♪ 
        </p>
        <p>
            サンタの最高年齢目指せ102歳！ 
        </p>
        <div>
            <div class="media"><img src="./img/20.jpg" alt=""></div>
        </div>
        <p>
            Kさんの願い 
        </p>
        <div>
            <div class="media"><img src="./img/21.jpg" alt=""></div>
        </div>
        <p>
            「地球平和　戦争がなくなりますように」 <br>
            地球の平和というのがいいですね。 
        </p>
        <p>
            Oさんの願いは 
        </p>
        <div>
            <div class="media"><img src="./img/22.jpg" alt=""></div>
        </div>
        <p>
            「目と耳が良くなりますように」 <br>
            私も同じ願いです……。 
        </p>
        <div>
            <div class="media"><img src="./img/23.jpg" alt=""></div>
        </div>
        <p>
            今日、病院へ行っていた方の短冊は介護職員が飾ります。 <br>
            「心に太陽を　くちびるに歌を」 <br>
            ドイツの詩人の言葉だったり、藤原正彦さんの本のタイトルになったりと有名な一節ですが、<br>
            なんだか活力をもらえる言葉です。 
        </p>
        <div>
            <div class="media"><img src="./img/24.jpg" alt=""></div>
        </div>
        <p>
            皆さんの願いが笹の葉に集合しました。<br>
            色とりどりの短冊がきれいですね 
        </p>
        <p>
            サンタクロースの介護職員が <br>
            「ほかにもこんな願いを叶えたい人はいますか～」と聞くと 
        </p>
        <p>
            「やまほどある！！！！」 <br>
            との声が。 <br>
            いくつになっても叶えたい願い事は、尽きませんね！ 
        </p>
        <p>
            最後は皆さんで夏らしい曲をうたいましょう！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/25.jpg" alt=""></div>
            <div class="media"><img src="./img/26.jpg" alt=""></div>
            <div class="media"><img src="./img/27.jpg" alt=""></div>
        </div>
        <p>
            「みかんの花咲く丘」「茶摘み」「信濃の国」と歌い、 
        </p>
        <p>
            そして最後は「たなばたさま」。 <br>
            歌詞本にないので、思い出して歌います。 <br>
            歌い始めると、自然と口から出てくるのが不思議ですね。 
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/28.jpg" alt=""></div>
            <div class="media"><img src="./img/29.jpg" alt=""></div>
            <div class="media"><img src="./img/30.jpg" alt=""></div>
        </div>
        <p>
            笑顔がいっぱいの七夕でした～。 
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