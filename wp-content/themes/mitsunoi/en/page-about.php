<?php $site_url = get_site_url();  
$lang = '/en';?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title> ABOUT US | MATSUNOI Hotel Ho Chi Minh </title>
<meta name="keywords" content="Hotel in Ho Chi Minh, Hotel in Vietnam">
<meta name="description" content="MATSUNOI Hotel Ho Chi Minh established in District 1, the center of Ho Chi Minh, Vietnam last November 2017. All services will be served with Japanese quality to create the most comfortable and convenient space for our clients.">
<link rel="canonical" href="http://matsunoi.vn/en/about/" />


<?php echo get_template_part('en/head'); ?>
</head>
<body>
<?php echo get_template_part('en/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/about/top_banner.png');   background-position: center;   background-size: cover;" >
            
                           <div class="bg-container">
                                  <div  class="container">                         
                                          <div class="banner-title">ABOUT US</div>
                                  </div>
                            </div>
            
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
 
 <!-- box white-->
    <div class="box-white  pc-p-bottom50">
    
    <div class="container breadcrumb">
              <a href="<?php echo $site_url.$lang ; ?>">HOME</a>&nbsp;&gt; ABOUT US
    </div>
    
    
        <div class="container">
            
              <h1 class="title-h1">ABOUT US</h1>
              

            <div class="row pc-m-top50" >
                
                <div class="col-xs-6 col-sm-6">
                    <div class="box-detail">
                        <h2 class="title-h3"><span> Matsunoi Hotel in Ho Chi Minh </span> </h2>
                        <div class="text-detail  m-top20">
                            <p>Owning to the rapidly increasing of businessman and travelers, we have established a hotel in district 1 – the center of Ho Chi Minh City from November of 2017. Our mission is to bring into Vietnam the unchanged service from our mainland Japan. Food is well prepared by our Japanese chef bring to our guests the utmost Japanese cuisine experience. Everyone who comes to our hotel will be served the Japanese quality service and can stay comfortably.
</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-6 col-sm-6"> <img src="<?php echo $site_url;  ?>/images/about/vn.png" alt="" /> </div>
                
            </div>
            
            
        </div>
    </div>
    <!-- box white end--> 
 
    <!-- box gray-->
    <div class="box-gray-plain">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <div class="box-detail">
                       <h2 class="title-h3"><span>Matsunoi Hotel in Japan </span></h2>
                        <div class="text-detail  m-top20">
                            <p>It is a hot spring inn with a history of over 60 years in Gunma prefecture. Together with the seasonal scenery, you can enjoy the grace of hot springs which are poured out from nature. Non-pesticide ingredients bring out a reliable and healthy meal. "Safe, fresh, delicious" is our main target. Guests can relax with a variety of saunas, massages and strolling in the Japanese garden as long as enjoy the seasonal cuisine and full buffet. Several meeting rooms and banquet halls are also available so you can use it for group travelers and business people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">  <img src="<?php echo $site_url;  ?>/images/about/jp.png" alt="" /></div>
            </div>
        </div>
    </div>
    <!-- box gray end-->
    
</div>
<?php echo get_template_part('en/footer'); ?>
</body>
</html>