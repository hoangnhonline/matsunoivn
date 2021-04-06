<?php 
$site_url = get_site_url(); 	
$page_title = get_field("page_title") ;

  $lang = '/vi';?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>KHUYẾN MÃI | MATSUNOI Khách Sạn Hồ Chí Minh </title>
<meta name="description" content="Tận hưởng dịch vụ của Matsunoi Khách sạn Hồ Chí Minh với giá tốt nhất với các chương trình khuyến mãi và gói đặc biệt cho tất cả các phòng khách sạn tại đây.">

<?php echo get_template_part('vi/head'); ?>
<link rel="canonical" href="http://matsunoi.vn/vi/promotion/">
</head>
<body>
<?php echo get_template_part('vi/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/promotion/top_banner.png');   background-position: center;   background-size: cover;" >
            
            
                     <div class="bg-container">
                                  <div  class="container">                         
                                          <div class="banner-title">KHUYẾN MÃI</div>
                                  </div>
                        </div>
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
 
 <!-- box white-->
    <div class="box-white  pc-p-bottom50">
    
    <div class="container breadcrumb">
              <a href="<?php echo $site_url.$lang; ?>">TRANG CHỦ</a> &nbsp;&gt;  KHUYẾN MÃI
    </div>
    
    <h1 class="title-h1"> KHUYẾN MÃI </h1>

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
<?php echo get_template_part('vi/footer'); ?>
</body>
</html>