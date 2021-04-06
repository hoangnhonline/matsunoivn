<?php $site_url = get_site_url();  

$lang = '/vi';?>

<!DOCTYPE html>

<html>

<head>

<meta name = "format-detection" content = "telephone=no" />

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >

<title> VỀ CHÚNG TÔI | MATSUNOI Khách Sạn Hồ Chí Minh </title>

<meta name="description" content="MATSUNOI Khách Sạn Hồ Chí Minh được thành lập vào tháng 11 năm 2017 tại Quận 1, trung tâm thành phố HCM. Tất cả các dịch vụ sẽ được phục vụ với chất lượng từ Nhật Bản tạo ra không gian thoải mái và tiện nghi nhất cho khách hàng của chúng tôi.">



<?php echo get_template_part('vi/head'); ?>

</head>

<body>

<?php echo get_template_part('vi/header'); ?>

<div id="container">

    <!-- slide box -->

    <div class="group-subbanner">

        <div class="slidebox">

            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/about/top_banner.png');   background-position: center;   background-size: cover;" >

                    

                    <div class="bg-container">

                                  <div  class="container">                         

                                          <div class="banner-title">VỀ CHÚNG TÔI</div>

                                  </div>

                    </div>

            

            </div>

        </div>

    </div>

    <!-- slide box end-->

 

 <!-- box white-->

    <div class="box-white  pc-p-bottom50">

    

    <div class="container breadcrumb">

              <a href="<?php echo $site_url.$lang ; ?>">TRANG CHỦ</a> &nbsp;&gt; VỀ CHÚNG TÔI

    </div> 



    

    

        <div class="container">

            

              <h1 class="title-h1">VỀ CHÚNG TÔI</h1>

              



            <div class="row pc-m-top50" >

                

                <div class="col-xs-6 col-sm-6">

                    <div class="box-detail">

                        <h2 class="title-h3"><span>Về khách sạn Matsunoi thành phố Hồ Chí Minh</span> </h2>

                        <div class="text-detail  m-top20">

                            <p>Với sự gia tăng không ngừng của khách du lịch cũng như các khách đi công tác thời gian gần đây, chúng tôi đã khai trương một khách sạn tại trung tâm thành phố Hồ Chí Minh vào tháng 11 năm 2017. Khách sạn chúng tôi hoạt động với tiêu chí mang một trải nghiệm Nhật Bản đến với đất nước Việt Nam. Bạn có thể tận hưởng một bữa ăn mang đậm chất lượng và phong cách Nhật Bản được chuẩn bị bởi đầu bếp người Nhật của chúng tôi cũng như được phục vụ theo một phong cách mang chất lượng Nhật Bản.</p>

                        </div>

                    </div>

                </div>

                

                <div class="col-xs-6 col-sm-6"> <img src="<?php echo $site_url;  ?>/images/about/vn.png" alt="" /> </div>

                

            </div>

            

            

        </div>

    </div>

    <!-- box white end--> 

 

    <!-- box gray-->

    <div class="box-gray-plain">

        <div class="container">

            <div class="row">

                <div class="col-xs-6 col-sm-6">

                    <div class="box-detail">

                        <h2 class="title-h3"><span>Về Matsunoi Nhật Bản</span></h2>

                        <div class="text-detail  m-top20">

                            <p>Matsunoi Nhật Bản là một resort truyền thống với lịch sử hơn 60 năm tại tỉnh Gunma, Nhật Bản. Tại đây bạn có thể tận hưởng những suối nước nóng tự nhiên cùng cảnh quan tuyệt đẹp. Bữa ăn luôn được chế biến với thức ăn tự nhiên và không sử dụng thuốc trừ sâu. Khách tìm đến với resort có thể tận hưởng những buổi dạo chơi trong khuôn viên vườn, dịch vụ sauna, massage hay những bữa buffet với đầy ấp thức ăn.</p>

                        </div>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-6">  <img src="<?php echo $site_url;  ?>/images/about/jp.png" alt="" /></div>

            </div>

        </div>

    </div>

    <!-- box gray end-->

    

</div>

<?php echo get_template_part('vi/footer'); ?>

</body>

</html>