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
            <h2>🌟7月7日『七夕まつり』🌟</h2>
            <div class="border"></div>
        </div>
        <p>
           今日は、令和７年７月７日。1年に1度の七夕まつりを開催しました✨
        </p>
        <div>
            <div class="media"><img src="./img/23.jpg" alt="七夕飾りで彩られた笹の様子。"></div>
        </div>
        <p>
           今年はなんと、オカリナ演奏グループ『poco a poco』によるコンサートつき！<br>
           “ほたるこい”や“たなばたさま”など、季節にぴったりの曲が披露されました。
        </p>
        <div>
            <div class="media"><img src="./img/1.jpg" alt="poco a pocoのみなさんが、並んでオカリナを演奏します。"></div>
        </div>
        <p>
            はじめのうちは、演奏を見守ったり、歌詞を見て小さく口ずさんだり。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/2.jpg" alt="身を乗り出して演奏に聞き入る入居者さん。"></div>
            <div class="media"><img src="./img/3.jpg" alt="歌詞カードに目を通す入居者さん。"></div>
        </div>  
        <p>
            だんだんと、みんな自然に歌いだします。前奏で歌いだしちゃう人も登場😆
        </p>
        <div>
            <div class="media"><img src="./img/4.jpg" alt="歌詞カードを見ながら歌う入居者さんたち。"></div>
        </div>    
        <p>
            ７曲目あたりから、歌詞カードが無くてもみなさん歌えるようになってきました。<br>
            手拍子や、うなずきリズムが会場を包みます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/5.jpg" alt="会場にやさしい手拍子が響きます。"></div>
            <div class="media"><img src="./img/6.jpg" alt="はじめは様子見していたけど、楽しそうに歌っています。"></div>
        </div>  
        <p>
            そしてラストは“ふるさと”。出だしからみんな大合唱🎵 
        </p>
         <div class="flexbox">
            <div class="media"><img src="./img/7.jpg" alt="座ったままスタッフに支えられて歌う入居者さん。"></div>
            <div class="media"><img src="./img/8.jpg" alt="口を大きく開けて歌う入居者さん。"></div>
        </div>
        <p>
            演奏のあとは、冷たい“七夕ゼリー”でおやつタイム！
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/9.jpg" alt="みかんや寒天の載った“七夕ゼリー”"></div>
            <div class="media"><img src="./img/10.jpg" alt="冷たいゼリーのおいしさをかみしめます。"></div>
            <div class="media"><img src="./img/11.jpg" alt="スタッフが、ゼリーを入居者さんの口に運んでいます。"></div>
            <div class="media"><img src="./img/12.jpg" alt="ゼリーをおいしそうに頬張ります。"></div>
        </div> 
        <p>
            「知ってる曲あった？」「信濃の国も歌いたいよね」など、おしゃべりもはずみます。
        </p>
        <div class="flexbox">
            <div class="media"><img src="./img/13.jpg" alt="演奏はどうでした？と聞くオカリナメンバー。"></div>
            <div class="media"><img src="./img/14.jpg" alt="オカリナメンバーも一緒にゼリーを楽しみます。"></div>
            <div class="media"><img src="./img/15.jpg" alt="にぎやかに話が弾む入居者さんとオカリナメンバー。"></div>
            <div class="media"><img src="./img/16.jpg" alt="おしゃべりを楽しみながら、みんなくつろいだ時間を過ごしています。"></div>
        </div>
        <p>
            暑いから、冷たいゼリーは“つるん♪”といけちゃいますね😊
        </p> 
        <div class="flexbox">
            <div class="media"><img src="./img/17.jpg" alt="カメラ目線でみかんを頬張ってます。"></div>
            <div class="media"><img src="./img/18.jpg" alt="カメラに向かってポーズしてくれました。"></div>
        </div>
        <p>
            ゼリーを食べ終わっても、名残惜しそうに歌詞カードを見つめる方も。<br>
            「もっと歌いたかったなぁ」との声に、「またゆっくり歌おうね☺️」とスタッフ。
        </p>
        <div>
            <div class="media"><img src="./img/19.jpg" alt="歌詞カードをじっと見つめています。"></div>
        </div>
        <p>
            笹にはたくさんの願いごと🎋今年も「マイケルに会いたい」の願いごとを発見👀
        </p>
        <div>
            <div class="media"><img src="./img/20.jpg" alt="マイケルに会いたい気持ちのこもった短冊。"></div>
        </div>
        <p>
            そしてもう一枚は、「長いきしたい」。<br>
            これはきっと、スタッフみんなの願いでもあります。
        </p>
        <div>
            <div class="media"><img src="./img/21.jpg" alt="「長いきしたい」の願いが書かれた短冊。"></div>
        </div>
        <p>
           また来年も、みんなで歌って笑って、笑顔で七夕を迎えられますように！✨✨
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