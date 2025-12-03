<?php 
$base = '../';


// ページタイトル
$title = '施設概要｜グループホームサンタクロース';

// ページデスクリプション
$description = '長野県坂城町に密着した要支援2以上、認知症高齢者の方がご利用できるグループホームです。まるで自宅のような空間で、月一行事を開催。家族との交流もあります。';

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';
// 
// 正規URL
$canonical = 'https://sakaki-santaclaus.jp/outline/';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include $base . 'gtag.inc'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $base ?>hamburger.css">
<link rel="stylesheet" href="<?= $base ?>style.css">
<link rel="stylesheet" href="<?= $base ?>style-top.css?v=1">
<link rel="stylesheet" href="outline.css?v=2">
<link rel="icon" href="<?= $base ?>favicon.ico">
<link rel="canonical" href="<?= $canonical ?>">
<title><?= $title ?></title>
<meta name="keywords" content="<?= $keywords ?>">
<meta name="description" content="<?= $description ?>">
<meta property="og:site_name" content="グループホーム　サンタクロース">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="https://sakaki-santaclaus.jp/ogp_image.jpg">
</head>
<body id="top">
<?php include $base . 'header.php'; ?>	
<main>
<section id="fv">
	<div class="fv-area">
		<img src="top_1.jpg" alt="">	
	</div>
	<div class="text_area">
		施設概要
	</div>
</section>
<section id="madori">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>施設間取り</h2>
		<div class="border"></div>
	</div>
	<div class="madori-div">
		<img src="santa-madori-11.jpg" alt="居屋18室、トイレ4個、リビング、ウッドデッキ、洗面所お風呂が二つ、キッチン二個のグループホームサンタクロースの間取り" class="madori-photo">
		<div class="madori-desc">
			<div class="box-1"></div>
			<ul class="madori-list">
				<li>
					<span class="list-ban">1</span>
					<a href="#entrance">玄関</a>
				</li>
				<li>
					<span class="list-ban">2</span>
					<a href="#room">居屋</a>
				</li>
				<li>
					<span class="list-ban">3</span>
					<a href="#toilet-1">トイレ</a>
				</li>
				<li>
					<span class="list-ban">4</span>
					<a href="#toilet-2">スロップシンク付きトイレ</a>
				</li>
				<li>
					<span class="list-ban">5</span>
					<a href="#washroom">洗面所</a>
				</li>
				<li>
					<span class="list-ban">6</span>
					<a href="#kitchin">キッチン</a>
				</li>
				<li>
					<span class="list-ban">7</span>
					<a href="#bath">お風呂</a>
				</li>
				<li>
					<span class="list-ban">8</span>
					<a href="#living">リビング</a>
				</li>
				<li>
					<span class="list-ban">9</span>
					<a href="#wooddeck">ウッドデッキ</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<section id="setsubi">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>お部屋・設備紹介</h2>
		<div class="border"></div>
	</div>
	<div class="oheya-area">
		<div class="oheya-box">
			<img src="genkan.jpg" alt="" id="entrance">
			<div class="title-area">
				①玄関
			</div>
			<div class="text-area">
				防犯対策として、カードキーを使用して扉の解錠・施錠をしています。
			</div>
		</div>
		<div class="oheya-box">
			<img src="heya.jpg" alt="" id="room">
			<div class="title-area">
				②居室
			</div>
			<div class="text-area">
				個人の部屋として、皆さん思い思いの部屋作りを行っています。
			</div>
		</div>
		<div class="oheya-box">
			<img src="toilet2.jpg" alt="" id="toilet-1">
			<div class="title-area">
				③トイレ
			</div>
			<div class="text-area">
				立ち上がりやすいL字型の手すりと跳ね上げ式手すりを設置しています。
			</div>
		</div>
		<div class="oheya-box">
			<img src="toilet.jpg" alt="" id="toilet-2">
			<div class="title-area">
				④スロップシンク付きトイレ
			</div>
			<div class="text-area">
				スロップシンク付きトイレがあるため、入居者の方がお部屋でポータブルトイレを使うことができます。
			</div>
		</div>
		<div class="oheya-box">
			<img src="senmenjo.jpg" alt="" id="washroom">
			<div class="title-area">
				⑤洗面所
			</div>
			<div class="text-area">
				個人の洗顔・入浴道具はまとめて置いてあります。トラブル・事故防止のため使用する際には職員が必ず付き添います。
			</div>
		</div>
		<div class="oheya-box">
			<img src="kitchin.jpg" alt="" id="kitchin">
			<div class="title-area">
				⑥キッチン
			</div>
			<div class="text-area">
				対面キッチン。入居者の方とスタッフが、一緒に料理をすることもあります。
			</div>
		</div>
		<div class="oheya-box">
			<img src="huro.jpg" alt="" height="213px"  id="bath">
			<div class="title-area">
				⑦お風呂
			</div>
			<div class="text-area">
				入浴用リフトがあり、要介護５の方でも、安心してゆっくりと入浴することができます。（通常のシャワーチェアもあります）
			</div>
		</div>
		<div class="oheya-box">
			<img src="ribingu.jpg" alt="" id="living">
			<div class="title-area">
				⑧リビング
			</div>
			<div class="text-area">
				一人掛けから四人掛けのテーブルが設置されています。お話をしたり、うたた寝をしたり各々自由に過ごしています。
			</div>
		</div>
		<div class="oheya-box">
			<img src="dekki.jpg" alt="" id="wooddeck">
			<div class="title-area">
				⑨ウッドデッキ
			</div>
			<div class="text-area">
				天気のいい日にはウッドデッキで日光浴をします。また、暖かい季節にはウッドデッキで家庭菜園の野菜を育てています。
			</div>
		</div>
	</div>
</section>
<section id="company_about">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>施設概要</h2>
		<div class="border"></div>
	</div>
	<dl>
		<div>
			<dt>施設名</dt><!--
			--><dd>グループホーム サンタクロース</dd>
		</div>
		<div>
			<dt>代表者</dt><!--
			--><dd>
				<ruby>
					<rb>高山</rb>
					<rp>(</rp><rt>タカヤマ</rt><rp>)</rp>
				</ruby>
				<ruby>
					<rb>賢仁</rb>
					<rp>(</rp><rt>ヨシヒト</rt><rp>)</rp>
				</ruby>
			</dd>
		</div>
		<div>
			<dt>所在地</dt><!--
			--><dd>長野県埴科郡坂城町大字南条657‐1</dd>
		</div>
		<div>
			<dt>電話番号</dt><!--
			--><dd>0268-81-3611</dd>
		</div>
		<div>
			<dt>入居定員</dt><!--
			--><dd>18名(1ユニット 9名×2)</dd>
		</div>
	</dl>
</section>
<div class="detail">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>詳しく見る</h2>
		<div class="border"></div>
	</div>
	<div class="btns">
		<a href="<?= $base ?>blog/2025-04-01" class="btn_1">
			<div class="btn_text">
				グループホーム サンタクロース<span class="br">運営規程</span>
			</div>	
		</a>
		<a href="<?= $base ?>blog/2025-04-02" class="btn_1">
			<div class="btn_text">
				個人情報保護規定
			</div>		
		</a>
		<a href="<?= $base ?>blog/2025-04-03" class="btn_1">
			<div class="btn_text">
				指定地域密着型（介護予防）<span class="br">認知症対応型共同生活介護</span>
			</div>		
		</a>	
		<a href="<?= $base ?>blog/2025-04-04" class="btn_1">
			<div class="btn_text">
				身体拘束等の適正化のための<span class="br">指針</span>
			</div>		
		</a>	
	</div>
</div>
<section id="access">
	<div class="h2_wrapper">
		<div class="ball"></div>
		<h2>アクセス</h2>
		<div class="border"></div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12840.79625057679!2d138.19424!3d36.428569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d3dfbf78d35a5c1!2z44Kw44Or44O844OX44Ob44O844Og44K144Oz44K_44Kv44Ot44O844K5!5e0!3m2!1sja!2sjp!4v1649134136774!5m2!1sja!2sjp" max-width="1000" width="90%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</section>
</main>
<?php include $base . 'footer.php'; ?>
<script src="<?= $base ?>hamburger.js"></script>
</body>
</html>