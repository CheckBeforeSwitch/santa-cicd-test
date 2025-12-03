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
            <h2>10月26日 「焼き芋＆食事会」</h2>
            <div class="border"></div>
        </div>
        <p>
            満点の青空！とてもいい天気です！
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="サンタクロースのベランダにて。"></div>
        </div>
        <p>
            麦わら帽子をかぶって、ベランダで日向ぼっこ中でしょうか…？
        </p>
        <div>
            <div class="media"><img src="./img/2.jpg" alt="4人の入居者の方がベランダで車いすに座っています。"></div>
        </div>
        <p>
        	何かを見つめている様子…
        </p>
        <div>
            <div class="media"><img src="./img/3.jpg" alt="介護士の方も出てきました。"></div>
        </div>
        <p>
            今日は「焼き芋＆食事会」だったようです！みなさん、焼き芋を見ていたんですね！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="焼き芋食事会と書かれた札。"></div>
            <div class="media"><img src="./img/5.jpg" alt="アルミホイルに包んだ焼き芋を屋外用のコンロで焼いています。"></div>
        </div>    
        <p>
            焼き芋の焼き上がりを待っている間、フランクフルトを頬張っています。「美味しかった！」と満面の笑みで伝えてくれました!
        </p>
        <div>
            <div class="media"><img src="./img/6.jpg" alt="ベランダで焼き芋を見ながらフランクフルトを頬張りました。"></div>
        </div>
        <p>
        	焼き芋が楽しみでニコニコされています♪
        </p>
        <div class="flexbox">
                <div class="media"><img src="./img/7.jpg" alt="室内で待っている方も楽しみにしています。"></div>
                <div class="media"><img src="./img/8.jpg" alt="外に出るために麦わら帽子を準備しています。"></div>
        </div>
        <p>
            焼き芋が焼きあがったようです。念のため、電子レンジでチンをしてから。
        </p>
        <div>
            <div class="media"><img src="./img/9.jpg" alt="ボウルの中に焼きあがった焼き芋を入れました。"></div>
        </div>
        <p>
        	焼き芋を食べやすいように、一口大にカット。
        </p>
        <div>
            <div class="media"><img src="./img/10.jpg" alt="皿の上で焼きあがった焼き芋を包丁で小さくカットしました。"></div>
        </div>
        <p>
            焼き芋は昼食と一緒にいただくようです。「秋を感じてください！」という言葉とともに「いただきます！」
        </p>
        <p>
           本日のメニューは下記になります！どれも美味しそう！
        </p>
        <p>
            ・豚汁<br>
            ・おにぎり<br>
            ・漬物<br>
            ・焼き芋
        <div class="flexbox">
            <div class="media"><img src="./img/11.jpg" alt="お盆の上に昼食と焼き芋を一人分ずつ乗せています。"></div>
            <div class="media"><img src="./img/17.jpg" alt="お皿の上に乗ったおにぎりをお箸で食べています。"></div>
        </div>
        <p>
            「残さずちゃんと食べるんだよ～！」という言葉に、「はい！」元気よく答えてくれました！
        </p>
        <div class = "flexbox">
            <div class="media"><img src="./img/12.jpg" alt=""></div>
            <div class="media"><img src="./img/13.jpg" alt="みんなで食卓を囲んで食べました。"></div>
            <div class="media"><img src="./img/14.jpg" alt="職員が食事のお手伝いをしました。"></div>
        </div>
        <p>
        	野菜たっぷり・具だくさんの豚汁をいただいています
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/15.jpg" alt="塗りのお椀に入れたトン汁をお箸で食べています。"></div>
            <div class="media"><img src="./img/16.jpg" alt="職員さんと一緒にいただきます。"></div>
        </div>
        <p>
            わかめが混ぜ込まれたおにぎり🍙
        </p>
        <div>
            <div class="media"><img src="./img/17.jpg" alt="お皿の上に乗ったわかめ入りのおにぎりをお箸で食べています。"></div>
        </div>
        <p>
            本日のメインディッシュである「焼き芋」をパクリ！みなさん、「美味しい！」と言って嬉しそうな表情です♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/18.jpg" alt="職員と一緒に焼き芋を食べています。"></div>
            <div class="media"><img src="./img/19.jpg" alt="口を大きく開けて焼き芋をお箸で頬張っています。"></div>
        </div>
        <p>
            一緒に食事をいただいていると、昔さつまいもを畑で作っていたことを教えてくれました！
        </p>
        <div>
            <div class="media"><img src="./img/20.jpg" alt="入居者の方がはなしてくれました。"></div>
        </div>
        <p>
        	真っ青な秋晴れの空のもとで焼かれた黄色く鮮やかなさつまいもをいただく、ホクホクの1日でした♪
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/21.jpg" alt="職員の方が入居者の方に食べ残さないように指摘していました。"></div>
            <div class="media"><img src="./img/22.jpg" alt="ボウルに入れた焼き芋。"></div>
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