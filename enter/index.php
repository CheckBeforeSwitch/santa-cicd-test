<?php 
$base = '../';

// ページタイトル
$title = 'ご入居について |グループホームサンタクロース';

// ページデスクリプション
$description = '長野県坂城町にあるグループホームサンタクロースへのご入居を考えている方や、グループホームサンタクロースとは何かを知りたい方はこちらのページをご覧ください。';



// 正規URL
$canonical = 'https://sakaki-santaclaus.jp/enter';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include_once($base . 'gtag.inc'); ?> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $base ?>hamburger.css">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="style-enter.css">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="<?= $canonical ?>">
<title><?= $title ?></title>

<meta name="description" content="<?= $description ?>">
<meta property="og:site_name" content="グループホーム　サンタクロース">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="https://sakaki-santaclaus.jp/ogp_image.jpg">
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<section id="fv">
	<div class="fv-area">
		<img src="picture_1.jpg " alt="">	
	</div>
	<h1 class="text_area">
		ご入居について
    </h1>
</section>
<nav class="link_botann">
    <a href="#grouphome">グループホーム<br>サンタクロースって？<img class="media" src="pass5.png" alt=""></a>
    <a href="#nyukyoyoken">入居要件<img class="media" src="pass5.png" alt=""></a>
    <a href="#gonyukyonagare">ご入居の流れ<img class="media" src="pass5.png" alt=""></a>
    <a href="#goriyoryokin">利用料金について<img class="media" src="pass5.png" alt=""></a>
    <a href="#tyuijiko">注意事項<img class="media" src="pass5.png" alt=""></a>
    <a href="#otoiawase">お問い合わせ<img class="media" src="pass5.png" alt=""></a>
</nav>
<section class="about basic_block" id="grouphome">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>グループホーム<br>サンタクロースについて</h2>
		<div class="border"></div>
	</div>
    <div class="media_wrapper">
        <img class="media" src="picture_2.jpg" alt="">
    </div>
    <div class="content">
        <p>
            　私たちは長野県坂城町にある要支援2以上かつ、認知症の方を受け入れているグループホームです。グループホームとは、少人数で自宅で暮らしている時と同じような雰囲気で共同生活を送り、自立を支援する施設です。
        </p>
        <p>
            　そんな私たちには、「入居者の方々や職員たちは『みんな家族』、グループホームを『大切な家』。そんな風に気兼ねなく呼べるようにしたい」という想いがあります。
        </p>
        <p>
            　正直、認知症は完治することができません。ですが、抑制することはできます。それは、環境の変化から来る混乱（嫌な刺激）を減らすことを心がけることに加えて、普段の生活の一部を入居者の方自身にしてもらうことで、認知症の進行を抑制するキッカケを作ることができます。
        </p>
        <p>
            　そのために、顔を覚えやすい少人数で共同生活を行い、職員も入居者一人一人に寄り添える環境になるように努めています。
        </p>
    </div>
</section>
<section class="basic_block" id="nyukyoyoken">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>入居要件</h2>
		<div class="border"></div>
	</div>
    <div>
        <p class="text_3">グループホームサンタクロースでは、以下の入居要件を設けています。</p>
    <ul class="list_1">
        <li>介護保険（要介護認定）において、<strong>「要支援2」以上の被認定者</strong>であり、かつ、<strong>認知症の状態（医師による診断が必要）</strong>にあること</li>
        <li><strong>少人数による共同生活を営むこと</strong>に支障がないこと</li>
        <li><strong>自傷他傷の恐れ</strong>がないこと</li>
        <li><strong>常時、医療機関において治療の必要がないこと</strong></li>
        <li><strong>当ホームの定める事項を承認し、重要事項説明書</strong>に記載する事業者の運営方針に賛同できること</li>
     </ul>
</section>
<section class="flow_1 basic_block" id="gonyukyonagare">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>ご入居の流れ</h2>
		<div class="border"></div>
	</div>
    <div class="flow_list">
        <div>
            <div class="index">1</div>
            <h3 class="title">
                <img class="picture" src="flow-icon_1.png" alt="">
                お電話・メールからの<br>お問い合わせ
            </h3>
            <div class="content">
                <p>当ホームでは、電話、メールアドレスからのお問い合わせを受け付けております。</p>
            </div>
        </div>
        <div>
            <div class="index">2</div>
            <h3 class="title">
                <img class="picture" src="flow-icon_2.png" alt="">
                施設内の見学
            </h3>
            <div class="content">
                <p>お問い合わせ受付後、当ホームの見学日を決めさせていただきます。</p>
                <p> ご見学の中で、入居を予定されている方が、どのような生活を送るのかイメージがしやすいよう、ホーム内の詳しいご説明（生活様式など）を担当職員からさせていただきます。</p>
            </div>
        </div>
        <div>
            <div class="index">3</div>
            <h3 class="title">
                <img class="picture" src="flow-icon_3.png" alt="">
                入居日の決定
            </h3>
            <div class="content">
                <p>見学後、当ホームに入居したいとお申込いただいた場合、入居日についてのご相談や手続きに必要なものをご説明させていただきます。</p>
            </div>
        </div>
        <div>
            <div class="index">4</div>
            <h3 class="title">
                <img class="picture" src="flow-icon_4.png" alt="">
                 ご契約・ご入居
            </h3> 
            <div class="content">
                <p>ご契約後、相談して決めさせていただいた入居日から、利用を開始させていただきます。</p>
            </div>
        </div>
    </div>
    <div style="text-align:center" class="required_items">
        <h3 class="heading_1">
            <span>ご入居の手続きに必要なもの</span>
        </h3>
        <div style="text-align: left;">
            <p>当ホームにご入居いただく際に、必要となるものは以下になります。</p>
        </div>
        <ul class="item_list">
            <li>介護保険</li><!--
            --><li>医療保険証</li><!--
            --><li>老人医療受給者証</li><!--
            --><li>印鑑</li><!--
            --><li>医療情報提供書（※)</li>
        </ul>
        <div class="notice_box" style="text-align: left;">
            <p>(※)認知症に対する診断書・感染症に対する検査結果</p>
            <p>その他必要なものに関しましては、ご契約前に担当職員からご連絡させて頂きます。</p>
        </div>
    </div>
</section>
<section class="basic_block" id="goriyoryokin">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>利用料について</h2>
		<div class="border"></div>
	</div>
    <div style="text-align:center">
        <h3 class="heading_1">
            <span>利用者負担額</span>
        </h3>
        <p><strong>月額150,000円程度<br>(敷金として200,000円)</strong></p>
        <h3 class="heading_1">
            <span>上記の内訳</span>
        </h3>
    </div>
    <div class="flex_wrapper">
        <div>
            <h4 class="heading_blue_ball">利用料</h4>
            <table class="table_1">
                <tr>
                    <th>要支援２</th><td>745円/日</td>
                </tr>
                <tr>
                    <th>要介護1</th><td>749円/日</td>
                </tr>
                <tr> 
                    <th>要介護2</th><td>749円/日</td>
                </tr>
                </div>
                <div class="table_a">
                <tr>
                    <th>要介護3</th><td>784円/日</td>
                </tr>
                <tr>
                    <th>要介護4</th><td>824円/日</td>
                </tr>
                <tr>
                    <th>要介護5</th><td>840円/日</td>
                </tr>
            </table>
        </div>
        <div>
            <h4 class="heading_blue_ball">実費分</h4>
            <table class="table_1">
                <tr>
                    <th>家賃</th><td>76,000円</td>
                </tr>
                <tr>
                    <th>食費</th><td>30,500円</td>
                </tr>
                <tr> 
                    <th>管理費</th><td>15,000円</td>
                </tr>
                <tr>
                    <th>水道光熱費</th>
                    <td>13,500円</td>
                </tr>
            </table>
            <div class="left">
                <small>※冬季は暖房費として別途5,000円加算</small>
            </div>
        </div>
    </div>
</div>
    <p>別途、その他(日常生活において通常必要となる費用で、入居者が負担する事が適当と認められる)費用が掛かります</p>
    <h3 class="heading_1">
            <span>利用料および、実費分について</span>
    </h3>
    <div style="text-align:center">
    <p class="text">月の途中で入退去の場合は、利用日数により、<strong>「日割り負担」</strong>になります。</p>
</section>
<section class="basic_block" id="tyuijiko">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>注意事項</h2>
		<div class="border"></div>
	</div>
        <p>グループホームサンタクロースは病院や施設ではありません。ですが、緊急時に担当する協力医療機関がありますので、安心してご利用いただけます。</p>
        <p>また、主治医がいる入居者の方は、継続して、受診して頂くことも可能です。詳しくは担当職員までご相談ください。</p>
    <div class="box">
        <div class="case">
            <p class="red">協力医療機関</p>
            <p >リサーチパーク クリニック</p>
        </div>
        <div class="border"></div>
        <div class="case">
            <p class="red">協力歯科医療機関</p>
            <p>宮原歯科医院</p>
        </div>
    </div>
</section>
<section class="basic_block" id="otoiawase">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>お問い合わせ</h2>
		<div class="border"></div>
	</div>
    <div style="text-align:center">
    <p class="text">グループホームサンタクロースでは、お電話、メールでのお問い合わせを受け付けております。</p>
    <div class="box">
        <div class="case">
          <p class="red">電話番号</p>
          <a href="tel" class="link_o">0268-81-3611</a>
        </div>
        <div class="border"></div>
        <div class="case">
          <p class="red">メールアドレス</p>
          <a href="email" class="link_o">sidecar@snow.ocn.ne.jp</a>
        </div>
        <div class="border border_2"></div>
        <div class="case">
          <p class="red">FAX</p>
          <a href="tel" class="link_o">0268-81-3511</a>
        </div>
    </div>
</section>
</main>
<?php include $base . 'footer.php'; ?>
<script src="hamburger.js"></script>
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>
