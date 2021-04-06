<?php 
$site_url = get_site_url(); 
?>


<link rel="alternate" href="<?php echo $site_url.str_replace('/vn/','/',$_SERVER['REQUEST_URI']); ?>" hreflang="ja" />
<link rel="alternate" href="<?php echo $site_url.'/en'.str_replace('/vn/','/',$_SERVER['REQUEST_URI']); ?>" hreflang="en" />
<link rel="alternate" href="<?php echo $site_url.$_SERVER['REQUEST_URI']; ?>" hreflang="vi" />




<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/fontawesome/fontawesome-all.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/matsunoi.css?20200121"   />
<?php /*<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/en.css?20180518" >
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/vn.css?20180518" > */ ?>
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/smartphone.css?20180518" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 




<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/holder/holder.js" ></script>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/jquery.min.js" ></script>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/matsunoi.js?20180518" ></script>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/bootstrap.js?20180518" ></script>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/jquery-migrate.min.js?20180518" ></script>





<link type="text/css" rel="stylesheet" href="<?php echo $site_url;  ?>/common/js/lightbox2-master/dist/css/lightbox.min.css" />
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/lightbox2-master/dist/js/lightbox.min.js"></script>





<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112478049-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112478049-1');
</script>