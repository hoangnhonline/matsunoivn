<?php 
$site_url = get_site_url(); 
?>


<link rel="alternate" href="<?php echo $site_url.str_replace('/vn/','/',$_SERVER['REQUEST_URI']); ?>" hreflang="ja" />
<link rel="alternate" href="<?php echo $site_url.'/en'.str_replace('/vn/','/',$_SERVER['REQUEST_URI']); ?>" hreflang="en" />
<link rel="alternate" href="<?php echo $site_url.'/vi'.str_replace('/vn/','/',$_SERVER['REQUEST_URI']); ?>" hreflang="vi" />

<script>
  function loadCSS(e,n,o,t){"use strict";var d=window.document.createElement("link"),i=n||window.document.getElementsByTagName("script")[0],s=window.document.styleSheets;return d.rel="stylesheet",d.href=e,d.media="only x",t&&(d.onload=t),i.parentNode.insertBefore(d,i),d.onloadcssdefined=function(n){for(var o,t=0;t<s.length;t++)s[t].href&&s[t].href.indexOf(e)>-1&&(o=!0);o?n():setTimeout(function(){d.onloadcssdefined(n)})},d.onloadcssdefined(function(){d.media=o||"all"}),d}
</script>

<script>
  loadCSS('<?php echo $site_url; ?>/common/css/bootstrap.min.css');
</script>
<noscript>
  <link rel="stylesheet" href="<?php echo $site_url; ?>/common/css/bootstrap.min.css" media="all">
</noscript>


<!--<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />-->
<!--<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/bootstrap.min.css" />-->
<link type="text/css" rel="preload" href="<?php echo $site_url; ?>/common/css/fontawesome/fontawesome-all.min.css" />
<script>
  loadCSS('<?php echo $site_url; ?>/common/css/matsunoi.css');
  loadCSS('<?php echo $site_url; ?>/common/css/smartphone.css');
</script>
<noscript>
  <link rel="stylesheet" href="<?php echo $site_url; ?>/common/css/matsunoi.css" media="all">
  <link rel="stylesheet" href="<?php echo $site_url; ?>/common/css/smartphone.css" media="all">
</noscript>

<!--<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/matsunoi.css?20200121"   />-->
<?php /*<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/en.css?20180518" >
<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/vn.css?20180518" > */ ?>
<!--<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>/common/css/smartphone.css?20180518" />-->
<!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
-->
<!-- ใน <head> -->



<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/holder/holder.js"  ></script>
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