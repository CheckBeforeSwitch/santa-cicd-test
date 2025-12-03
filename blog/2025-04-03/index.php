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
            <h2>指定地域密着型（介護予防）認知症対応型共同生活介護</h2>
            <h3>重要事項説明書</h3>
            <div class="border"></div>
        </div>
        <p>
            １　事業者の概要<br>
            施設名　　指定地域密着型（介護予防）認知症高齢者グループホーム　サンタクロース<br>
            法人名　　株式会社　あさまかい<br>
            代表者名　代表取締役　髙山　賢仁<br>
            所在地　　長野県埴科郡坂城町大字南条６５７－１<br>
        </p>
        <p>
            法人の理念<br>
            高齢者が安らぎと喜びのある毎日を送りたい、安心とともに尊厳のある生活を維持したいという願いを満たし、ますます進む高齢化社会の中で住み慣れた土地で自立して暮らせる地域社会を実現する。
        </p>
        <p>
            ２　ホームの概要<br>
            （１）ホームの目的<br>
            家庭的な環境の下で日常的な世話及び機能訓練を行うことにより、利用者がその有する能力に応じ、自立した生活を営むことができるように支援することを目的とする。<br>
            （２）	ホームの運営方針<br>
            人間として尊厳の保たれる環境の中で「もうひとつの我が家」を実感できる空間と時間の提供に努める。また、介護する家族が不安から開放され安心の生活を送ることが出来るよう、常に｢自己評価｣「第三者評価」を通じて「利用者満足度の向上」が図れるように努める。<br>
            （３）ホーム管理者　　髙山　賢仁<br>
            （４）開所年月日　　　平成１８年３月<br>
            （５）所在地　　　　　長野県埴科郡坂城町大字南条字東裏６５７－１<br>
            （６）電話番号　　　　０２６８－８１－３６１１<br>
            （７）交通の便　　　　しなの鉄道　テクノさかき駅<br>
            （８）敷地面積　　　　１，４４９．５６㎡<br>
            （９）建物の概要<br>
            建物の構造　　　木造平屋建て<br>
            定員　　　　　　１８名（全室１人部屋）　　　居室面積　　９．９４㎡<br>
            建物面積　　　　４５５．０４㎡　　　居間・食堂面積　　３１．８８㎡<br>
            浴室面積　　　　３．２８㎡
        </p>
        <p>
            ３　施設の体制<br>
            （１）	職員体制
        </p>
        <table class="system">
            <thead>
                <tr>
                    <th>職種</th>
                    <th>資格</th>
                    <th>常勤</th>
                    <th>非常勤</th>
                    <th>業務内容</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>管理者</th>
                    <td>介護支援専門員</td>
                    <td>
                        １名<br>
                        計画作成担当兼務
                    </td>
                    <td></td>
                    <td>介護従業者及び業務の管理</td>
                </tr>
                <tr>
                    <th scope="col" rowspan="2">計画作成担当者</th>
                    <td>
                        介護支援専門員<br>
                        介護福祉士
                    </td>
                    <td>
                        １名<br>
                        管理者兼務
                    </td>
                    <td></td>
                    <td>
                        指定地域密着型認知症対応型共同生活介護計画の作成
                    </td>
                </tr>
                <tr>
                    <td>介護福祉士</td>
                    <td>
                        1名<br>
                        介護従業員兼務
                    </td>
                    <td></td>
                    <td scope="col" rowspan="3">入浴・排せつ・食事等生活全般に係わる援助</td>
                </tr>
                <tr>
                    <th scope="col" rowspan="2">介護従業員</th>
                    <td>介護福祉士等</td>
                    <td>４名　兼務２名</td>
                    <td class="right">５名</td>
                </tr>
                <tr>
                    <td class="btm">介護員等</td>
                    <td class="btm">４名</td>
                    <td class="btm right">３名</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th scope="row" colspan="2" class="bottom">計</th>
                    <td>８名</td>
                    <td>８名</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        <p>
            （２）	夜間勤務体制<br>
            １名以上夜勤<br>
            （３）	相談･苦情への対応体制<br>
            ①	当施設のお客様相談・苦情処理窓口の受付<br>
            担当者　　　髙山　賢仁<br>
            電話　　　　０２６８－８１－３６１１<br>
            ＦＡＸ　　　０２６８－８１－３５１１<br>
            受付日　　　年中（ただし、１２月２９日～１月３日を除く）<br>
            受付時間　　午前９時～午後５時<br>
            ②	当事業所以外の苦情申立先<br>
            当事業所以外に、お住まいの市町村及び長野県国民健康保険団体連合会の相談・苦情窓口等に苦情を伝えることができます。<br>
            イ　坂城町福祉健康課保険係　　　０２６８－８２－３１１１<br>
            ロ　長野県国民健康保険団体連合会（介護保険課苦情処理係）<br>
            ０２６－２３８－１５８０<br>
            ハ　長野県福祉サービス運営適正化委員会<br>
            ０１２０－２８－７１０９
        </p>
        <p>
            ４　施設サービスの概要<br>
            （１）介護保険給付サービス<br>
            ①　食事<br>
            ・食事は、栄養への配慮とともに利用者の身体の状況、嗜好を考慮して生活の実感が失われないよう職員と共同して作ります。<br>
            ・朝食：午前７時半　　昼食：午後１２時　夕食：午後６時<br>
            ②　入浴<br>
            ・本人の健康状態を確認し、週に最低２回以上入浴します。<br>
            ・体調の悪い時には清拭にて対応することもあります。<br>
            ③　生活相談<br>
            ・日常の生活に共に関心を持ち、相談がしやすい雰囲気に配慮します。<br>
            ④　健康管理<br>
            ・健康状況、服薬管理等の健康管理をサポートします。<br>
            ⑤　その他自立への支援<br>
            ・常に清潔で快適な生活が送れるよう支援します。<br>
            ・寝たきり防止のため常に日常生活の活性化に工夫考慮し、精神の安定化に効果のある音楽療法を積極的に取り入れます。
        </p>
        <p>
            （２）介護保険給付外サービス<br>
            ①　自己負担利用料（認知症対応型共同生活介護費 Ⅱ）※負担割合証にて要確認
        </p>
        <table class="system">
            <thead>
                <tr>
                    <th></th>
                    <th>介護保険適用時の1割負担<br>
                        （１日当り）
                    </th>
                    <th>介護保険適用時の1割負担<br>
                        （３０日当り）
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>要支援２</th>
                    <td>７４９円</td>
                    <td>２２，４７０円</td>
                </tr>
                <tr>
                    <th>要介護度１</th>
                    <td>７５３円</td>
                    <td>２２，５９０円</td>
                </tr>
                <tr>
                    <th>要介護度２</th>
                    <td>７８８円</td>
                    <td>２３，６４０円</td>
                </tr>
                <tr>
                    <th>要介護度３</th>
                    <td>８１２円</td>
                    <td>２４，３６０円</td>
                </tr>
                <tr>
                    <th>要介護度４</th>
                    <td>８２８円</td>
                    <td>２４，８４０円</td>
                </tr>
                <tr>
                    <th>要介護度５</th>
                    <td>８４５円</td>
                    <td>２５，３５０円</td>
                </tr>
            </tbody>
        </table>
        <p>
            ＊	初期加算　１日当り ３０円<br>
            初期加算は、入所した日から起算して３０日以内の期間について、入院・外泊期間を除き加算します。<br>
            ＊	科学的介護推進体制加算　１か月当たり ４０円<br>
            ②　食材料費　　 月額　　３０，５００円<br>
            外泊等の場合は日割り計算とし、３食提供が無い場合は減免となります。<br>
            ③　管理費　　　 月額　　１５，０００円<br>
            （セコム管理料、防災管理料、リフト車両管理料、その他備品管理料）<br>
            ④　家　　賃　　 月額　　７６，０００円<br>
            ⑤　敷　　金　　　　　 ２００，０００円<br>
            ③	　その他の料金<br>
            ・水道光熱費　月額　　１３，５００円（冬期は暖房費として別途５，０００円が加算されます）<br>
            ・ベッドパット及び掛けふとん・掛け毛布　（各夏・冬用）　実費<br>
            ・日常生活費（歯ブラシ、理容代、おむつ代等）　実費<br>　
            ・レクレーション　　　材料費他　　実費相当額<br>
            ・行政手続代行費　　　交通費他　　実費相当額
        </p>
        <p>
            ５　サービスの利用に当たっての留意事項<br>
            （１）	面会<br>
            面会時間午前９時～午後６時<br>
            来訪者が宿泊する場合は、必ず許可を得てください。<br>
            （２）	外出・外泊<br>
            外出・外泊の際には、必ず行き先と帰宅時間及び外泊先電話番号を職員に申し出てください。<br>
            （３）	喫煙・飲酒<br>
            喫煙は決められた場所以外ではお断りします。飲酒は出来ません。<br>
            （４）	金銭、貴重品の管理<br>
            希望があれば管理をお受けします。<br>
            （５）	所持品の持ち込み<br>
            日用品、家具、電化製品等の持ち込みは可能です。<br>
            詳細は担当者とご相談ください。<br>
            （６）	設備、器具の利用<br>
            施設内の居室や設備、器具は本来の使用法に従ってご利用いただきますが、これに反した利用により破損等が生じた場合には、賠償していただく場合があります。<br>
            （７）施設内へのペット持ち込み及び飼育はお断りいたします。
        </p>
        <p>
            ６　緊急時の連絡先<br>
            サービスの提供中に容態の変化があった場合、特定のかかりつけの主治医を指定される場合にはその主治医、またご家族等の連絡先に速やかに連絡等の対応をいたします。
        </p>
        <table class="system">
            <tbody>
                <tr>
                    <td scope="col" rowspan="2">主治医</td>
                    <td>氏名</td>
                    <td scope="row" colspan="3"></td>
                </tr>
                <tr>
                    <td>連絡先</td>
                    <td class="empty"></td>
                    <td>電話番号</td>
                    <td class="empty"></td>
                </tr>
                <tr>
                    <td scope="col" rowspan="3" class="bottom">ご家族</td>
                    <td>氏名</td>
                    <td scope="row" colspan="3"></td>
                </tr>
                <tr>
                    <td scope="col" rowspan="2" class="bottom">連絡先</td>
                    <td class="empty"></td>
                    <td scope="col" rowspan="2" class="bottom">電話番号</td>
                    <td class="empty"></td>
                </tr>
                <tr>
                    <td class="empty"></td>
                    <td class="empty"></td>
                </tr>
            </tbody>
        </table>
        <p>
            ７　協力医療機関との連携<br>
            当ホームでは、下記の医療機関と提携しております。<br>
            ①リサーチパーク・クリニック<br>
            上田市大字下之郷８１３－４６　　　　電話　０２６８－３７－１１３３<br>
            ②宮原歯科医院<br>
            坂城町網掛３１６８－１　　　　　　　電話　０２６８－８２－８７１１
        </p>
        <p>
            ８　事故発生時の対応<br>
            （１）サービスの提供中に事故が発生した場合は、利用者に対し応急処置、医療機関への搬送等の措置を講じ、速やかに利用者がお住まいの市町村、利用者代理人等に連絡を取ります。<br>
            （２）事故の状況及び事故に際してとった処置について記録するとともに、その原因を解明し、再発生を防ぐための対策を講じます。<br>
            （３）	当事業所の介護サービスにより、利用者に対して賠償すべき事故が発生した場合は速やかに損害賠償いたします。
        </p>
        <p>
            ９　非常災害対策<br>
            非常災害に備えるため、消防計画を作成し避難訓練等を下記のとおり行います。<br>
            （１）	管理者は、防火責任者、火元責任者を選任します。<br>
            （２）	始業時・就業時には、火災危険防止のため自主的な点検を行います。<br>
            （３）	非常災害用の設備点検は契約保守業者に依頼する。点検の際には防火責任者が立ち会います。<br>
            （４）	非常災害設備は常に有効に保持するよう努めます。<br>
            （５）	火災や地震が発生した場合には、被害を最小にとどめるため、自衛消防隊を組織し、任務の遂行に当たります。<br>
            （６）	防火責任者は従業員に対して防火教育、消防訓練を実施します。<br>
            （７）	その他必要な災害防止対策についても必要に応じて対処する体制をとります。<br>
            （８）セコム・セキュリティーで完全管理します。<br>
        </p>
        <p>
            私は、契約書及び本書面により、指定地域密着型（介護予防）認知症対応型共同生活介護について、重要事項の説明を受けました
        </p>
        <table>
            <tbody>
                <tr>
                    <td scope="row" colspan="4">　　年　　月　　日</td>
                </tr>
                <tr>
                    <td scope="row" colspan="4" class="empty"></td>
                </tr>
                <tr>
                    <td  scope="col" rowspan="2">利用者</td>
                    <td scope="row" colspan="3">住所</td>
                </tr>
                <tr>
                    <td>氏名</td>
                    <td class="empty"></td>
                    <td>印</td>
                </tr>
                <tr>
                    <td  scope="col" rowspan="2">
                        利用者代理人<br>
                        （保証人）
                    </td>
                    <td scope="row" colspan="3">住所</td>
                </tr>
                <tr>
                    <td>氏名</td>
                    <td class="empty"></td>
                    <td>印</td>
                </tr>
                <tr>
                    <td  scope="col" rowspan="2">
                        身元引受<br>
                        （連帯保証人）
                    </td>
                    <td scope="row" colspan="3">住所</td>
                </tr>
                <tr>
                    <td>氏名</td>
                    <td class="empty"></td>
                    <td>印</td>
                </tr>
            </tbody>
        </table>
        <p>
            （介護予防）認知症対応型共同生活介護の提供にあたり、利用者に対して本書面に基づいて、重要な事項を説明しました。
        </p>
        <table>
            <tbody>
                <tr>
                    <td  scope="row" colspan="2">事業者</td>
                    <td  scope="row" colspan="3">長野県埴科郡坂城町大字南条657-1</td>
                </tr>
                <tr>
                    <td  scope="row" colspan="2" rowspan="2"></td>
                    <td  scope="row" colspan="3">株式会社　あさまかい</td>
                </tr>
                <tr>
                    <td scope="row" colspan="2">代表取締役　髙山　賢仁</td>
                    <td>印</td>
                </tr>
                <tr>
                    <td  scope="row" colspan="5"></td>
                </tr>
                <tr>
                    <td  scope="row" colspan="4">重要事項説明者</td>
                    <td>印</td>
                </tr>
            </tbody>
        </table>
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