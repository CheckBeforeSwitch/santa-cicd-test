<?php
$base = './';
//ブログメタデータJSON取得
$blog_base = './blog/';	//ブログへのURL
require_once $blog_base . '/blog_lib.php';
$file = $blog_base . 'blog.json';
$blog = getBlogData($file);
if(empty(getBlogData($file))) {
	putBlogMetaInit($blog_base);
}
$newsValue = 3;	//新着情報の表示件数
//表示件数文表示用配列に格納
for($i = 0; $i < $newsValue; $i++) {
	$notice[$i] = $blog[$i];
}


// ページタイトル
$title = '2025/12/04サンタクロース｜長野県坂城町の認知症高齢者グループホーム';

// ページデスクリプション
$description = '長野県坂城町に密着した要支援2以上、認知症高齢者の方がご利用できるグループホームです。まるで自宅のような空間で、月一行事を開催。家族との交流もあります。';

// ページキーワード
$keywords = 'グループホーム,長野県,坂城町,高齢者,グループホームサンタクロース,高齢者施設,認知症,要支援';
// 
// 正規URL
$canonical = 'https://sakaki-santaclaus.jp/';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include $base . 'gtag.inc'; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= $base ?>hamburger.css">
	<link rel="stylesheet" href="style-top.css?v=2">
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
	<script src="slideshow1.js"></script>
</head>

<body id="top">
	<?php include $base . 'header.php'; ?>
	<main>
		<section class="fv_area">
			<div class="fv">
				<div class="slideshow1" data-interval="5000" data-transition="1000">
					<ul class="slideshow1_body">
						<li data-scale="1.1">
							<img src="fv_1.jpg" alt="">
						</li>
						<li data-scale="1.1">
							<img src="fv_2.jpg" alt="">
						</li>
						<li data-scale="1.2">
							<img src="fv_3.jpg" alt="">
						</li>
						<li data-scale="1.1">
							<img src="fv_4.jpg" alt="">
						</li>
					</ul>
				</div>
				<div class="fv_content">
					<h1>
						<span>笑顔 安全 安心</span><br>
						<span>家庭的な場所に</span>
					</h1>
					<div class="first_btn">
						<div><a href="<?= $base ?>enter/" class="first_btn_text">ご入居について</a></div>
					</div>
				</div>
				<div class="scroll_dowm_wrapper">
					<div class="scroll_down">
						Scroll
					</div>
				</div>
			</div>
			<div class="info-btn">
				<div class="info_icon">
					<img src="union.svg" alt="">
				</div>
				<div class="info-content">
					<p class="info">重要なお知らせ</p>
					<p class="info-txt">
						現在空室はございません。
					</p>
				</div>
			</div>
		</section>
		<section class="section1 basic_block">
			<div class="normal_block">
				<h2 class="heading">
					<span>お知らせ</span>
				</h2>
				<div class="news">
					<dl id="notice_content_list"><?php
foreach($notice as $n) { ?>
						<div>
							<dt class="noticeDate"><?=  h($n['date']) ?></dt>
							<dd>
								<a href="./blog/<?= h($n['date']) ?>/">
									【サンタのお便り】「<?= h($n['title']) ?>」を公開しました。
								</a>
							</dd>
						</div><?php
}?>
					</dl>
				</div>
			</div>
		</section>
		<section class="catchphrase basic_block vertical_line">
			<div class="section2_wrapper">
				<div class="section2">
					<div class="section2_text">
						<h2 class="first_title">
							家族のように過ごせる大切な家に
						</h2>
						<p>
							私たちは長野県坂城町にある要支援2以上かつ、認知症の方を受け入れているグループホームです。グループホームとは、少人数で自宅で暮らしている時と同じような雰囲気で共同生活を送り、自立を支援する施設です。坂城町の人を受け入れています。
						</p>
					</div>
				</div>
				<div class="section2_img"></div>
			</div>
		</section>
		<section class="section3 basic_block">
			<div class="autoslider">
				<div class="top-blog">
					<h2>
						<span class="font-color">サンタのお便り</span>で日常をのぞいてみませんか？
					</h2>
					<p>
						サンタクロースでは、月に1回程度、施設内でイベントを開催しています。そんなサンタクロースの日常をのぞいてみませんか？
					</p>
					<a href="<?= $base ?>blog/" class="btn">
						<div class="btn_text">サンタのお便り</div>
					</a>
				</div>
			</div>
		</section>
		<section class="basic_block">
			<div class="section4">
				<div class="top_outline">
					<a href="<?= $base ?>outline/" class="btn">
						<div class="btn_text">施設概要</div>
					</a>
					<p>
						サンタクロースの施設概要です。
					</p>
				</div>
				<div class="line"></div>
				<div class="top_enter">
					<a href="<?= $base ?>enter/" class="btn">
						<div class="btn_text">ご入居について</div>
					</a>
					<p>
						サンタクロースへのご入居を希望の方はこちらをご覧ください。
					</p>
				</div>
			</div>
		</section>
		<section class="recruit basic_block">
			<div class="top-recruit">
				<p>
					サンタクロースを運営する株式会社あさまかいでは、正社員を募集しております。詳しくは以下のサイトをご覧ください。
				</p>
				<a href="https://works.mekulo.jp/job/J2009901" target="_blank" rel="noopenner" class="btn saiyou">
					<div class="btn_text">採用情報</div>
					<img src="btn.png" alt="">
				</a>
			</div>
		</section>
		<section class="contact basic_block">
			<div class="normal_block">
				<h2 class="heading">
					<span>お問い合わせ</span>
				</h2>
				<p>
					サンタクロースに関するご質問などございましたら、以下の連絡先、または、お問い合わせフォームまでお願い致します。
				</p>
				<div class="contact_information">
					<div class="information">
						<dl class="information_dl">
							<div class="number">
								<dt>電話番号</dt>
								<dd><a class="" href="tel:0268813611">0268-81-3611</a></dd>
							</div>
							<div>
								<dt>FAX</dt>
								<dd>0268-81-3511</dd>
							</div>
							<div>
								<dt>メールアドレス</dt>
								<dd>sidecar@snow.ocn.ne.jp</dd>
							</div>
						</dl>
					</div>
					<a href="<?= $base ?>contact/" class="btn">
						<div class="btn_text">お問い合わせ</div>
					</a>
				</div>
			</div>
			<div class="town"></div>
		</section>
	</main>
	<?php include $base . 'footer.php'; ?>
	<script src="hamburger.js"></script>
	<script src="close.js"></script>
</body>
</html>
