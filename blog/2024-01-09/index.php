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
            <h2>1月9日　「🎍初詣🎍」</h2>
            <div class="border"></div>
        </div>
        <p>
            午前は「生島足島神社」、午後は「善光寺」と初詣に行ってまいりました。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/1.jpg" alt="職員と利用者さんが生島足島神社入口に向かっています。"></div>
            <div class="media"><img src="./img/2.jpg" alt="男性の職員が利用者さんの車いすを押しながら本殿に向かっています。"></div>
            <div class="media"><img src="./img/3.jpg" alt="女性の職員も車いすを押して本殿に向かいます。"></div>
        </div>  
        <p>
            神様へ新年のご挨拶！<br>
            みなさんどのようなお願い事をしたのでしょうか？
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/4.jpg" alt="職員と利用者さんが手を合わせてお祈りをしています。"></div>
            <div class="media"><img src="./img/5.jpg" alt="3人の利用者さんがお祈りをしています。"></div>
            <div class="media"><img src="./img/6.jpg" alt="帽子を被った利用者さんが神妙な面持ちでお祈りをしています。"></div>
            <div class="media"><img src="./img/7.jpg" alt="2人の車いすに乗った利用者さんが手を合わせてお祈りしています。"></div>
            <div class="media"><img src="./img/8.jpg" alt="帽子を被った利用者さんが笑顔で手を振っています。"></div>
        </div>    
        <p>
           そして、普段は閉まって通れない「御神橋」を通ってきました。<br>
           御本社に諏訪神が鎮座しているときのみ開くそうです。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt="利用者さんと職員が一緒にシルバーカーを押しながら御神橋を歩いています。"></div>
        </div>  
        <p>
            よいしょ、よいしょ。<br>
            神様が通る橋を私たちも通らせていただきました。<br>
            御利益あるかな？
        </p>
        <p>
            境内を背景に写真撮影！<br>
            おめでたい！後光が差しています。
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/10.jpg" alt="御神橋を背景に利用者さん全員で写真撮影です。後光が差しています。"></div>
        </div>
        <p>
            神社にいらっしゃった警備員さん、皆さんとても優しく、椅子を準備していただいたり、車いすの移動を手伝ったりしていただきました。
        </p>
        <div>
            <div class="media"><img src="./img/11.jpg" alt="生島足島神社の警備員の方が利用者さんの車いすを押して、駐車場まで連れて行ってくれています。"></div>
            <div class="media"><img src="./img/12.jpg" alt="利用者さんと職員が一緒に生島足島神社の門から出てきました。"></div>
        </div>
        <p>
            「生島足島神社へ来るのは、何十年ぶり」という利用者さんや「初めて来た！」という方もいらっしゃいました。グループホームサンタクロースの利用者さんは坂城町に住んでいる方が多いので、利用者さんは「八幡神社」や「坂城神社」へお参りに行っていたようです。
        </p>
        <div>
            <div class="media"><img src="./img/13.jpg" alt="利用者さんが車いすに座ったまま合掌しています。"></div>
        </div>
        <p>
            寒い？それともまだお祈りしているのかな？
        </p>
        <p>
            生島足島神社での初詣のあとは、丸子別所線を通り、別所温泉の「北向観音」へ車の中からのお参り。<br>
            塩田、岩鼻を通ってグループホームサンタクロースへ帰ってきました。
        </p>
        <hr style="height: 0.5em; border: 0; background-color: #999490;">
        
        <p>
            午後は、少し足を延ばして善光寺まで行きました。
        </p>
        <div>
            <div class="media"><img src="./img/14.jpg" alt="善光寺の本堂の前、大香炉の前に着きました"></div>
        </div>
        <p>
            中までお参りに行くのが不安な方は大香炉前からお参り
        </p>
        <div>
            <div class="media"><img src="./img/15.jpg" alt="利用者さんと職員が一緒に本堂前でお祈りをしています。"></div>
        </div>
        <p>
            サンタクロースを代表して、4名の方が本堂へお参り。<br>
            実は善光寺は横からも本堂へ入ることができます。<br>
            スロープがあるので安全に入れます！
        </p>
        <div>
            <div class="media"><img src="./img/16.jpg" alt="職員にサポートしてもらいながら本堂脇のスロープを上りました。"></div>
            <div class="media"><img src="./img/17.jpg" alt="スロープを登り切り、本堂に到着しました。"></div>
            <div class="media"><img src="./img/18.jpg" alt="本堂の中は人がたくさん。利用者さん全員で、合掌をしました。"></div>
        </div>
        <p>
            「今年一年健康で過ごせますように……」<br>
            お参りの後は、職員が買ってきてくれた”そばまんじゅうとお茶”で一息。
        </p>
        <div>
            <div class="media"><img src="./img/19.jpg" alt="利用者さんがバスに戻ってから、ニコニコしながらそば饅頭を食べました。"></div>
            <div class="media"><img src="./img/20.jpg" alt="Hさんが紙コップを持ったまま何やら神妙な表情をしています。"></div>
        </div>
        <p>
            「撮ってますよ」と伝えたら「あらやだ」とHさん。いつもは笑ってくれますが今日は固まってしまいました。
        </p>
        <p>
            今年も一年健康で過ごせるよう、神様仏様に見守ってもらえるかな？
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