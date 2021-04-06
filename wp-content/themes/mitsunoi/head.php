<?php 
$site_url = get_site_url(); 
?>


<link rel="alternate" href="<?php echo $site_url.str_replace('/vn/','/',$_SERVER['REQUEST_URI']); ?>" hreflang="ja" />
<link rel="alternate" href="<?php echo $site_url.'/en'.str_replace('/vn/','/',$_SERVER['REQUEST_URI']); ?>" hreflang="en" />
<link rel="alternate" href="<?php echo $site_url.'/vi'.str_replace('/vn/','/',$_SERVER['REQUEST_URI']); ?>" hreflang="vi" />

<script>
  WebFontConfig = {
    google: {
      families: [
	  'Sawarabi+Mincho',
        'Roboto'
      ]
    }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
</script>


<!--<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />-->
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/bootstrap.min.css" />
<link type="text/css" rel="preload" href="<?php echo $site_url; ?>/common/css/fontawesome/fontawesome-all.min.css" as="style"  onload="this.rel='stylesheet'" />
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/matsunoi.css?20200121"  media="all"  />
<?php /*<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/en.css?20180518" >
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/vn.css?20180518" > */ ?>
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/smartphone.css?20180518"  media="(max-device-width : 1024px)" />
<!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->




<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/holder/holder.js" ></script>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/jquery.min.js" ></script>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/matsunoi.js?20180518" ></script>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/bootstrap.js?20180518" ></script>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/jquery-migrate.min.js?20180518" ></script>





<?php if($_SERVER['REQUEST_URI'] !='/'){ ?>

<link type="text/css" rel="stylesheet" href="<?php echo $site_url;  ?>/common/js/lightbox2-master/dist/css/lightbox.min.css" />
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/lightbox2-master/dist/js/lightbox.min.js"></script>

<?php } ?>





<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112478049-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112478049-1');
</script>