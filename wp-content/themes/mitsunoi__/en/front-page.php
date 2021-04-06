<?php $site_url = get_site_url();  
$lang = '/en';
?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title> MATSUNOI | Booking Ho Chi Minh Hotel </title>
<meta name="keywords" content="Hotel Ho Chi Minh, HCM Hotel, Hotel HCM, Vietnam hotel booking">
<meta name="description" content="MATSUNOI Hotel Ho Chi Minh with a simple interior and a space full of cleanliness offers exceptional relaxation and comfort with warm Japanese style in District 1. It takes 5 minutes to visit the Little Japan in Le Thanh Ton and Thai Van Lung.">
<link rel="canonical" href="http://matsunoi.vn/en/" />

<?php echo get_template_part('en/head'); ?>
</head>
<body>
<?php echo get_template_part('en/header'); ?>
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
            <h1 class="title-h1">MATSUNOI HOTEL HO CHI MINH</h1>
            <div class="txt-content m-top20 txt-center" style="max-width:870px; margin:auto;">
                    Matsunoi Group who specialized in Onsen Ryokan from Gunma Ken, Japan had established a top business hotel in Ho Chi Minh City from November 1<sup>st</sup> 2017.  Our hotel is a non smoking hotel. <br/> 
With a simple interior and a space full of cleanliness will bring you an utmost relaxation. The hotel is recommended for not only for those spending their business trip at but also for those visiting Ho Chi Minh City by sightseeing.
            </div>
        </div>
    </div>
    <!-- box while end-->
    <!-- box gray-->
    <div class="box-gray">
            <div class="container">
                        <h2 class="title-h1">FACILITIES</h2>
                        
                        <div class="group-room-x3 row fac-group">
                                    <div class="col-xs-4 col-sm-4">
                                            <a  class="box_hover" href="<?php echo $site_url.$lang;  ?>/facilities/">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility1.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Despite of favorable and crowed are in central of Ho Chi Minh city, our hotel which is located in a small alley will bring you a pleasant and quiet stay.</div>
                                            </div>
                                            </a>                                            
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                             <a  class="box_hover" href="<?php echo $site_url.$lang;  ?>/facilities/">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility2.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Renovation has been made in November. All of rooms are equipped with bathtub where you can relax and enjoy entirely.</div>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4" >
                                             <a  class="box_hover" href="<?php echo $site_url.$lang;  ?>/facilities/">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility3.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Enjoy handmade breakfast (buffet style) at 9<sup>th</sup> floor with a fine view of morning sun.</div>
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
                <h2 class="title-h1">OUR ROOMS</h2>
                
                <div class="clearfix"></div>
                
                 <div class="group-room-x4 row">
                                    <div class="col-xs-12 col-sm-3">
                                           
                                           <a href="<?php echo $site_url.$lang;  ?>/rooms/standard/" class="box-room">
                                           <div class="list-rooms">
                                          
                                          
                                          
                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room1.jpg) no-repeat; background-position: center;   background-size: cover;">
                                            
                                                         <div class="bg_instant"></div>
                                                          <div class="msg">
                                                            <div class="msg_group">
                                                              <span class="msg_top">Standard</span>
                            
                                                           </div>
                                                        </div>
                                            
                                            </div>
                                            
                                            
                                           


                                            
                                            
                                            <div class="box-room-detail"> 16.5m<sup>2</sup> – Bed width: 1.6m<br/>Simply pleasant.
Escape from noise and busy daylife with a quiet no window room.</div>
                                             </div></a>
                                                
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-3" >
                                             <a href="<?php echo $site_url.$lang;  ?>/rooms/superior/"  class="box-room">
                                             <div class="list-rooms">
                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room2.jpg) no-repeat; background-position: center;   background-size: cover;">
                                                    
                                                       <div class="bg_instant"></div>
                                                          <div class="msg">
                                                            <div class="msg_group">
                                                              <span class="msg_top">Superior</span>
                                                          
                                                           </div>
                                                        </div>
                                                        
                                            
                                            </div>
                                            <div class="box-room-detail">16.5m<sup>2</sup> – Bed width: 1.6m<br/>
Bright room with east facing window.
Comfortable room with clean interior.</div>
                                            </div></a>

                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                           <a href="<?php echo $site_url.$lang;  ?>/rooms/deluxe/"  class="box-room">
                                            <div class="list-rooms">
                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room4.jpg) no-repeat; background-position: center;   background-size: cover;">
                                            
                                                     <div class="bg_instant"></div>
                                                          <div class="msg">
                                                            <div class="msg_group">
                                                              <span class="msg_top">Deluxe</span>
                                                        
                                                           </div>
                                                        </div>
                                            
                                            </div>
                                            <div class="box-room-detail">
                                            
                20m<sup>2</sup> – Bed width: 1.6m<br/>
Bright room facing south. Spacious bath with a bathtub.
Room is full of calm and gentle color.</div></div></a>


                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                            <a href="<?php echo $site_url.$lang;  ?>/rooms/twin/"  class="box-room">
                                             <div class="list-rooms">
                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room3.jpg) no-repeat; background-position: center;   background-size: cover;">
                                            
                                            
                                                      <div class="bg_instant"></div>
                                                          <div class="msg">
                                                            <div class="msg_group">
                                                              <span class="msg_top">Twin</span>
                                                          
                                                           </div>
                                                        </div>
                                                        
                                            
                                            </div>
                                            <div class="box-room-detail">24m<sup>2</sup> – Bed width: 1.2m<br/>
Bright room facing south.
Suitable for those 2 who looking for comfortable relaxation.</div></div></a>
                                    </div>
                        </div>
                
                
        </div>
    </div>
    <!-- box while end-->
</div>
<?php echo get_template_part('en/footer'); ?>
</body>
</html>