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
<title>プロモーション | ホーチミン ビジネスホテル MATSUNOI</title>
<meta name="description" content="ベトナム　ホーチミン市１区にあるMATSUNOIホテルでは宿泊料金が10％割引になるフェイスブック「いいね」キャンペーンを実施中！その他、お得なキャンペーンも掲載しております。" />
<?php echo get_template_part('head'); ?>
</head>
<body>
<?php echo get_template_part('header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/promotion/top_banner.png');   background-position: center;   background-size: cover;" >
            
                         <div class="bg-container">
                                  <div  class="container">                         
                                          <div class="banner-title"><?php echo $page_title; ?> </div>
                                  </div>
                            </div>
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
 
 <!-- box white-->
    <div class="box-white  pc-p-bottom50">
    
    <div class="container breadcrumb">
              <a href="<?php echo $site_url; ?>">ホーム</a> &nbsp;&gt; <?php echo $page_title; ?> 
    </div>
    
    <h1 class="title-h1"> プロモーション </h1>
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
<?php echo get_template_part('footer'); ?>
</body>
</html>