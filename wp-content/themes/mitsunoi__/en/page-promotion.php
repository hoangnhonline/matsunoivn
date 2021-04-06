<?php 
$site_url = get_site_url(); 	
$page_title = get_field("page_title") ;

  $lang = '/en';?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>OUR PROMOTION | MATSUNOI Ho Chi Minh Business Hotel </title>
<meta name="keywords" content="Vietnam hotel booking, Booking hotel in HCM, Booking Hotel in Ho Chi Minh, Saigon Hotel booking">
<meta name="description" content="Enjoying Matsunoi Hotel Ho Chi Minh services with best price and finding all promotions and special packages on hotel rooms here.">
<link rel="canonical" href="http://matsunoi.vn/en/promotion/" />


<?php echo get_template_part('en/head'); ?>
</head>
<body>
<?php echo get_template_part('en/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/promotion/top_banner.png');   background-position: center;   background-size: cover;" >
            
                         <div class="bg-container">
                                  <div  class="container">                         
                                          <div class="banner-title">OUR PROMOTION</div>
                                  </div>
                            </div>
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
 
 <!-- box white-->
    <div class="box-white  pc-p-bottom50">
    
    <div class="container breadcrumb">
              <a href="<?php echo $site_url.$lang; ?>">HOME</a>&nbsp;&gt;  OUR PROMOTION
    </div>
      <h1 class="title-h1">OUR PROMOTION</h1>
    
        <div class="container">
            
 
              
              <div class="m-top30">
              
            
<?php 
 
 while ( have_posts() ) : the_post();
 
 	$cc = str_replace( 'images/', $get_site_url.'/images/', get_the_content());
 	$content = do_shortcode(str_replace( '<p>&nbsp;</p>', '<br/>', $cc),true);
 	echo wpautop($content);
 
 endwhile;
 
?>
              </div>
            
            
        </div>
    </div>
    <!-- box white end--> 
</div>
<?php echo get_template_part('en/footer'); ?>
</body>
</html>