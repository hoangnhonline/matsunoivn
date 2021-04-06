<?php $site_url = get_site_url();  $lang = '/vi';?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>TIỆN NGHI VÀ ĐI ĐẾN | MATSUNOI Khách Sạn Hồ Chí Minh</title>
<meta name="description" content="MATSUNOI Khách Sạn Hồ Chí Minh mang tới cho khách hàng tối đa các tiện nghi trong suốt thời gian công tác hay là nghĩ ngơi tại khách sạn.">
<?php echo get_template_part('vi/head'); ?>
</head>
<body>
<?php echo get_template_part('vi/header'); ?>
<style>
#link{
right: 35%;
    background-color: #666;
    padding: 35px;
    opacity: .8;
    font-family: 'Libre Baskerville',serif;
    font-size: 38px;
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
}

@media only screen and (max-device-width: 767px) and (min-device-width: 320px)
{
#link {

    background-color: #666;
    padding: 8px;
    opacity: .8;
    font-family: 'Libre Baskerville',serif;
    font-size: 18px;
    position: absolute;
    top: 50%;
   transform: translate(0, -50%);
}
}
</style>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/facilities/top_banner.png');   background-position: center;   background-size: cover;" >
            
                      <div class="bg-container">
                                  <div  class="container">  
                                    <div id="link"><a href="http://matsunoi.vn/vi/sight_seeing/">ĐIỂM THAM QUAN</a></div>                                   
                                          <div class="banner-title">TIỆN NGHI VÀ ĐI ĐẾN</div>
                                  </div>
                        </div>
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
    <!-- box gray-->
    <div class=" box-white">

    <div class="container breadcrumb">
              <a href="<?php echo $site_url.$lang ; ?>">TRANG CHỦ</a> &nbsp;&gt; TIỆN NGHI VÀ ĐI ĐẾN
    </div>
    
    
        <h1 class="title-h1">TIỆN NGHI VÀ ĐI ĐẾN</h1>
    
        <div class="container m-top40">
            <div class="row">
            
            <div class="col-xs-6 col-sm-6 hotel-pc-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_01.png" alt="" /> </div>
            
                <div class="col-xs-6 col-sm-6">
                    <div class="box-detail">
                        <h2 class="title-h3"><span>Sảnh / Lễ tân</span></h2>
                        
                          <div class="hotel-smt-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_01.png" alt="" /> </div>
                        
                        <div class="text-detail  m-top20">
                            <p>Chúng tôi hân hạnh mang đến cho quý khách một kỳ nghỉ dễ chịu và thoải mái. Hãy liên hệ ngay với các lễ tân chuyên nghiệp của chúng tôi nếu bạn gặp vấn đề về nhận phòng, trả phòng, đặt tour, thuê xe, đưa đón tại sân bay…</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- box gray end-->
    <!-- box white-->
    <!--<div class="box-gray-plain  pc-p-bottom50">
        <div class="container">
            <div class="row">
               
                <div class="col-xs-6 col-sm-6">
                    <div class="box-detail">
                        <h2 class="title-h3"><span>Bữa ăn</span></h2>
                         <div class="hotel-smt-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_02.jpg" alt="" /> </div>
                        <div class="text-detail  m-top20">
                            <p>Bữa ăn sáng được phục vụ tại tầng 9 khách sạn theo kiểu Nhật và buffet. Thời gian từ 6 đến 10 giờ sáng (thời gian order món cuối cùng là 9 giờ 30). Bữa ăn được chuẩn bị kĩ bởi đầu bếp người Nhật sẽ rất phù hợp cho những ai tìm kiếm hương vị Nhật tại Việt Nam.</p>
                        </div>
                    </div>
                </div>
                
                 <div class="col-xs-6 col-sm-6 hotel-pc-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_02.jpg" alt="" /> </div>
                
            </div>
        </div>
    </div>-->
    <!-- box white end-->
    <!-- box white-->

    <div class="box-gray-plain pc-p-bottom50">
    <div class="container">
        <div class="row">
      
            <div class="col-xs-6 col-sm-6">
                <div class="box-detail">
                    <h2 class="title-h3"><span>Phòng</span> </h2>
                     <div class="hotel-smt-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_04.jpg" alt="" /> </div>
                    <div class="text-detail  m-top20">
                        <p>Tất cả các phòng được làm mới vào tháng 11 năm 2017. Phòng sáng sủa và thoải mái sẽ đem đến cho bạn một kì nghỉ thoải mái.</p>
                        
                        <a class="btn btn-success btn-mid-width  f-right" href="<?php echo $site_url.$lang;  ?>/rooms/">Chi Tiết</a>
                    </div>
                </div>
            </div>
            
               <div class="col-xs-6 col-sm-6 hotel-pc-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_04.jpg" alt="" /> </div>   
            
            
        </div>
    </div>
</div>
<!-- box white end-->
 <!-- box white-->
<div class="box-white   box-room-info">
        <div class="container">
            <div class="row">
                 <div class="col-xs-6 col-sm-6 hotel-pc-view"> <img src="<?php echo $site_url;  ?>/images/room_facilities/fac-thumb-3.jpg" alt="" /> </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="box-detail">
                        <h2 class="title-h3"><span>Một số đồ dùng và trang thiết bị trong phòng</span></h2>
                         <div class="hotel-smt-view"> <img src="<?php echo $site_url;  ?>/images/room_facilities/fac-thumb-3.jpg" alt="" /> </div>
                        <div class="text-detail  m-top20">
                            <p>Room Supplies & Amenities
</p>
Dầu gội, dầu xả, sữa tắm, xà phòng rửa tay và kem cạo râu
  <a class="btn btn-success btn-mid-width  f-right" href="<?php echo $site_url;  ?>/vi/rooms/standard/">Chi Tiết</a>
                        </div>
                    </div>
                </div>
                
               
                
            </div>
        </div>
    </div>
    <!-- box white end-->
    
     <div class="box-gray-plain pc-p-bottom50">
        <div class="container">
            <div class="row">
               
            
                <div class="col-xs-6 col-sm-6">
                    <div class="box-detail">
                        <h2 class="title-h3"><span>Dịch Vụ Khách Sạn</span></h2>
                         <div class="hotel-smt-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_05.jpg" alt="" /> </div>
                        <div class="text-detail m-top20">
                            <p>Đưa đón tại sân bay, Photocopy, Điện thoại, Giặt ủi, Thuê xe...</p>
                              <a class="btn btn-success btn-mid-width  f-right" href="<?php echo $site_url;  ?>/vi/hotel-service/">Details</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-6 col-sm-6 hotel-pc-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_05.jpg" alt="" /> </div>
             
            </div>
        </div>
    </div>
</div>


    <!-- box gray-->
  
     <div class="box-white   box-room-info">
        <div class="container">
            <div class="row">
               <div class="col-xs-6 col-sm-6 hotel-pc-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_03.png?20180708" alt="" /> </div>
            
                <div class="col-xs-6 col-sm-6">
                    <div class="box-detail">
                        <h2 class="title-h3"><span>Hội họp – Tiệc</span></h2>
                         <div class="hotel-smt-view"> <img src="<?php echo $site_url;  ?>/images/facilities/facilitie_03.png?20180708" alt="" /> </div>
                        <div class="text-detail m-top20">
                            <p>Nhà hàng tại lầu 9 khách sạn có thể sử dụng cho nhiều mục đích khác nhau như tiệc hay các cuộc họp. Nếu có nhu cầu xin vui lòng liên hệ qua số điện thoại của khách sạn.</p>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</div>
<!-- box gray end-->

<!-- box gray-->
  <div class="box-gray-plain pc-p-bottom50">
        <div class="container">
            <div class="row">
 
               
                <div class="col-xs-6 col-sm-6">
                    <div class="box-detail">
                        <h2 class="title-h3"><span>Cho Thuê Tầng Bán Hầm</span></h2>
                         <div class="hotel-smt-view"> <img src="http://matsunoi.vn/wp-content/uploads/2019/10/facilitie_06.jpg" alt="" /> </div>
                        <div class="text-detail m-top20">
                            <p>Các cửa hàng ăn uống có thể liên hệ thuê tầng bán hầm của khách sạn Matsunoi. Diện tích khoảng 80m².
Nếu có nhu cầu xin vui lòng liên hệ qua số điện thoại hoặc email của khách sạn.<BR>
<font color="red">Điện Thoại: (84)-28-3824-6068<BR>Email: info@matsunoi.vn</font><br/></p>
                        </div>
                    </div>
                </div>
                     <div class="col-xs-6 col-sm-6 hotel-pc-view"> <img src="http://matsunoi.vn/wp-content/uploads/2019/10/facilitie_06.jpg" alt="" /> </div>   
            </div>
        </div>
    </div>
</div>
<!-- box gray end-->
<!-- box gray -->
   <div class="box-white">
   
   <div class="container">
   <h2 class="title-h3"><span>Đi đến</span> </h2>
   
   <div class="block block-map">
								<object class="map" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.446714668741!2d106.70293195081287!3d10.777057692283382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4670702e31%3A0xa5777fb3853e32ec!2sMatsunoi+Hotel!5e0!3m2!1svi!2s!4v1508120390105"></object>								
							
                            
                            
                                
                              <div class="row" style="padding-top:20px;">
                                  

                               <div class="container m-top40">
            <div class="row">
 <div class="col-xs-12 col-sm-6 ">
                                        <img src="http://matsunoi.vn/wp-content/uploads/2019/11/MAP.png" alt="" style="max-width:100%; height:auto;" />
</div>
                              <div class="col-xs-12 col-sm-6 ">
                                
                                <div style="display:table; height:100%;">
                                <div class="text-detail  m-top20">
                                   <p style="margin-top:25px;"  ><span class="txt-red">※</span>Mất khoảng 20 đến 30 phút từ sân bay Tân Sơn Nhất (tùy thuộc vào điều kiện giao thông). Giá cả taxi có thể giao động từ 200.000 VND đến 250.000 VND.</p>
                             
</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<div class="row" style="padding-top:20px;">
<div class="container m-top40">
            <div class="row">
 <div class="col-xs-12 col-sm-6 ">
                                        <img src="http://matsunoi.vn/wp-content/uploads/2019/11/DSCN0428-1.jpg" alt="" style="max-width:100%; height:auto;" />


</div>

<div class="col-xs-12 col-sm-6 ">
                                
                                <div style="display:table; height:100%;">
                                <div class="text-detail  m-top20">
                                                          
                                   <p style="margin-top:0px;"> <span class="txt-red">※</span>Có một cổng vòm màu xanh trên đường Đông Du.</p>

</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>






<div class="row" style="padding-top:20px;">
<div class="container m-top40">
            <div class="row">
 <div class="col-xs-12 col-sm-6 ">
                                        <img src="http://matsunoi.vn/wp-content/uploads/2019/11/DSCN0433.jpg" alt="" style="max-width:100%; height:auto;" />


</div>

<div class="col-xs-12 col-sm-6 ">
                                
                                <div style="display:table; height:100%;">
                                <div class="text-detail  m-top20">
                                                          
                                   <p style="margin-top:0px;"> <span class="txt-red">※</span>Bạn sẽ nhìn thấy khách sạn của chúng tôi nằm ở 30M phía trước cổng vòm này.</p>
Xin vui lòng liên lạc với chúng tôi nếu bạn gặp khó khăn trong việc tìm ra khách sạn.
</div>

                <div class="m-top20 text-center"><a href="tel:02838246068"><img src="<?php echo $site_url;  ?>/images/inquire/sub_banner_vn.png" alt="" /></a></div>
                </div>
                
            </div>
        </div>
    </div>





<div class="container m-top40">
            <div class="row">
                            
                            
                            
                                

                                  </div></div>

                                   </div>
                                 
                                 
                            </div>
                            
                            
                            
     </div>
   
   
     
   </div>
   
   </div>
   <!-- box gray end-->


</div>
<?php echo get_template_part('vi/footer'); ?>
</body>
</html>