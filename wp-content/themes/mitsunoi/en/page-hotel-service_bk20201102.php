<?php $site_url = get_site_url();  
$lang = '/en';?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title> HOTEL - SERVICE | MATSUNOI Hotel Ho Chi Minh </title>
<meta name="keywords" content="Hotel in Ho Chi Minh, Hotel in Vietnam">
<meta name="description" content="MATSUNOI Hotel Ho Chi Minh provides many services like airport transfer service, rental car, spa, massage, translation... that will make your staying at our hotel become more comfortable.">
<link rel="canonical" href="http://matsunoi.vn/en/hotel-service/" />


<?php echo get_template_part('en/head'); ?>
<style>
.tab-sv th {
	color:#8cb851;
	padding-left:5px;
}

.tab-sv th span{
	font-weight:normal;
	color:#666;
}
@media only screen and (min-device-width : 320px) and (max-device-width : 767px) {
	.tab-sv th {
    width: 30%;
	}
	.tab-sv td {
    padding: 5px 5px;
}
}

</style>
</head>
<body>
<?php echo get_template_part('en/header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/top-hotel-service.jpg');   background-position: center;   background-size: cover;" >
            
                           <div class="bg-container">
                                  <div  class="container">                         
                                          <div class="banner-title">HOTEL SERVICE</div>
                                  </div>
                            </div>
            
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
 
 <!-- box white-->
    <div class="box-white  pc-p-bottom50">
    
        <div class="container breadcrumb">
                  <a href="<?php echo $site_url.$lang ; ?>">HOME</a>&nbsp;&gt;  HOTEL SERVICE
        </div>
    
    
        <div class="container">
            
            <h1 class="title-h1">HOTEL SERVICE</h1>

            <div class="container-tab">

                <table class="tab-sv" border="1" style="width:100%;margin-bottom: 30px;">
          <tr>
          <th>[Airport transfer service]</th>
            <td>Airport 〜 hotel 400,000VND/1 vehicle　　　   Hotel 〜 Airport  300,000VND/1 vehicle<br>

＊If you would like to make a reservation, please inform us your flight number and the full name of the passenger in advance. 　</td>
          </tr>
          <tr>
            <th>[Photocopy] <br>
<span> A4 size only</span></th>
            <td>Black & white photocopy 2.000 VND/1 page　　Under 5 copies are free<br>

Color 10.000 VND/1 page</td>
          </tr>
           <th>[Telephone]</th>
            <td>International call 20.000 VND/1 minute　        Vietnam domestic call 5.000 VND/1 minute</td>
          <tr>
            <th>[Laundry]</th>
            <td>Please put the application form and clothes in laundry bag in your room and bring it to reception.<br>

●Regular service: Laundry sent by 11:00 am will be returned at 11:00 of next day.<br>
●Express service: Laundry sent by 08:00 am will be returned at 18:00 pm of same day. And it will be charged 50% extra.<br>
＊For details of fee, please contact info@matsunoi.vn</td>
          </tr>
          
          <tr>
            <th>[Drink]</th>
            <td>Serving at the reception</td>
          </tr>
          
          <tr>
          <th>[Rental car] 　</th>
            <td>Please register at the reception date of using *Fee is from 70USD/day.</td>
          </tr>
          
          <tr>
        <th>[Tour]</th>
            <td>Please register at the reception.</td>
          </tr>
          
          <tr>
           <th>[Spa/Massage]</th>
            <td>Please register at the reception.</td>
          </tr>
          
          <tr>
         <th>[Translation] </th>
            <td>Please register at the reception date of using, which kind of translation you would like to use.<br>

*Sightseeing guide from 100USD/day, business translation from 150USD/da</td>
          </tr>
          
          <tr>
                <th>[Other services] </th>
            <td>Please register at the reception.</td>
          </tr>
          
          <tr>
               <th>[Breakfast]</th>
            <td>From 6 am to 10 am at the restaurant on the 9th floor (Last reception at 9:30am) For early departure, we would like to serve onigiri (rice balls) or sandwiches. 
<span style="text-decoration:underline;">Please notice at least one day in advance.</span></td>
         </tr>
        </table>

           
            </div>   
        </div>
    </div>
    <!-- box gray end-->
    <style>
    .tab-sv td {
        padding: 5px 30px;
    }
</style>
</div>
<?php echo get_template_part('en/footer'); ?>
</body>
</html>