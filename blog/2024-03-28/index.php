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
            <h2>3月28日　🚙「春のドライブ会/長野県立歴史館」🦴</h2>
            <div class="border"></div>
        </div>
        <p>
            3月は午前中はドライブ会、午後は千曲市にある「長野県立歴史館」に行ってきました！
        </p>
        <h3 class="heading">
            午前の部
        </h3>
        <p>
            サンタクロースでレンタカーを借りきたので、みんなで乗車します。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="一人ずつ車いすを車に寄せつつ乗車します。"></div>
            <div class="media"><img src="./img/2.jpg" alt="車いすから座席まではスタッフが二人掛かりで乗ります。"></div>
        </div>  
        <p>
            朝9時過ぎだったため、眠そうな顔をした利用者さんもいました笑
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt="玄関前で車いすに乗りながら眠そうにしています。"></div>
        </div>    
        <p>
           レンタカー1台では乗り切らないため、軽自動車（サンタクロース号）も使います。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="軽自動車の後部座席に利用者さんを乗せています"></div>
            <div class="media"><img src="./img/6.jpg" alt="一人ずつ乗せていきます。"></div>
        </div>  
        <p>
           全員乗車したので出発！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt="利用者の皆さん、どこにドライブに行くのか不思議そうな顔をしています。"></div>
            <div class="media"><img src="./img/8.jpg" alt="軽自動車に乗っている利用者さんも不思議そうです。"></div>
        </div> 
        <p>
            ”上山田温泉”や”上田市周辺”をドライブしてきました。
        </p>
        <p>
            途中きれいな梅の花があったのでついパシャリ
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt="上田城駐車場にきれいな梅の花が咲いていました。"></div>
            <div class="media"><img src="./img/10.jpg" alt="幹が太く大きな梅の木です。"></div>
        </div>
        <p>
           入居者さんも「きれいだね～」と春の訪れを感じていました。
        </p> 
        <p>
           ホームに戻るまでがドライブです！
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/11.jpg" alt="降りるときもスタッフ2人が利用者さんをサポートします。"></div>
            <div class="media"><img src="./img/12.jpg" alt="ロビーに手をつなぎながら戻ります。"></div>
        </div>
        <p>
           いつもの机でリラックス～
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/13.jpg" alt="利用者さん3人が椅子に座りながら一息ついています。"></div>
        </div>
        <p>
            最後はカメラにピース！✌
        </p>
        <div>
            <div class="media"><img src="./img/14.jpg" alt="利用者さんがカメラに向かってピースをしてくれました。"></div>
        </div>
        <h3 class="heading">
            午後の部
        </h3>
        <p>
            午後は千曲市の「長野県立歴史館」に行ってきました。
        </p>
        <p>
            館内を歩くため靴下をしっかり履きます。
        </p>
        <div>
            <div class="media"><img src="./img/15.jpg" alt="スタッフが靴下を利用者さんにはかせています。"></div>
        </div>
        <p>
            午後もレンタカーと軽自動車（サンタクロース号）を利用して「長野県立歴史館」に向かいます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/16.jpg" alt="スタッフ2人がかりで利用者さんをレンタカーに乗せています。"></div>
            <div class="media"><img src="./img/17.jpg" alt="軽自動車にも丁寧に乗せていきます。"></div>
        </div>
        <p>
            「いざ、出発！」 
        </p>
        <div>
            <div class="media"><img src="./img/18.jpg" alt="午後は新入りスタッフも一緒にレンタカーに乗って向かいます。"></div>
        </div>
        <p>
            到着しました！　正面玄関から入ります。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/19.jpg" alt="長野県立歴史館の正面玄関付近のスロープを利用しています。"></div>
            <div class="media"><img src="./img/20.jpg" alt="自分で歩ける人は自分の足で、歩けない人は車いすでスタッフに押されながら館内に入ります。"></div>
        </div>
        <p>
            職員が入場チケットを購入している間いったん休憩。ワクワクしています。
        </p>
        <div>
            <div class="media"><img src="./img/21.jpg" alt="早く展示室内に入れないかとうずうずしている様子です。"></div>    
        </div>
        <p>
            展示室は2階のためエレベーターを使って向かいます。
        </p>

        <div class="flexbox">
            <div class="media"><img src="./img/22.jpg" alt="一人ずつエレベーターを利用しています。"></div>
            <div class="media"><img src="./img/23.jpg" alt="1回では乗り切らなかったため3回ほどに分けて二階に向かいました。"></div>
        </div>
        <p>
            途中、連絡通路で写真をパシャリ、皆さん背中がとてもたくましかったです。
        </p>
        <div>
            <div class="media"><img src="./img/24.jpg" alt="みんなで明るい連絡通路を展示室に向かいます。"></div>
        </div>
        <p>
            展示室に入ると、まずはナウマン像がおでむかえしてくれたため、記念にパシャリ
        </p>
        <div>
            <div class="media"><img src="./img/25.jpg" alt="ナウマン像の展示物を背景に利用者全員で写真撮影を行いました。"></div>
        </div>
        <p>
            皆さん興味津々で、縄文時代～近代の歴史を見ていました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/26.jpg" alt="縄文時代の歴史を興味津々で見ています"></div>
            <div class="media"><img src="./img/27.jpg" alt="竪穴式住居があったため利用者さんが入ろうと試みています。"></div>
            <div class="media"><img src="./img/29.jpg" alt="続いては弥生時代です。"></div>
            <div class="media"><img src="./img/30.jpg" alt="昔の門前町のジオラマの中を歩きました。"></div>
        </div>
        <p>
            皆さん、歴史についてお勉強できたかな？
        </p>
        <p>
            無事ドライブを終え、ホームに帰ることができました！
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