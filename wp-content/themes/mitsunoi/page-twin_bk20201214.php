<?php $site_url = get_site_url(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>ツインルーム | ホーチミン ビジネスホテル MATSUNOI</title>
<meta name="description" content="南側に面しているため、日差しが入る明るいお部屋です。２４㎡と広いので、カップルや女性二人旅でも、家族でも快適にご利用いただけます。" />
<?php echo get_template_part('head'); ?>
</head>
<body>
<?php echo get_template_part('header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
            <div class="slidebox">
                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/rooms/banner_1980x400-twin.png');   background-position: center;   background-size: cover;" >
                            <div class="bg-container">
                                  <div  class="container">                         
                                          <div class="banner-title">ツイン</div>
                                  </div>
                            </div>
                    </div>
            </div>
    </div>
    <!-- slide box end-->
    <!-- box white-->
    <div class="box-white">
    
      <div class="container breadcrumb">
              <a href="<?php echo $site_url; ?>">ホーム</a> &nbsp;&gt; <a href="<?php echo $site_url; ?>/rooms/">お部屋</a> &nbsp;&gt; ツイン
    </div>
    
    
        <div class="container">
            <h1 class="title-h1">ツイン</h1>
            <div class="txt-content m-top30 txt-center ">
                 南側に面しているため、日差しが入る明るいお部屋です。バスルームも広く、大きめのバスタブ（外側70CM/160CM）は疲れた体をやさしく包み込みます。 ２４㎡と広いので、カップルや女性二人旅でも、家族でも快適にご利用いただけます。 長期滞在の方には嬉しい、クローゼットが２つございますので、お荷物の収納もバッチリです。 <BR>
<!--<font color="red">朝食の提供は10月31日まで</font><br/>-->
            </div>
        </div>
    </div>
    <!-- box while end-->
    <!-- box gray-->
    <div class="box-gray-plain">
            <div class="container">
                     
                     <div class="room_gallerybox">
                                 <div class="main-gallery">
                                            <div class="select-img"><img src="<?php echo $site_url;  ?>/images/room_images/twin-01.jpg" alt="ホーチミン MATSUNOIホテル | ツインルーム1" /></div>
                                 </div>
                                 
                                 <div class="gallery-list">
                                         <ul>
                                             <li><a  data-lightbox="gallery1"  href="<?php echo $site_url;  ?>/images/room_images/twin-01.jpg"><div style="background:url(<?php echo $site_url;  ?>/images/room_images/twin-01.jpg);  background-position: center;   background-size: cover;" ></div></a></li>
                                             <li><a  data-lightbox="gallery1"  href="<?php echo $site_url;  ?>/images/room_images/twin-02.jpg"><div style="background:url(<?php echo $site_url;  ?>/images/room_images/twin-02.jpg);  background-position: center;   background-size: cover;" ></div></a></li>
                                             <li><a  data-lightbox="gallery1"  href="<?php echo $site_url;  ?>/images/room_images/twin-03.jpg"><div style="background:url(<?php echo $site_url;  ?>/images/room_images/twin-03.jpg);  background-position: center;   background-size: cover;" ></div></a></li>
                                             <li><a  data-lightbox="gallery1"  href="<?php echo $site_url;  ?>/images/room_images/twin-04.jpg"><div style="background:url(<?php echo $site_url;  ?>/images/room_images/twin-04.jpg);  background-position: center;   background-size: cover;" ></div></a></li>
                                       </ul>
                                 </div>
                     </div>
                     
                     <div class="clearfix"></div>
            </div>
    </div>
    
      <!-- box gray end-->    
      
      
      
      
    
    <!-- box white-->
    <div class="box-white  pc-p-bottom50">
        <div class="container">
    
    
    <div class="row">
    
     <div class="col-xs-12 col-sm-12">
    <h3 class="title-h3"><span>客室</span>  Room Detail</h3>
    
     
    <table class="table-style1">
    
    <tr>
        <th>価格</th>
        <td><del>54 USD</del> <font color="FF0000">*40USD</span>（宿泊日2021年1月31日まで）</font>
			<br>朝食サービスはございません。<br>
			<!--<br/>※1室料金、朝食なしは 54 USD </span><br/>
※ 年末年始12月29日〜1月2日(チェックイン）は全て+10USDとなります</td><br/>-->
    </tr>

    </tr>
    
    
    <tr>
        <th>広さ</th>
        <td>スタンダード・スーペリア１６.５m2<br/>デラックス２０m2 <br/>ツイン２４m2</td>
    </tr>
        <tr>
            <th>ベッドサイズ</th>
            <td>スタンダード・スーペリア・デラックス H１９５０mm W１６００mm <br/>ツインH１９５０mm W１２００mm</td>
        </tr>
        
        
             <tr>
            <th>喫煙</th>
            <td>お部屋は全て禁煙となります。所定の喫煙場所にてお願い致します。</td>
        </tr>
   
    </table>
    
      <br/>
      
      <div style="text-align:center;">
                          <a class="btn btn-success btn-lg " href="<?php echo $site_url.$lang; ?>/inquire/">今すぐ予約</a>
      </div>
    
    </div>
    
    
    </div>
    
           　　　
      </div>
    </div>
<!-- box white end-->

<?php echo get_template_part('inc-room-facilities'); ?>
   
  
</div>
<?php echo get_template_part('footer'); ?>
</body>
</html>