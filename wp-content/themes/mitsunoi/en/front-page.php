<?php 

$site_url = get_site_url();  
$lang = '/en';
?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>MATSUNOI Hotel Ho Chi Minh</title>
<meta name="keywords" content="Hotel Ho Chi Minh, HCM Hotel, Hotel HCM, Vietnam hotel booking">
<meta name="description" content="MATSUNOI Hotel Ho Chi Minh with a simple interior and a space full of cleanliness offers exceptional relaxation and comfort with warm Japanese style in District 1. It takes 5 minutes to visit the Little Japan in Le Thanh Ton and Thai Van Lung.">
<link rel="canonical" href="http://matsunoi.vn/en/" />

<?php echo get_template_part('en/head'); ?>

<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/jquery.bxslider.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $site_url;  ?>/common/css/jquery.bxslider.css"  />

<style type="text/css">
.slide-list a{
	    position: absolute;
    bottom: 45%;
	right:40%;
    background-color: #666;
    padding: 40px;
    opacity: 0.8;
	font-family: 'Libre Baskerville', serif;
    font-size: 42px;
	text-transform:uppercase;
}
.bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto{bottom:5px; z-index:100;}
.bx-wrapper .bx-next{right:30px;}
.bx-wrapper .bx-prev{left:30px;}
</style>

<script type="text/javascript">
 jQuery(document).ready(function(){	
		mySlider = jQuery('.bxslider').bxSlider({
			  auto: true,
			  mode: 'fade',
			  speed: 800,
			  pause: 5000,
			  pager: true
});
		
jQuery('.bxslider').hover(function(){
     mySlider.stopAuto();     
	
});
jQuery('.bxslider').mouseleave(function(){
     mySlider.startAuto();        
});

var _height = 0;

 jQuery('.box-group-room .box-room-detail').each( function(){			
		if ( _height < jQuery(this).height()   ){
			   _height   =  jQuery(this).height() ;
	    }					  
});
 
 jQuery('.box-group-room .box-room-detail').height(  _height ) ; });
</script>

<style type="text/css">

.group-mainbanner{ height:600px; }
.group-mainbanner .slide-list{height:600px;}

.bxslider{padding-left:0px; margin-left:0px;}
.bxslider li{padding-left:0px; margin-left:0px;}

.group-slider{position:relative;  margin:auto; max-width:1440px; width:100%; top:-600px;}

.btn-bookbanner{position:absolute; top:30px; right:50px; z-index:200; font-size:24px;  
-webkit-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.75);
padding-left:30px; padding-right:30px;
font-family: "Sawarabi Mincho" !important; 
}


@media only screen and (min-device-width : 320px) and (max-device-width : 767px) {
.bx-wrapper .bx-controls-direction a{display:none;}

.group-slider{ top:-225px;}
.btn-bookbanner{font-size: 18px;
    top: 242px;
    left: 50%;
    margin-left: -120px;
    width: 240px; padding-top:10px; padding-bottom:10px; }
.bx-pager{display:none;}

.group-mainbanner .slide-list{ height:225px;}

.m_ptop80{padding-top:80px;}
}
</style>

</head>
<body>
<?php echo get_template_part('en/header'); ?>
<div id="container">
    <!-- slide box -->
    
     <ul class="group-mainbanner bxslider">
     
          <li class="slidebox " style="background-color:#FFF;">
                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/top_banner.png');    background-position: center;   background-size: cover; max-width:1440px; margin:auto;" ></div>
            </li>
            
             <li class="slidebox " style="background-color:#f6f7e5;">

                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/matsunoi_banner_1_jp.jpg');    background-position: center;   background-size: cover; max-width:1440px; margin:auto;" ><a href="http://matsunoi.vn/en/promotion/">Many promotion now!!! </a>
</div>

            </li>

            

             <li class="slidebox " style="background-color:#97936e;">

                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/matsunoi_banner_2.jpg');    background-position: center;   background-size: cover; max-width:1440px; margin:auto;" ><a href="http://matsunoi.vn/en/promotion/">Many promotion now!!! </a></div>

            </li>

     
         <!-- <li class="slidebox " style="background-color:#f6f7e5;">
                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/banner_1_en.jpg?20200123');    background-position: center;   background-size: cover; max-width:1440px; margin:auto;" ></div>
            </li>
            
             <li class="slidebox " style="background-color:#97936e;">
                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/banner_2_en.jpg?20200123');    background-position: center;   background-size: cover; max-width:1440px; margin:auto;" ></div>
            </li>-->
    </ul>
    
    <div class="group-slider">
    <a href="<?php echo $site_url;  ?>/en/inquire/" class="btn btn-success btn-lg  btn-bookbanner">BOOK NOW</a>
    </div>
    
    
    <!-- slide box end-->
    <!-- box white-->
    <div class="box-white m_ptop80">
        <div class="container">
            <h1 class="title-h1">MATSUNOI HOTEL HO CHI MINH</h1>
            <div class="txt-content m-top20 txt-center" style="max-width:870px; margin:auto;">
                    Matsunoi Group who specialized in Onsen Ryokan from Gunma Ken, Japan had established a top business hotel in Ho Chi Minh City from November 1<sup>st</sup> 2017.  Our hotel is a non smoking hotel. <br/> 
With a simple interior and a space full of cleanliness will bring you an utmost relaxation. The hotel is recommended for not only for those spending their business trip at but also for those visiting Ho Chi Minh City by sightseeing.<br/> 

            </div>
        </div>
    </div>
    <!-- box while end-->
    <!-- box gray-->
    <div class="box-gray">
            <div class="container">
                        <h2 class="title-h1">FACILITY INFORMATION</h2>
                        
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
                <h2 class="title-h1">ROOMS INFORMATION</h2>
                
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
<div class="container">

        </div>
    </div>
   </div>
    </div>
    <!-- box while end-->
</div>
<?php echo get_template_part('en/footer'); ?>
</body>
</html>