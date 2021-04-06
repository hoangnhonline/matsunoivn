<?php $site_url = get_site_url(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name = "format-detection" content = "telephone=no" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >
<title>ホーチミン市内おすすめ観光名所| Matsunoi-ホーチミン おすすめビジネスホテル</title>
<meta name="description" content="Matsunoiホテルは、ベトナムで人気の日系ビジネスホテル。ホーチミン１区の中心地にあるので、ホーチミンの有名な観光スポットや施設へのアクセスも抜群です。" />
<?php echo get_template_part('head'); ?>
<link rel="canonical" href="http://matsunoi.vn/sight_seeing/" />
<style>
#link{
position: absolute;
    bottom: 43%;
    /* right: 50%; */
    background-color: #666;
    padding: 28px;
    opacity: .8;
    font-family: "Sawarabi Mincho";
    font-size: 35px;
}

@media only screen and (max-device-width: 767px) and (min-device-width: 320px)
{
#link {
 position: absolute;
  
    right: 50%;
    background-color: #666;
    padding: 8px;
    opacity: .8;
    font-family: "Sawarabi Mincho";
    font-size: 18px;
}
}
</style>
</head>
<body>
<?php echo get_template_part('header'); ?>
<div id="container">
    <!-- slide box -->
    <div class="group-subbanner">
        <div class="slidebox">
            <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/seeing/top_banner.png');   background-position: center;   background-size: cover;" >
            
                         <div class="bg-container">
                                  <div  class="container">    
                                         <div id="link"><a href="/facilities/">施設案内・アクセス</a></div>                         
                                          <div class="banner-title">観光名所</div>
                                  </div>
                            </div>
            
            
            </div>
        </div>
    </div>
    <!-- slide box end-->
    <!-- box gray-->
    <div class=" box-white">
    
    <div class="container breadcrumb">
              <a href="<?php echo $site_url; ?>">ホーム</a> &nbsp;&gt; 観光名所
    </div>
    
           <div class="container">
       <h1 class="title-h1">ホーチミン市内、おすすめ観光名所 </h1>
     <div class="txt-content m-top20 txt-center"><a href="http://matsunoi.vn/">松乃井</a>は、ホーチミンでおすすめ日系ビジネスホテルです。<br>

ホテルの周辺には沢山のおすすめ観光スポットが御座いますので、お気軽にスタッフまでお申し付け下さい。
</div>
     <div class="m-top40">
        <div class="group-room-x3 row">
                                    <div class="col-xs-4 col-sm-4  m-top20">
                                            <a  class="box_hover" href="<?php echo $site_url;  ?>/sight_seeing/tourist_spot">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/007.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">ホテル周辺おすすめ観光スポット</div>
                                            </div>
                                            </a>                                            
                                    </div>
                                    <div class="col-xs-4 col-sm-4 m-top20">
                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/sight_seeing/restaurant">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/restaurant.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">ホテル周辺おすすめレストラン</div>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 m-top20" >
                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/sight_seeing/shopping">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/shopping.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">ホテル周辺おすすめショッピング</div>
                                           </div>
                                           </a>
                                    </div>
                                           <div class="col-xs-4 col-sm-4 m-top20" >
                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/sight_seeing/cafe">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/cafe.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">ホテル周辺おすすめカフェ</div>
                                           </div>
                                           </a>
                                    </div>
                                           <div class="col-xs-4 col-sm-4 m-top20" >
                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/sight_seeing/bar">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/seeing/bar.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">ホテル周辺おすすめバー</div>
                                           </div>
                                           </a>
                                    </div>
                        </div>
                        </div>
                        </div>
    </div>
    <!-- box gray end-->
    <!-- box white-->
    <!-- box white end-->
    

   
</div>
<?php echo get_template_part('footer'); ?>
</body>
</html>