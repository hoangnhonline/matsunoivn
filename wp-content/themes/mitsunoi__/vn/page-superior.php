<?php $site_url = get_site_url(); $lang = '/vn';?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>PHÒNG SUPERIOR | Ho Chi Minh City Khách Sạn Business MATSUNOI</title>

<?php echo get_template_part('vn/head'); ?>
</head>
<body>
<?php echo get_template_part('vn/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
            <div class="slidebox">
                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/rooms/banner_1980x400-superior.png');   background-position: center;   background-size: cover;" >
                    
                    <div class="bg-container">
                                      <div  class="container">                         
                                              <div class="banner-title">PHÒNG SUPERIOR</div>
                                      </div>
                            </div>
                    
                    </div>
            </div>
    </div>
    <!-- slide box end-->
    <!-- box white-->
    <div class="box-white">
    
     <div class="container breadcrumb">
              <a href="<?php echo $site_url.$lang; ?>">TRANG CHỦ  </a> &nbsp;&gt; <a href="<?php echo $site_url.$lang; ?>/rooms/">PHÒNG </a> &nbsp;&gt; PHÒNG SUPERIOR 
    </div>
    
    
    
        <div class="container">
            <h1 class="title-h1">PHÒNG SUPERIOR</h1>
            <div class="txt-content m-top30 txt-center ">
                        Phòng 16.5 m² với cửa sổ. Căn phòng nhỏ nhắn cùng cửa sổ hướng về phía nam. Bạn sẽ luôn cảm thấy nhẹ nhàng và thoáng đãng.
            </div>
        </div>
    </div>
    <!-- box while end-->
    <!-- box gray-->
    <div class="box-gray-plain">
            <div class="container">
                     
                     <div class="room_gallerybox">
                                 <div class="main-gallery">
                                           <div class="select-img"><img src="<?php echo $site_url;  ?>/images/room_images/superior-01.jpg" alt="" /></div>
                                 </div>
                                 
                                 <div class="gallery-list">
                                         <ul>
                                             <li><a  data-lightbox="gallery1"  href="<?php echo $site_url;  ?>/images/room_images/superior-01.jpg"><div style="background:url(<?php echo $site_url;  ?>/images/room_images/superior-01.jpg);  background-position: center;   background-size: cover;" ></div></a></li>
                                             <li><a  data-lightbox="gallery1"  href="<?php echo $site_url;  ?>/images/room_images/superior-02.jpg"><div style="background:url(<?php echo $site_url;  ?>/images/room_images/superior-02.jpg);  background-position: center;   background-size: cover;" ></div></a></li>
                                             <li><a  data-lightbox="gallery1"  href="<?php echo $site_url;  ?>/images/room_images/superior-03.jpg"><div style="background:url(<?php echo $site_url;  ?>/images/room_images/superior-03.jpg);  background-position: center;   background-size: cover;" ></div></a></li>
                                             <li><a  data-lightbox="gallery1"  href="<?php echo $site_url;  ?>/images/room_images/superior-04.jpg"><div style="background:url(<?php echo $site_url;  ?>/images/room_images/superior-04.jpg);  background-position: center;   background-size: cover;" ></div></a></li>
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
    <h3 class="title-h3"><span>Chi tiết phòng</span></h3>
    
     
    <table class="table-style1">
    <tr>
        <th>Giá phòng   </th>
        <td>58USD<br/>※ 1 room charge, no breakfast 53 USD</td>
    </tr>
    
    
    <tr>
        <th>Kích thước phòng</th>
        <td>Standard / Superior 16.5m2 <br/>
                               Deluxe 20 m2 <br/>
                               Twin 24 m2 <br/></td>
    </tr>
        <tr>
            <th>Kích cỡ giường </th>
            <td>Standard · Superior · Deluxe H1950 mm W1600 mm <br/> Twin  H1950 mm W1200 mm</td>
        </tr>


 <tr>
            <th>Chính sách không hút thuốc</th>
            <td>Vui Lòng không hút thuốc trong phòng và khu vực công cộng tại khách sạn.</td>
        </tr>
    
    </table>
    
      <br/>
      
      <div style="text-align:center;">
                          <a class="btn btn-success btn-lg " href="<?php echo $site_url.$lang; ?>/inquire/">ĐẶT PHÒNG</a>
      </div>
    
    
    </div>
    
    
    </div>
    
           　　　
      </div>
    </div>
<!-- box white end-->

<?php echo get_template_part('vn/inc-room-facilities'); ?>
  
  
</div>
<?php echo get_template_part('vn/footer'); ?>
</body>
</html>