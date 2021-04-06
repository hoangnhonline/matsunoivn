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
<title>MATSUNOI HOTEL HO CHI MINH </title>
<?php echo get_template_part('head'); ?>

<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var yahoo_conversion_id = 1001025738;
    var yahoo_conversion_label = "c1ZrCJGLu4gBEOHk7_gC";
    var yahoo_conversion_value = 0;
    /* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1001025738/?value=0&label=c1ZrCJGLu4gBEOHk7_gC&guid=ON&script=0&disvt=true"/>
    </div>
</noscript>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-820737226/-6U2CPnAnHsQyumthwM'});
</script>
</head>
<body>
<?php echo get_template_part('header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/inquire/top_banner.png');   background-position: center;   background-size: cover;" >
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
              <a href="<?php echo $site_url; ?>">ホーム</a> &nbsp;&gt; <?php echo $page_title; ?>
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
<?php echo get_template_part('footer'); ?>
			
</body>
</html>