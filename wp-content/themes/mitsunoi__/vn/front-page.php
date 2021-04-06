<?php $site_url = get_site_url();  
$lang = '/vn';
?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>Ho Chi Minh City Khách Sạn Business MATSUNOI</title>

<?php echo get_template_part('vn/head'); ?>
</head>
<body>
<?php echo get_template_part('vn/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-mainbanner">
            <div class="slidebox">
                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/top_banner.png');   background-position: center;   background-size: cover;" ></div>
            </div>
    </div>
    <!-- slide box end-->
    <!-- box white-->
    <div class="box-white">
        <div class="container">
            <h1 class="title-h1">Khách sạn Matsunoi Hồ Chí Minh</h1>
            <div class="txt-content m-top20 txt-center" style="max-width:870px; margin:auto;">
                    Tập đoàn Matsunoi (chuyên gia trong lĩnh vực resort) đến từ tỉnh Gunma, Nhật Bản đã đưa vào hoạt động một khách sạn tại thành phố Hồ Chí Minh từ ngày 1 tháng 11 năm 2017. Khách sạn của chúng tôi là một khách sạn không hút thuốc. <br/>
Khách sạn với một không gian đơn giản và sạch sẽ sẽ đem đến cho bạn sự thư giản tối đa. Khách sạn không chỉ là sự lựa chọn đáng giá cho những chuyến công tác mà còn là cho những chuyến du lịch của bạn.
            </div>
        </div>
    </div>
    <!-- box while end-->
    <!-- box gray-->
    <div class="box-gray">
            <div class="container">
                        <h2 class="title-h1">Đặc trưng</h2>
                        
                        <div class="group-room-x3 row  fac-group">
                                    <div class="col-xs-4 col-sm-4 ">
                                            <a  class="box_hover" href="<?php echo $site_url.$lang;  ?>/facilities/">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility1.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Với vị trí nằm trong một con hẻm nhỏ, bạn sẽ luôn cảm thấy yên tĩnh và thoải mái trong suốt quá trình lưu trú mặc cho những ồn ào náo nhiệt của khu vực trung tâm thành phố Hồ Chí Minh.</div>
                                            </div>
                                            </a>                                            
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                             <a  class="box_hover" href="<?php echo $site_url.$lang;  ?>/facilities/">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility2.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Tất cả các phòng đề được trang bị bồn tắm và được làm mới trong tháng 11 năm 2017.</div>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4" >
                                             <a  class="box_hover" href="<?php echo $site_url.$lang;  ?>/facilities/">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility3.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Tận hưởng buổi sáng tại lầu 9 của khách sạn với phong cách buffet.</div>
                                           </div>
                                           </a>
                                    </div>
                        </div>
            </div>
    </div>
    <!-- box gray end-->    
    
    
    
<script type="text/javascript">
function adj_height(){
		$('.fac-group').each( function(){
										
				_fac_h = 0;										
			    $(this).find('.box-room-detail').each( function(){													
							if ($(this).outerHeight() > 	_fac_h){
									_fac_h = 	$(this).outerHeight();
							}								
				});
										
				$(this).find('.box-room-detail').css({'height' :_fac_h }) ;	
		});
}
					
adj_height();					
 $(window).on('resize',adj_height);
</script>
    
    <!-- box white-->
    <div class="box-white smt-padding-bottom-20">
        <div class="container">
                <h2 class="title-h1">PHÒNG</h2>
                
                <div class="clearfix"></div>
                
                 <div class="group-room-x4 row">
                                    <div class="col-xs-12 col-sm-3">
                                           
                                           <a href="<?php echo $site_url.$lang;  ?>/rooms/standard/" class="box-room">
                                           <div class="list-rooms">
                                          
                                          
                                          
                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room1.jpg) no-repeat; background-position: center;   background-size: cover;">
                                            
                                                         <div class="bg_instant"></div>
                                                          <div class="msg">
                                                            <div class="msg_group">
                                                              <span class="msg_top">Phòng Standard</span>
                            
                                                           </div>
                                                        </div>
                                            
                                            </div>
                                            
                                            
                                           


                                            
                                            
                                            <div class="box-room-detail">16.5m<sup>2</sup> – Chiều rộng giường: 1.6m
Đơn giản và dịu nhẹ.<br/>
Thoát khỏi những ồn ả hàng ngày với một căn phòng yên ắng không cửa sổ.</div>
                                             </div></a>
                                                
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-3" >
                                             <a href="<?php echo $site_url.$lang;  ?>/rooms/superior/"  class="box-room">
                                             <div class="list-rooms">
                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room2.jpg) no-repeat; background-position: center;   background-size: cover;">
                                                    
                                                       <div class="bg_instant"></div>
                                                          <div class="msg">
                                                            <div class="msg_group">
                                                              <span class="msg_top">Phòng Superior </span>
                                                          
                                                           </div>
                                                        </div>
                                                        
                                            
                                            </div>
                                            <div class="box-room-detail">16.5m<sup>2</sup> – Bed width: 1.6m<br/>
16.5m<sup>2</sup> – Chiều rộng giường: 1.6m<br/>
Một căn phòng sáng sủa với cửa sổ nhìn về hướng đông.
Sạch sẽ và thoải mái.</div>
                                            </div></a>

                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                           <a href="<?php echo $site_url.$lang;  ?>/rooms/deluxe/"  class="box-room">
                                            <div class="list-rooms">
                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room4.jpg) no-repeat; background-position: center;   background-size: cover;">
                                            
                                                     <div class="bg_instant"></div>
                                                          <div class="msg">
                                                            <div class="msg_group">
                                                              <span class="msg_top">Phòng Deluxe </span>
                                                        
                                                           </div>
                                                        </div>
                                            
                                            </div>
                                            <div class="box-room-detail">
                                            
               20m<sup>2</sup> – Chiều rộng giường: 1.6m<br/>
Một căn phòng sáng sủa với cửa sổ nhìn về phía nam.
Nhẹ nhàng và yên ả.</div></div></a>


                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                            <a href="<?php echo $site_url.$lang;  ?>/rooms/twin/"  class="box-room">
                                             <div class="list-rooms">
                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room3.jpg) no-repeat; background-position: center;   background-size: cover;">
                                            
                                            
                                                      <div class="bg_instant"></div>
                                                          <div class="msg">
                                                            <div class="msg_group">
                                                              <span class="msg_top">Phòng Twin </span>
                                                          
                                                           </div>
                                                        </div>
                                                        
                                            
                                            </div>
                                            <div class="box-room-detail">24m<sup>2</sup> – Chiều rộng giường: 1.6m<br/>
Một căn phòng sáng sủa với cửa sổ nhìn về phía nam.
Phù hợp cho 2 người tìm kiếm sự thoải mái.
</div></div></a>
                                    </div>
                        </div>
                
                
        </div>
    </div>
    <!-- box while end-->
</div>
<?php echo get_template_part('vn/footer'); ?>
</body>
</html>