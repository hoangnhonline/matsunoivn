<?php
global $post;

$site_url = get_site_url(); 

$lang = '/en';

?>
<header>
    <div class="container">
    <!-- header top -->
    <div class="header-top">
        <!-- box left -->
        <div class="box-left">
            <div class="logo"><a href="<?php echo $site_url.$lang; ?>/"><img src="<?php echo $site_url; ?>/images/header_logo.png" alt=""><span>Matsunoi Hotel</span></a></div>
        </div>
        <!-- box left end-->
        <!-- box right -->
        <div class="box-right">
            
            
        
        
            <div class="group-contact">
               <div class="container-fluid">
                <div class="contact-top">
                    <div class="row">
                        <div class="col-xs-12"><a  href="<?php echo $site_url.$lang; ?>/inquire/" class="btn btn-outline-success "><i class="fas fa-envelope fa-lg"></i>&nbsp;BOOKING / INQUIRE</a></div>
                    </div>
                     <div class="row box-tel">
                    <div class="col-md-20 col-md-20"> <a href="tel:02838246068" class="btn btn-success btn-lg"> <i class="fas fa-phone"></i>&nbsp;028-3824-6068<BR>When calling from Japan,<BR>please dial ＋84-28-3824-6068</a></div>
                    
                     </div>
                </div>
                </div>
                
             </div>
        </div>
        
        
            <div class="group-language">
						<ul>
								<li><a href="<?php echo $site_url.str_replace('/en/','/',$_SERVER['REQUEST_URI']); ?>" title="Japanese"><img src="http://matsunoi.vn/public/assets/images/japan.png" alt="Japanese"></a></li>
							<li><a href="<?php echo $site_url.$_SERVER['REQUEST_URI']; ?>" title="English"><img src="http://matsunoi.vn/public/assets/images/en.png" alt="English"></a></li>
							<li><a href="<?php echo $site_url.'/vi'.str_replace('/en/','/',$_SERVER['REQUEST_URI']); ?>" title="Vietnamese"><img src="http://matsunoi.vn/public/assets/images/vietnam.png" alt="Vietnamese"></a></li>
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
                   <a href="<?php echo $site_url.$lang; ?>/about/" <?php if( $post->ID == 1239) echo ' class="active"  ' ; ?> >

                       <span class="txt-title">About Us</span>
                   </a>
               </li>
               <li>
                   <a href="<?php echo $site_url.$lang; ?>/facilities/" <?php if( $post->ID == 1248) echo ' class="active"  ' ; ?> >

                       <span class="txt-title">Facility / Access</span>
                   </a>
               </li>
               <li>
                   <a href="<?php echo $site_url.$lang; ?>/rooms/" <?php if( $post->ID == 1273) echo ' class="active"  ' ; ?> >

                       <span class="txt-title">Rooms</span>
                   </a>
               </li>

                <li>
                   <a href="<?php echo $site_url.$lang; ?>/hotel-service/" <?php if( $post->ID == 1273) echo ' class="active"  ' ; ?> >

                       <span class="txt-title">Hotel Service</span>
                   </a>
               </li>


               <li>
                   <a href="<?php echo $site_url.$lang; ?>/sight_seeing/" <?php if( $post->ID == 1262) echo ' class="active"  ' ; ?> >

                       <span class="txt-title">Sightseeing</span>
                   </a>
               </li>
               <li>
                   <a href="<?php echo $site_url.$lang; ?>/inquire/" <?php if( $post->ID == 1254) echo ' class="active"  ' ; ?> >

                       <span class="txt-title">Booking / Inquire</span>
                   </a>
               </li>

                <li>
                   <a href="<?php echo $site_url.$lang; ?>/faq/" <?php if( $post->ID == 1254) echo ' class="active"  ' ; ?> >

                       <span class="txt-title">FAQ</span>
                   </a>
               </li>
               <li>
                   <a href="<?php echo $site_url.$lang; ?>/promotion/" <?php if( $post->ID == 1258) echo ' class="active"  ' ; ?> >

                       <span class="txt-title">Promotion</span>
                   </a>
               </li>
           </ul>
    </div>
    <!-- menu end-->
    </div>
    <div class="clearfix"></div>
    
    
     <div class="nav_mobile"> <a href="#"><span class="glyphicon glyphicon-menu-hamburger  fa fa-bars "></span></a> </div>
</header>