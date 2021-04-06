<?php $site_url = get_site_url(); $lang = '/vi';?>

<!DOCTYPE html>

<html>

<head>

<meta name = "format-detection" content = "telephone=no" />

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >

<title>Các điểm tham quan nên đến gần khách sạn| MATSUNOI Khách Sạn Hồ Chí Minh </title>

<meta name="description" content="Danh sách các dịch vụ mà quý khách có thể sử dụng tại khách sạn Matsunoi Hồ Chí Minh như phục vụ  bữa sáng, dịch vụ đưa đón sân bay, thuê xe, phiên dịch,spa...">



<?php echo get_template_part('vi/head'); ?>
<style>
#link{
position: absolute;
    bottom: 43%;
    /* right: 50%; */
    background-color: #666;
    padding: 28px;
    opacity: .8;
    font-family: 'Roboto',serif;
    font-size: 35px;
}

@media only screen and (max-device-width: 767px) and (min-device-width: 320px)
{
#link {
    background-color: #666;
    padding: 8px;
    opacity: .8;

    font-size: 18px;
    /* top: 33%; */
     font-family: 'Roboto',serif;
    bottom: 55%;

}
}
</style>
</head>

<body>

<?php echo get_template_part('vi/header'); ?>

<div id="container">

    <!-- slide box -->

    <div class="group-subbanner">

        <div class="slidebox">

            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/seeing/top_banner.png');   background-position: center;   background-size: cover;" >

            

                         <div class="bg-container">

                                  <div  class="container">                         
 <div id="link"><a href="/vi/facilities/">TIỆN NGHI VÀ ĐI ĐẾN</a></div>            
                                          <div class="banner-title"><center>CÁC ĐIỂM THAM QUAN NÊN ĐẾN <BR>GẦN KHÁCH SẠN</div>

                                  </div>

                            </div>

            

            

            </div>

        </div>

    </div>

    <!-- slide box end-->

    <!-- box gray-->

    <div class=" box-white">

    

    <div class="container breadcrumb">

              <a href="<?php echo $site_url; ?>/vi/">ホーム</a> &nbsp;&gt; CÁC ĐIỂM THAM QUAN NÊN ĐẾN GẦN KHÁCH SẠN</div>

    

    

   

     <div class="container m-top40">

         <h1 class="title-h1">CÁC ĐIỂM THAM QUAN NÊN ĐẾN GẦN KHÁCH SẠN</h1>

           <div class="txt-content m-top20 txt-center"> Đây là các điểm tham quan nên đến tại Thành phố Hồ Chí Minh.<br>



Vì có nhiều địa điểm du lịch khác ở thành phố Hồ Chí Minh,<br>

Xin vui lòng liên hệ với nhân viên của Matsunoi để biết thêm chi tiết.

</div>

        <div class="group-room-x3 row">

                                    <div class="col-xs-4 col-sm-4  m-top20">

                                            <a  class="box_hover" href="tourist_spot">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/007.png) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">Các điểm tham quan nên đến

</div>

                                            </div>

                                            </a>                                            

                                    </div>

                                    <div class="col-xs-4 col-sm-4 m-top20">

                                             <a  class="box_hover" href="restaurant">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/restaurant.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">Các nhà hàng nên đến gần khách sạn</div>

                                            </div>

                                            </a>

                                    </div>

                                    <div class="col-xs-4 col-sm-4 m-top20" >

                                             <a  class="box_hover" href="shopping">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/shopping.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">Các điểm mua sắm nên đến gần khách sạn

</div>

                                           </div>

                                           </a>

                                    </div>

                                           <div class="col-xs-4 col-sm-4 m-top20" >

                                             <a  class="box_hover" href="cafe">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/cafe.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">Các quán cafe nên đến gần khách sạn

</div>

                                           </div>

                                           </a>

                                    </div>

                                           <div class="col-xs-4 col-sm-4 m-top20" >

                                             <a  class="box_hover" href="bar">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/bar.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">Các quán bar nên đến gần khách sạn

</div>

                                           </div>

                                           </a>

                                    </div>

                        </div>

                        </div>

    </div>

    <!-- box gray end-->

    <!-- box white-->

    <!-- box white end-->

    



   

</div>

<?php echo get_template_part('vi/footer'); ?>

</body>

</html>