<?php
	

	
global $post;

$site_url = get_site_url(); ?>
<header>
    <div class="container">
    <!-- header top -->
    <div class="header-top">
        <!-- box left -->
        <div class="box-left">
            <div class="logo"><a href="<?php echo $site_url; ?>/"><img src="<?php echo $site_url; ?>/images/header_logo.png" alt=""><span>Matsunoi Hotel</span></a></div>
        </div>
        <!-- box left end-->
        <!-- box right -->
        <div class="box-right">
            
            
        
        
            <div class="group-contact">
               <div class="container-fluid">
                <div class="contact-top">
                    <div class="row">
                        <div class="col-xs-12.05"><a  href="<?php echo $site_url;  ?>/inquire/" class="btn btn-outline-success "><i class="fas fa-envelope fa-lg"></i>&nbsp;予約・問合せ</a>
                        </div>
                    </div>
                     <div class="row box-tel">
                            <div class="col-xs-12.05"> <a href="tel:02838246068" class="btn btn-success btn-lg"> <i class="fas fa-phone"></i>&nbsp;028-3824-6068<BR>日本または日本の携帯電話から<BR>お電話の場合は、＋84-28-3824-6068</a></div>
                     </div>
                </div>
                
                </div>
                
             </div>
        </div>
        
        
        <div class="group-language">
  				<ul>
  					<li><a href="<?php echo $site_url.$_SERVER['REQUEST_URI']; ?>" title="Japanese"><img src="http://matsunoi.vn/public/assets/images/japan.png" alt="Japanese"></a></li>
  					<li><a href="<?php echo $site_url.'/en'.$_SERVER['REQUEST_URI']; ?>" title="English"><img src="http://matsunoi.vn/public/assets/images/en.png" alt="English"></a></li>
  					<li><a href="<?php echo $site_url.'/vi'.$_SERVER['REQUEST_URI']; ?>" title="Vietnamese"><img src="http://matsunoi.vn/public/assets/images/vietnam.png" alt="Vietnamese"></a></li>
  				</ul>
        </div>
        
        <!-- box right end-->
        <div class="clearfix"></div>
    </div>
    <!-- header top -->
    <!-- menu -->
    <div class="header-bottom">
           <ul>
               <li>
                   <a href="<?php echo $site_url;  ?>/about/" <?php if( $post->ID == 1195) echo ' class="active"  ' ; ?> >
                       <span class="txt-title">松乃井について</span>
                    
                   </a>
               </li>
               <li>
                   <a href="<?php echo $site_url;  ?>/facilities/" <?php if( $post->ID == 1197) echo ' class="active"  ' ; ?> >
                       <span class="txt-title">施設案内・アクセス</span>
                 
                   </a>
               </li>
               <li>
                   <a href="<?php echo $site_url;  ?>/rooms/" <?php if( $post->ID == 1191) echo ' class="active"  ' ; ?> >
                       <span class="txt-title">客室</span>

                   </a>
               </li>

               <li>
                   <a href="<?php echo $site_url;  ?>/hotel-service/" <?php if( $post->ID == 1191) echo ' class="active"  ' ; ?> >
                       <span class="txt-title">ホテルサービス</span>

                   </a>
               </li>


               <li>
                   <a href="<?php echo $site_url;  ?>/sight_seeing/" <?php if( $post->ID == 1212) echo ' class="active"  ' ; ?> >
                       <span class="txt-title">周辺施設</span>
                 
                   </a>
               </li>
               <li>
                   <a href="<?php echo $site_url;  ?>/inquire/" <?php if( $post->ID == 1193) echo ' class="active"  ' ; ?> >
                       <span class="txt-title">予約・問合せ</span>

                   </a>
               </li>

                <li>
                   <a href="<?php echo $site_url;  ?>/faq/" <?php if( $post->ID == 1193) echo ' class="active"  ' ; ?> >
                       <span class="txt-title">よくある質問</span>

                   </a>
               </li>

               <li>
                   <a href="<?php echo $site_url;  ?>/promotion/" <?php if( $post->ID == 1208) echo ' class="active"  ' ; ?> >
                       <span class="txt-title">プロモーション</span>

                   </a>
               </li>
           </ul>
    </div>
    <!-- menu end-->
    </div>
    <div class="clearfix"></div>
    
    
     <div class="nav_mobile"> <a href="#"><span class="glyphicon glyphicon-menu-hamburger  fa fa-bars "></span></a> </div>
</header>