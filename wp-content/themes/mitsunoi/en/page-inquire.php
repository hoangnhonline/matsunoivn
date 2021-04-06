<?php $site_url = get_site_url(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title> INQUIRY |  MATSUNOI Hotel Ho Chi Minh </title>
<meta name="keywords" content="Vietnam hotel booking, Ho Chi Minh hotel booking, booking hotel in HCM">
<meta name="description" content="Business and leisure guests can find Matsunoi Hotel Ho Chi Minh booking in detail and can also send any general enquiries directly to us on this page.">
<link rel="canonical" href="http://matsunoi.vn/en/inquire/" />



<?php echo get_template_part('en/head'); ?>
</head>
<body>
<?php echo get_template_part('en/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/inquire/top_banner.png');   background-position: center;   background-size: cover;" >
            
                         <div class="bg-container">
                                  <div  class="container">                         
                                          <div class="banner-title">RESERVATION AND INQUIRY</div>
                                  </div>
                            </div>
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
 
 <!-- box white-->
    <div class="box-white  pc-p-bottom50">
    
   <div class="container breadcrumb">
              <a href="<?php echo $site_url.$lang ; ?>">HOME</a>&nbsp;&gt; RESERVATION AND INQUIRY
    </div>
    
    
    
        <div class="container">
            
              <h1 class="title-h1">RESERVATION AND INQUIRY</h1>
              
              <div class="text-contact ">
              <p class="text-center">If you have any questions, please contact us from the form below.<br/>
Please fill in each column and click the send button. <br/>


</p>
</div>

                <div class="m-top20 text-center"><a href="tel:02838246068"><img src="<?php echo $site_url;  ?>/images/inquire/sub_banner_en_v2.png" alt="" /></a></div>
              
         
              <!-- contact form -->
             
              <div class="form-inquire">
              <div class="row">
              
    <div class="col-xs-12 col-sm-12">
      
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
              <!-- contact form end-->
              
      

    
<link type="text/css" rel="stylesheet" href="<?php echo $site_url;  ?>/common/js/jquery-ui/jquery-ui.structure.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $site_url;  ?>/common/js/jquery-ui/jquery-ui.theme.min.css" />
<style type="text/css">
.wpcf7-select{ padding: 5px 15px; margin-top:2px; 
border: 1px solid #ced4da;
border-radius: .25rem;
}
.hasDatepicker{margin-top:2px;}

.form-inquire .wpcf7-text{padding-top:7px; padding-bottom:7px;}
.wpcf7-textarea{  border: 1px solid #ced4da;
border-radius: .25rem; padding:5px 12px;}

input[type="date"]
{
    display:block;
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    min-height: 1.2em;
}



-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
</style>
<script type="text/jscript" src="<?php echo $site_url;  ?>/common/js/jquery-ui/jquery-ui.js" ></script>


<script type="text/javascript">
$(document).ready(
	function(){
		
		 $.datepicker.regional['ja'] = { dateFormat: 'yy-mm-dd'};
		
		
        $.datepicker.setDefaults($.datepicker.regional['ja']);
		
		
		    $('input[name="date_from"]').on('focus', function() { $(this).blur(); });
	       $('input[name="date_from"]').on("click", function(e) {    e.preventDefault();  });
				   
		   $('input[name="date_to"]').on('focus', function() { $(this).blur(); });
	       $('input[name="date_to"]').on("click", function(e) {    e.preventDefault();  });
		
		
			$('input[name="date_from"]').datepicker({ minDate: new Date()});		   
			$('input[name="date_to"]').datepicker({minDate: new Date()});		
									   
    }
);
</script>
              
        
        
        
            
            
            
        </div>
    </div>
    <!-- box white end--> 
    
    
    
   <!-- box gray -->
   <div class="box-gray-plain">
   
  <div class="container">
   <h2 class="title-h3"><span>Access</span> </h2>
   
   <div class="block block-map">
								<object class="map" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.446714668741!2d106.70293195081287!3d10.777057692283382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4670702e31%3A0xa5777fb3853e32ec!2sMatsunoi+Hotel!5e0!3m2!1svi!2s!4v1508120390105"></object>								
							
                            
                            
                            
                               <div class="row" style="padding-top:20px;">
                                  

                               <div class="container m-top40">
            <div class="row">
 <div class="col-xs-12 col-sm-6 ">
                                        <img src="http://matsunoi.vn/wp-content/uploads/2019/11/MAP.png" alt="" style="max-width:100%; height:auto;" />
</div>
                              <div class="col-xs-12 col-sm-6 ">
                                
                                <div style="display:table; height:100%;">
                                <div class="text-detail  m-top20">
                                   <p style="margin-top:25px;"  ><span class="txt-red">※</span>About 20 – 30 minutes by taxi (contingent on traffic condition). <br/><span class="space">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>It cost approximately from 200.000 VND to 250.000 VND.</p>
                             
</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<div class="row" style="padding-top:20px;">
<div class="container m-top40">
            <div class="row">
 <div class="col-xs-12 col-sm-6 ">
                                        <img src="http://matsunoi.vn/wp-content/uploads/2019/11/DSCN0428-1.jpg" alt="" style="max-width:100%; height:auto;" />


</div>

<div class="col-xs-12 col-sm-6 ">
                                
                                <div style="display:table; height:100%;">
                                <div class="text-detail  m-top20">
                                                          
                                   <p style="margin-top:0px;"> <span class="txt-red">※</span>There is a green arch on Dong Du street.</p>

</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>






<div class="row" style="padding-top:20px;">
<div class="container m-top40">
            <div class="row">
 <div class="col-xs-12 col-sm-6 ">
                                        <img src="http://matsunoi.vn/wp-content/uploads/2019/11/DSCN0433.jpg" alt="" style="max-width:100%; height:auto;" />


</div>

<div class="col-xs-12 col-sm-6 ">
                                
                                <div style="display:table; height:100%;">
                                <div class="text-detail  m-top20">
                                                          
                                   <p style="margin-top:0px;"> <span class="txt-red">※</span>You will see our hotel 30M ahead of the arch.</p>

</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>





<div class="container m-top40">
            <div class="row">

                            
                            
                            
                       

                                  </div></div>

                                   </div>
                                 
                                 
                            </div>
                            
                            
                            
                            
                          
     </div>
   
   
     
   </div>
   
   </div>
   <!-- box gray end-->
 
    
    
</div>
<?php echo get_template_part('en/footer'); ?>
</body>
</html>