<?php $site_url = get_site_url(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title> Recommended sightseeing spots near hotel |  MATSUNOI Hotel Ho Chi Minh </title>
<meta name="keywords" content="Ho Chi Minh hotel, Saigon Hotel, Hotel in Ho Chi Minh, Hotel in Saigon">
<meta name="description" content="Matsunoi Hotel Ho Chi Minh is located in the central business district of HCM. It takes only few minutes for visiting most popular attractions such as Puppet theater, Unification Palace, Saigon Notre-dame Cathedral, Opera house, Saigon Post Office, department store and souvenir shop...">

<link rel="canonical" href="http://matsunoi.vn/en/sight_seeing/" />


<?php echo get_template_part('en/head'); ?>
<style>
.group-subbanner .container .banner-title {
	font-size:45px;
}
@media only screen and (min-device-width : 320px) and (max-device-width : 767px) {
.group-subbanner .container .banner-title {
	font-size:unset;
}
}
</style>
</head>
<body>
<?php echo get_template_part('en/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
           <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/seeing/top_banner.png');   background-position: center;   background-size: cover;" >
            
                         <div class="bg-container">
                                  <div  class="container">                         
                                          <div class="banner-title"><center>RECOMMENDED SIGHTSEEING SPOTS <br>NEAR HOTELM</center></div>
                                  </div>
                            </div>
            
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
    <!-- box gray-->
    <div class=" box-white">
    
    <div class="container breadcrumb">
              <a href="<?php echo $site_url.'/'.$lang ; ?>">HOME</a>&nbsp;&gt; RECOMMENDED SIGHTSEEING SPOTS NEAR HOTEL
    </div>
    
    
        
     <div class="container m-top40">
      <h1 class="title-h1">RECOMMENDED SIGHTSEEING SPOTS NEAR HOTEL</h1>
         <div class="txt-content m-top20 txt-center">Here are some recommended spots in Ho Chi Minh City.<br>

As there are many other tourist attractions in Ho Chi Minh City,<br>
please feel free to contact Matsunoi staff.

</div>
        <div class="group-room-x3 row">
                                    <div class="col-xs-4 col-sm-4  m-top20">
                                            <a  class="box_hover" href="<?php echo $site_url;  ?>/en/sight_seeing/tourist_spot">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/007.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Recommend sightseeing</div>
                                            </div>
                                            </a>                                            
                                    </div>
                                    <div class="col-xs-4 col-sm-4 m-top20">
                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/en/sight_seeing/restaurant">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/restaurant.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Recommend restaurant near hotel</div>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 m-top20" >
                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/en/sight_seeing/shopping">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/shopping.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Recommend shopping near hotel</div>
                                           </div>
                                           </a>
                                    </div>
                                           <div class="col-xs-4 col-sm-4 m-top20" >
                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/en/sight_seeing/cafe">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/cafe.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Recommend cafe near hotel</div>
                                           </div>
                                           </a>
                                    </div>
                                           <div class="col-xs-4 col-sm-4 m-top20" >
                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/en/sight_seeing/bar">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/bar.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Recommend bar near hotel</div>
                                           </div>
                                           </a>
                                    </div>
                        </div>
                        </div>
    </div>
    <!-- box gray end-->
    <!-- box white-->
    <!-- box white end-->
    

   
</div>
<?php echo get_template_part('en/footer'); ?>
</body>
</html>