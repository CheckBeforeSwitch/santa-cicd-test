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
            <h2>個人情報保護規定</h2>
            <h3>個人情報保護方針</h3>
            <div class="border"></div>
        </div>
        <p>
            当ホームでは、入居者様の個人情報を適正に取り扱うことは、医療・介護サービスに携わるものの重大な責務であると考え、個人情報の取り扱いに関する方針を以下のとおり定め、職員及び関係者に周知徹底を図り、これまで以上に個人情報保護に努めます。
        </p>
        <p>
            １.	個人情報に関する法令・規範の遵守<br>
            個人情報の保護に関する法令及び行政機関等が定めた個人情報に関する条例・規範・ガイドライン等を遵守します。
        </p>
        <p>
            ２.	個人情報保護師施策の強化<br>
            適切な個人情報の収集、利用及び提供が行われる体制整備の向上を図るとともに、個人情報への不正アクセス、紛失、破壊、改ざん及び漏えいの予防に努め、万一の問題発生時には速やかな是正対策を実施します。
        </p>
        <p>
            ３.	個人情報保護に関する意思統一の徹底<br>
            個人情報の取り扱いに関する規定を明確にし、従事者に周知徹底します。また、取引先等に対しても適切に個人情報を取り扱う要請します。
        </p>
        <p>
            ４.	個人情報保護活動を継続的に改善・推進<br>
            自主的に的確な個人情報の保護措置が講じられるよう、個人情報の取り扱いに関する内部規定を定期的に見直し、これを遵守するとともに、職員の教育・研修を徹底し推進致します。
        </p>
        <p>
            個人情報に関するお問い合わせは、職員またはグループホーム管理者にお申し出ください。
        </p>
        <div class="h2_wrapper">
            <h3>個人情報の利用目的</h3>
        </div>
        <p>
            当グループホームでは、入居者様の尊厳を守り安全に配慮する理念の下、お預かりしている個人情報について、利用目的を以下のとおり定めます。
        </p>
        <p>
            【入居者様への介護サービスの提供に必要な利用目的】<br>
            〔グループホーム内部での利用目的〕<br>
            ○	当グループホームが入居者様等に提供する介護サービス<br>
            ○	介護保険事務<br>
            ○	当グループホームの管理運営業務のうち<br>
            ・	入退居等の管理<br>
            ・	会計・経理<br>
            ・	事故等の報告<br>
            ・	当該入居者様の介護・医療サービスの向上<br>
        </p>
        <p>
            〔他の事業者等へ情報提供を行う場合の利用目的〕<br>
            ○	当グループホームが入居者様に提供する介護サービスのうち<br>
            ・	入居者様に居宅サービスを提供する他の居宅サービス事業者や居宅介護支援事業所等との連携（サービス担当者会議等）、照会への回答<br>
            ・	入居者様の診療等に当たり、外部の医師等の意見・助言を求める場合<br>
            ・	御家族様への心身の状況説明<br>
            ○	介護保険事務のうち<br>
            ・	保険事務の委託<br>
            ・	審査支払機関へのレセプトの提出<br>
            ・	審査支払機関又は保険者からの照会への回答<br>
            ・	損害賠償保険などに係る保険会社等への相談又は届出等<br>
        </p>
        <p>
            【入居者様への介護サービスの提供に必要な利用目的】<br>
            〔当グループホーム内部での利用目的〕<br>
            ○	当グループホームの管理運営業務のうち<br>
            ・	介護・医療サービスや業務の維持・改善のための基礎資料<br>
            ・	当グループホームにおいて行われる事例研究<br>
        </p>
        <p>
            〔他の事業者等へ情報提供を行う場合の利用目的〕<br>
            ○	当グループホームの管理運営業務のうち<br>
            ・	外部監査機関への情報提供<br>
        </p>
        <p class="name">
            株式会社　あさまかい<br>
            グループホーム サンタクロース<br>
            代表取締役　　髙山　賢仁<br>
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