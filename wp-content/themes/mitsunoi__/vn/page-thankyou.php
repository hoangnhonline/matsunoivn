<?php 
$site_url = get_site_url(); 	
$page_title = get_field("page_title") ;
?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>THANK YOU | Ho Chi Minh City Khách Sạn Business MATSUNOI</title>
<?php echo get_template_part('vn/head'); ?>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-820737226/-6U2CPnAnHsQyumthwM'});
</script>
</head>
<body>
<?php echo get_template_part('vn/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/inquire/top_banner.png');   background-position: center;   background-size: cover;" >
            
                      <div class="bg-container">
                                      <div  class="container">                         
                                              <div class="banner-title">CÁM ƠN</div>
                                      </div>
                            </div>
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
 
 <!-- box white-->
    <div class="box-white  pc-p-bottom50">
    
    
    <div class="container breadcrumb">
              <a href="<?php echo $site_url.$lang ; ?>">HOME</a> &nbsp;&gt; CÁM ƠN
    </div>
    
        <div class="container">
        
    
        
        
            
              <h1 class="title-h1"><?php echo $page_title; ?></h1>
              
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
<?php echo get_template_part('vn/footer'); ?>
			
<script>
  gtag('event', 'conversion', {'send_to': 'AW-820737226/-6U2CPnAnHsQyumthwM'});
</script>
</body>
</html>