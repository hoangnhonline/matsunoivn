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
<title> MATSUNOI Khách Sạn Hồ Chí Minh </title>
<meta name="description" content="MATSUNOI Khách Sạn Hồ Chí Minh với thiết kế nội thất đơn giản và không gian yên tĩnh sẽ mang lại sự thư giãn và thoải mái đặc biệt với phong cách Nhật Bản ấm áp giữa trái tim thành phố. Chỉ mất 5 phút để đến khu Little Japan ở Lê Thánh Tôn và Thái Văn Lung.">

<?php echo get_template_part('vi/head'); ?>
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
                                          <div class="banner-title"><?php echo $page_title; ?></div>
                                  </div>
                    </div>
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
 
 <!-- box white-->
    <div class="box-white  pc-p-bottom50">
    
    <div class="container breadcrumb">
              <a href="<?php echo $site_url.$lang; ?>">HOME</a> &nbsp;&gt; <?php echo $page_title; ?> 
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
<?php echo get_template_part('vi/footer'); ?>
</body>
</html>