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
            <h2>2月12日 御利用料金改定のおしらせ </h2>
            <div class="border"></div>
        </div>
        <p>
            いつもグループホーム サンタクロースを利用頂き、誠に有難う御座います。<br>
            当ホームは、平成18年に開設し、平成22年の冬に現在の場所へ移転。今春で19年目を迎えようとしております。この間に5%から8%、更に10%へと2回の消費税の改定をはじめ、近年では「新型コロナウィルス」の流行。2022年に始まったロシア情勢の悪化から、燃料費の更なる高騰。また、そのあおりを受けて食品をはじめ諸々の物価高騰となった現在、企業努力だけでは如何ともし難い程の状況となっております。<br>
            つきましては、この変化を社会情勢に照らし合わせ、この度、令和7年4月1日の御利用料金より、一部料金の見直しを行うこととなりましたのでお知らせさせて頂きます。
        </p>
        <p>
            具体的な料金の変更内容は以下の通りです。
        </p>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>現料金</th>
                    <th></th>
                    <th>新料金</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>食費</th>
                    <td>25,500円</td>
                    <td>→</td>
                    <td>30,500円</td>
                    <td>(+5000円)</td>
                </tr>
                <tr>
                    <th>光熱水費</th>
                    <td>8,500円</td>
                    <td>→</td>
                    <td>13,500円</td>
                    <td>(+5000円)</td>
                </tr>
                <tr>
                    <th>暖房費</th>
                    <td>3,000円</td>
                    <td>→</td>
                    <td>5,000円</td>
                    <td>(+2000円)</td>
                </tr>
            </tbody>
        </table>
        <p>
            ※この新料金は令和7年4月1日から適用となります。御請求は5月上旬に郵送される「（4月御利用分）請求書」からとなりますので、ご了承ください。<br>
            ※暖房費は、暖房を使用する期間(概ね11月～5月)の御請求となります。<br>
            料金変更につきましてご不明な点やご質問が御座いましたら、お気軽に代表取締役　髙山までお問合せください。<br>
            厳しい社会情勢ではありますが、より高いサービスを提供出来るよう、スタッフ一同、日々の業務に務めてまいります。引き続き、グループホーム　サンタクロースを宜しくお願い致します。
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