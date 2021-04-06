<?php $site_url = get_site_url(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>ホテルサービス| ホーチミン ビジネスホテル MATSUNOI</title>
<meta name="description" content="ホーチミンMATSUNOIホテルでご利用いただけるホテルサービス一覧です。" />
<?php echo get_template_part('head'); ?>
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">-->
<style>
.tab-sv th {
	color:#8cb851;
}

.tab-sv th span{
	font-weight:normal;
	color:#666;
}
@media only screen and (min-device-width : 320px) and (max-device-width : 767px) {
	.tab-sv th {
    width: 30%;
	}
	.tab-sv td {
    padding: 5px 5px;
}
}

</style>
<link rel="canonical" href="http://matsunoi.vn/hotel-service/" />
</head>
<body>
<?php echo get_template_part('header'); ?>
<div id="container">
  <div class="group-subbanner">
    <div class="slidebox">
        <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/top-hotel-service.jpg');   background-position: center;   background-size: cover;" >
        
         <div class="bg-container">
            <div  class="container">                         
                    <h1 class="banner-title">ホテルサービス</h1>
            </div>
          </div>
        
        
        
        </div>
    </div>
  </div>


  <div class="box-white  pc-p-bottom50">
    
    <div class="container breadcrumb">
        <a href="<?php echo $site_url; ?>">ホーム</a> &nbsp;&gt; ホテルサービス
    </div>
    

    <div class="container">

        <table class="tab-sv" border="1" style="width:100%;margin-bottom: 30px;">
          <tr>
          <th>「空港送迎」</th>
            <td>空港〜ホテル　400,000VND/１台　　　　　　ホテル〜空港　300,000VND/１台<br>

＊ご予約の場合は事前にフライト番号とご乗車になられる方のフルネームをご連絡ください。　　　 </td>
          </tr>
          <tr>
            <th>「コピー」<br>
<span> A4サイズのみ</span></th>
            <td>白黒　２,０００VND/1枚　　白黒コピーは５枚まで無料です。<br>

カラー１０,０００VND/1枚</td>
          </tr>
           <th>「電話」</th>
            <td>国際電話 ２０,０００VND/１分　        ベトナム国内　５,０００VND/1分</td>
          <tr>
            <th>「ランドリー」</th>
            <td>お部屋にあるランドリーバッグに申込用紙と衣類を入れて、受付までお持ちください。<br>

●レギュラーサービス: 午前１１時までにお預けの場合、翌日11時に返却されます。<br>
●エクスプレスサービス: 午前8時までにお預けの場合、当日18時に返却されます。50％の追加料金がかかります。<br>
　＊料金の詳細はinfo@matsunoi.vnまでお問い合わせください。</td>
          </tr>
          
          <tr>
            <th>「ドリンク」</th>
            <td>フロントにて販売中</td>
          </tr>
          
          <tr>
          <th>「レンタカー」</th>
            <td>ご利用日時を受付にお申し付けください。＊料金は１日７０USD〜</td>
          </tr>
          
          <tr>
        <th>「ツアー」</th>
            <td>受付にお申し付けください。</td>
          </tr>
          
          <tr>
           <th>「スパ・マッサージ」</th>
            <td>受付にお申し付けください。</td>
          </tr>
          
          <tr>
         <th>「通訳」</th>
            <td>ご利用日時、通訳の種類を受付にお申し付けください。＊料金は１日観光ガイド１００USD〜、ビジネス通訳１５０USD〜</td>
          </tr>
          
          <tr>
                <th>「その他のご予約」</th>
            <td>受付にお申し付けください。</td>
          </tr>
          
         <!-- <tr>
               <th>「朝食」</th>
            <td>９階レストラン午前６時〜１０時（最終受付 ９時半）<br>

早朝ご出発の方には、おにぎりまたはサンドイッチをご用意いたします。<span style="text-decoration:underline;">前日までにお申し付けください。</span></td>
         </tr>-->
        </table>

   
    </div>
    <!-- box white end--> 
</div>
   <!--------- banner ----->
</div>
<style>
    .tab-sv td {
        padding: 5px 30px;
    }
</style>
<?php echo get_template_part('footer'); ?>
</body>
</html>