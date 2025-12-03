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
            <h2>12月25日　「クリスマス会」</h2>
            <div class="border"></div>
        </div>
        <p>
            12月25日、メリークリスマス！
        </p>
        <p>
            グループホームサンタクロースのクリスマス会です♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="いよいよ12月25日当日です。Merry Christmasの文字の飾りつけをしました。"></div>
            <div class="media"><img src="./img/2.jpg" alt="クリスマスツリーも飾りました。"></div>
        </div>  
        <p>
            今日のおやつのクリスマスケーキは、利用者さんのTさんのご家族から差し入れていただきました。
        </p>
        <p>
            ありがとうございます。
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt="利用者さんのご家族からケーキの差し入れをいただきました。"></div>
        </div>
        <p>
            皆さん甘いもの大好き♡いつもより食が進んでおります。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="利用者さんがおいしそうにケーキをスプーンでほおばっています。"></div>
            <div class="media"><img src="./img/5.jpg" alt="職員に介助されてケーキを食べています。"></div>
        </div>    
        <p>
            おいしいケーキに思わず笑顔がこぼれます。
        </p>
        <div>
            <div class="media"><img src="./img/6.jpg" alt="ケーキを食べて満足そうです。"></div>
        </div>
        <p>
            あ！サンタクロースが食べられている！！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt="お菓子のサンタクロースを食べちゃいます。"></div>
            <div class="media"><img src="./img/8.jpg" alt="ばれちゃいました。"></div>
        </div>  
        <p>
            ん？なにやら赤い服に着替えている方たちが……
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt="サンタクロースがプレゼントを渡す準備中です。"></div>
            <div class="media"><img src="./img/10.jpg" alt="サンタなのにトナカイの被り物？"></div>
        </div>  
        <p>            
            グループホームサンタクロースに二人のサンタクロースが現れました！！
        </p>
        <div>
            <div class="media"><img src="./img/11.jpg" alt="サンタクロースがプレゼントを持ってやってきました。"></div>
        </div>
        <p>
            実は二人は同じ名前
        </p>
        <p>
            ダブルHサンタクロース★
        </p>
        <div>
            <div class="media"><img src="./img/12.jpg" alt="同じ名前の２人のサンタクロースです。"></div>
        </div>
        <div>
            <div class="media"><img src="./img/13.jpg" alt="車いすに乗ってもう一人のサンタの登場！"></div>
        </div>
        <p>
            もう一人いる……？！
        </p>
        <p>
            ダブルHサンタクロースから、一人ひとり手渡しでプレゼントをお渡しします。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/14.jpg" alt="一人一人にプレゼントを手渡しています。"></div>
            <div class="media"><img src="./img/15.jpg" alt="ニコニコしながらプレゼントを手渡しています。"></div>
        </div>
        <p>
            中にはうれしくて涙を流す人も……
        </p>
        <div>
            <div class="media"><img src="./img/16.jpg" alt="プレゼントに思わず泣いちゃいました。"></div>
        </div>
        <div class="flexbox">
            <div class="media"><img src="./img/17.jpg" alt="手を引かれてサンタクロースのもとへ。"></div>
            <div class="media"><img src="./img/18.jpg" alt="プレゼントをもらうことができました。"></div>
        </div>
        <p>
            さあ、手を引いてサンタクロースへ会いに行きましょう！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/19.jpg" alt="手を引かれてサンタクロースのもとへ"></div>
            <div class="media"><img src="./img/20.jpg" alt="プレゼントをもらったら顔を付けてしまいました。"></div>
        </div>
        <p>
            嬉しさのあまり、プレゼントに顔をうずめてしまったようです
        </p>
        <p>
            最後はダブルHサンタクロース同士でプレゼント交換
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/21.jpg" alt="お互いにプレゼントを交換し合っています。"></div>
            <div class="media"><img src="./img/22.jpg" alt="ダブルHサンタクロースでプレゼントを持って記念撮影。"></div>
        </div>
        <p>
            サンタさんと記念撮影です
        </p>
        <div>
            <div class="media"><img src="./img/23.jpg" alt="サンタさん2人と利用者さん3人で記念撮影。"></div>
        </div>
        <p>
            プレゼントの中身は、“マフラーとあったか靴下”
        </p>
        <p>
            さっそく巻いてみました
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/24.jpg" alt="花柄のマフラーをもらいました。"></div>
            <div class="media"><img src="./img/25.jpg" alt="男性の利用者さんはシックなこげ茶色のマフラー。"></div>
        </div>
        <div class="flexbox">
            <div class="media"><img src="./img/26.jpg" alt="こちらも花柄のマフラー。満足そうにピースしています。"></div>
            <div class="media"><img src="./img/27.jpg" alt="この方は青地の花柄のマフラー。"></div>
        </div>
        <div>
            <div class="media"><img src="./img/28.jpg" alt="真っ白のマフラーをもらった人もいました。"></div>
        </div>
        <p>
            ん？靴下を手にはめている人が……
        </p>
        <p>
            あたたかいから、まぁいいか！            
        </p>
        <div>
            <div class="media"><img src="./img/29.jpg" alt="靴下を手にはめちゃっています。"></div>
        </div>
        <p>
            サンタクロースさんもお仕事終わりましたので、せっせと畳んでいます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/31.jpg" alt="慣れた手つきでひょいと衣装をたたみます。"></div>
            <div class="media"><img src="./img/30.jpg" alt="最後はきれいに椅子の上でたたみます。"></div>
        </div>
        <p>
            来年はどんなサンタさんがくるのでしょう？
        </p>
        <p>
            楽しみですね！
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