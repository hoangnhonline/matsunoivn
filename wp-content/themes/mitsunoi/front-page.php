<?php $site_url = get_site_url(); ?>

<!DOCTYPE html>

<html>

<head>

<meta name = "format-detection" content = "telephone=no" />

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, user-scalable=yes" >

<title>ホーチミン・1区のビジネスホテル MATSUNOI</title>

<meta name="description" content="ベトナムはホーチミン市の中心地1区にございますビジネスホテルMATSUNOIです。日本語の出来るスタッフが常駐してお客様のお越しをお待ちしております。日本人街レタントン通りより徒歩5分。" />

<?php echo get_template_part('head'); ?>









<style type="text/css">
.box-group-room {
    margin-bottom: 30px;
}
.bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto{bottom:5px; z-index:100;}

.bx-wrapper .bx-next{right:30px;}

.bx-wrapper .bx-prev{left:30px;}

</style>



<script type="text/javascript">

 jQuery(document).ready(function(){	

		mySlider = jQuery('.bxslider').bxSlider({

			  auto: true,

			  mode: 'fade',

			  speed: 800,

			  pause: 5000,

			  pager: true

});

		

jQuery('.bxslider').hover(function(){

     mySlider.stopAuto();     

	

});

jQuery('.bxslider').mouseleave(function(){

     mySlider.startAuto();        

});



var _height = 0;



 jQuery('.box-group-room .box-room-detail').each( function(){			

		if ( _height < jQuery(this).height()   ){

			   _height   =  jQuery(this).height() ;

	    }					  

});

 

 jQuery('.box-group-room .box-room-detail').height(  _height ) ; });

</script>



<style type="text/css">

.slide-list a{
	    position: absolute;
    bottom: 45%;
	right:50%;
    background-color: #666;
    padding: 40px;
    opacity: 0.8;
	font-family: "Sawarabi Mincho";
    font-size: 42px;
}

.slide-list a.link2 {
	    position: absolute;
    bottom: 45%;
	left:10%;
	right:unset;
    background-color: #666;
    padding: 40px;
    opacity: 0.8;
	font-family: "Sawarabi Mincho";
    font-size: 42px;
}

.group-mainbanner{ height:600px; }

.group-mainbanner .slide-list{height:600px;}



.bxslider{padding-left:0px; margin-left:0px;}

.bxslider li{padding-left:0px; margin-left:0px;}



.group-slider{position:relative;  margin:auto; max-width:1440px; width:100%; top:-600px;}



.btn-bookbanner{position:absolute; top:30px; right:50px; z-index:200; font-size:24px;  

-webkit-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.75);

-moz-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.75);

box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.75);

padding-left:30px; padding-right:30px;

font-family: "Sawarabi Mincho" !important; 

}





@media only screen and (min-device-width : 320px) and (max-device-width : 767px) {

.bx-wrapper .bx-controls-direction a{display:none;}



.group-slider{ top:-225px;}

.btn-bookbanner{font-size: 18px;

    top: 242px;

    left: 50%;

    margin-left: -120px;

    width: 240px; padding-top:10px; padding-bottom:10px; }

.bx-pager{display:none;}



.group-mainbanner .slide-list{ height:225px;}



.m_ptop80{padding-top:80px;}

.slide-list a {
    position: absolute;
    bottom: 50px;
    right: 25%;
    background-color: #666;
    padding: 15px;
    opacity: 0.8;
    font-family: "Sawarabi Mincho";
    font-size: 18px;
    /* width: 171px; */
}

.slide-list a.link2 {
	    position: absolute;
    bottom: 65%;
	left:10%;
	right:unset;
    background-color: #666;
       padding: 15px;
    opacity: 0.8;
	font-family: "Sawarabi Mincho";
    font-size: 18px;
}

}

@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px)  {
.slide-list a {
    position: absolute;
    top: 55%;
    right: 26%;
    background-color: #666;
    padding: 40px;
    opacity: 0.8;
    font-family: "Sawarabi Mincho";
    font-size: 42px;
}



	
}

</style>

<link rel="canonical" href="http://matsunoi.vn/" />
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "ホテル滞在中、急に体調が悪くなったら？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "24時間体制で日本語のできるスタッフがホテルに常勤し、お客様のサポートを行っております。お客様より体調不良のご連絡があれば、症状や状況などをお伺いした上でそれらに応じた最寄りの病院をご紹介し、手配いたします。<br />
＊体温計・水枕・日本の薬（胃腸薬・風邪薬・正露丸）を常備しております。"
        }
      }, {
        "@type": "Question",
        "name": "チェックインは、3:00 pmからですが、それより前にホテルに到着したら？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "受付でお荷物をお預かりすることは可能です。ただしホテルご到着時にお部屋の確約が必要な場合は、アーリーチェックインの追加料金をお支払いいただくことになります。<br />
当日の9:00am前のご利用100％、9:00amからのご利用50％、12:00amからのご利用は25%となっております。"
        }
      }, {
        "@type": "Question",
        "name": "チェックアウト時間後にお部屋を利用することはできますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "お部屋に空きがある場合は、承ることができます。(有料)<br />
・15:00 p.m.までのレイトチェックアウト：1泊分の25%チャージ<br />
・18:00 p.m.までのレイトチェックアウト：1泊分の50%チャージ<br />
・18:00 p.m.以降のレイトチェックアウト：1泊分の100%チャージ"
        }
      }, {
        "@type": "Question",
        "name": "電子機器はそのまま利用できますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "コンセントの型は日本と同じA型ですが、ベトナムの電圧はほとんどが220Vです。日本の電気製品でも、100～240V対応の物であれば変圧器なしで使用できます。念のため使用予定の電気製品の取り扱い説明書をご確認ください。またコンセントプラグの差し込み口付近に、小さい文字で電圧の記載がございます。"
        }
      }, {
        "@type": "Question",
        "name": "レストランも禁煙ですか？ロビーに喫煙場所はありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "指定の場所以外は全て禁煙でございます。　<br />
灰皿が設置された場所（２階・４階のエレベーター前、ロビー出口）のみ喫煙可能でございます。"
        }
      }, {
        "@type": "Question",
        "name": "深夜のチェックイン、又は早朝のチェックアウトはできますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "可能でございます。受付は２４時間対応しております。到着・出発予定時間がわかる場合は、事前にご連絡いただけますとチェックイン・チェックアウトがスムーズです。"
        }
      }, {
        "@type": "Question",
        "name": "チェックアウト後、荷物を預かってもらえますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "お預かりいたします。大変恐れ入りますが、貴重品はご自身で管理いただきますようお願いいたします。"
        }
      }, {
        "@type": "Question",
        "name": "チェックイン前に配送サービスで荷物を送った場合、預かってもらえますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "発払いのお荷物のみお預かりいたします。事前にメールにて、お客様とお荷物*の情報をお知らせください。（*配送予定日、配送会社、お荷物の内容、お荷物の３辺のサイズ、個数"
        }
      }, {
        "@type": "Question",
        "name": "滞在中、冷凍庫・冷蔵庫で保管が必要な荷物を預かってもらえますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "事前にメールにて、お客様とお荷物*の情報をお知らせください。（*お預かり期間、お荷物の内容、お荷物の３辺のサイズ、個数）サイズの確認が出来次第、ご回答いたします。"
        }
      }, {
        "@type": "Question",
        "name": "チェックアウト後、シャワーの利用はできますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "空室状況によりますが、有料でご利用頂くことができます。予約時または受付にお問い合わせください。"
        }
      }, {
        "@type": "Question",
        "name": "両替サービスはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "大変申し訳ございませんが、おこなっておりません。最寄り（徒歩５分ほど）の両替所をご紹介いたします。"
        }
      }, {
        "@type": "Question",
        "name": "コインランドリーはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "あいにくホテル館内にはございませんが、ホテルのランドリーサービス（有料）をご利用いただけます。"
        }
      }, {
        "@type": "Question",
        "name": "アイロンはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "貸出用のアイロン・アイロン台がございます。１回３０分ほど無料で貸し出しいたします。ご希望の際は受付へお申し付けくださいませ。"
        }
      }, {
        "@type": "Question",
        "name": "客室でのインターネット環境は？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "全客室にて、高速インターネット接続システム（無線）を無料でご使用いただけます。"
        }
      }, {
        "@type": "Question",
        "name": "朝食は、どんな内容ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "ブッフェスタイルで提供致しております。和食メインでご用意しております。"
        }
      }, {
        "@type": "Question",
        "name": "朝食なしのプランはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "ございます。チェックイン後、朝食つきプランに変更も可能です。追加料金はお一人さま５ドル/日となります。"
        }
      }, {
        "@type": "Question",
        "name": "宿泊していない方の朝食利用は可能でしょうか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "はい、可能でございます。受付でお申し付けください。追加料金はお一人さま５ドルとなります。"
        }
      }, {
        "@type": "Question",
        "name": "空港～ホテル間の送迎サービスはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "有料にてご利用いただくことができます。送迎サービスをご利用の際は、指定の場所でお客様のお名前を記載したプラカードを持ってスタッフがお待ちいたします。"
        }
      }, {
        "@type": "Question",
        "name": "コンビニエンスストアはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "ホテル館内にはございませんが、徒歩圏内にございます。スタッフがご案内させて頂きますのでご遠慮なくお申し付けくださいませ。
"
        }
      }, {
        "@type": "Question",
        "name": "駐車場はありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "バイクのみございます。満車の場合は、近隣の駐輪場をご案内いたします。"
        }
      }, {
        "@type": "Question",
        "name": "オンライン決済はできますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "恐れ入りますが、現在のところオンラインでの決済サービスはございません。チェックイン前の銀行振込みをご希望の際は、ご予約時にお申し付けください。 
"
        }
      }, {
        "@type": "Question",
        "name": "精算はいつすればいいですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "通常チェックイン時のご精算をお願いしております。長期滞在者さま（１ヶ月以上の方）はチェックイン時に全額でなく、１０日ごと・月ごとなどの数回に分けて事前支払いをお願しております。 <br />
法人契約の方のみ、チェックアウト時、チェックアウト後の銀行振込も可能でございます。長期滞在者さまには月初に前月分を請求させていただきます。"
        }
      }, {
        "@type": "Question",
        "name": "パスポートを紛失した場合、どうしたらいいですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "必要書類をそろえて、在ホーチミン日本国総領事館で「帰国のための渡航書」または「紛失・再発行」の手続きを行う必要があります。まずは在ホーチミン日本国総領事館+84-28-3933-3510にご本人さまから連絡して、総領事館の方にご相談ください。<br />
本人以外の問い合わせの場合は、個人情報のためスムーズに手続きが行えません。<br />
必要書類には警察で発行する紛失証明書や戸籍謄本、航空券の控え、証明写真など、ご本人の状況や手続きの種類によりご準備する書類が若干異なります。警察で発行する紛失証明書もご本人が行く必要がございます。サポートが必要な方は受付にお申し付けください。"
        }
      }, {
        "@type": "Question",
        "name": "法人契約について知りたい場合はどうしたらいいですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "HPの予約・問い合わせページに入力・送信していただくか、info@matsunoi.comまでお問合わせください。法人契約の内容をご案内いたします。ご契約の場合は、契約書へ署名・捺印しスキャンデータをお送りいただき、チェックイン時に原本をお持ちくださいかご郵送ください。"
        }
      }]
    }
    </script>


</head>

<body>

<?php echo get_template_part('header'); ?>
<script type="text/javascript" src="<?php echo $site_url;  ?>/common/js/jquery.bxslider.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $site_url;  ?>/common/css/jquery.bxslider.css"  />
<div id="container">

    <!-- slide box -->

            

      <ul class="group-mainbanner bxslider">

      

             <li class="slidebox " style="background-color:#FFF;">

                   <!-- <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/top_banner.png');    background-position: center;   background-size: cover; max-width:1440px; margin:auto;" ></div>-->
<div class="slide-list"><picture>
    <source srcset="<?php echo $site_url;  ?>/images/home/top_banner.webp" type="image/webp">
    <img src="<?php echo $site_url;  ?>/images/home/top_banner.png" style=" display:block;
  width:100%; height:100%;
  object-fit: cover;">
</picture>
<a href="http://matsunoi.vn/inquire/"  class="link2">予約・問合せ </a></div>
            </li>

      

          <li class="slidebox " style="background-color:#f6f7e5;">

                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/matsunoi_banner_1_jp-min.jpg');    background-position: center;   background-size: cover; max-width:1440px; margin:auto;" ><a href="http://matsunoi.vn/promotion/">プロモーション実施中!!! </a>
</div>

            </li>

            

             <li class="slidebox " style="background-color:#97936e;">

                    <div class="slide-list" style="background-image: url('<?php echo $site_url;  ?>/images/home/matsunoi_banner_2-min.jpg');    background-position: center;   background-size: cover; max-width:1440px; margin:auto;" ><a href="http://matsunoi.vn/promotion/">プロモーション実施中!!! </a></div>

            </li>

    </ul>

    

    <div class="group-slider">

    <a href="<?php echo $site_url;  ?>/inquire/" class="btn btn-success btn-lg  btn-bookbanner">今すぐ予約</a>

    </div>

    



    <!-- slide box end-->

    <!-- box white-->

    <div class="box-white m_ptop80">

        <div class="container">

            <h1 class="title-h1">松乃井ホテルへようこそ</h1>

            <div class="txt-content m-top20 txt-center">
群馬県にある1956年創業の歴史ある温泉旅館「松乃井」の松乃井グループが、<br/>
2017年11月1日、ワンランク上のビジネスホテル（日系ホテル）「MATSUNOI」を、<br/>
ベトナム・ホーチミン1区にオープンいたしました。<br/>
ホーチミンにビジネスで滞在される方だけでなく、観光で1区周辺のホーチミン中心地に訪れる方にもおすすめです。<br/>
日本人スタッフ２名と日本語対応スタッフが随時常駐しており、日本語でのご予約も承っております。<br/>
シンプルなインテリアと清潔感あふれる空間で、ゆったりとお過ごしください。<br/>
なお、お部屋は全て禁煙とさせて頂いております。<br/>



            </div>

        </div>

    </div>

    <!-- box while end-->

    <!-- box gray-->

    <div class="box-gray">

            <div class="container">

                        <h2 class="title-h1">施設のご案内</h2>

                        

                        <div class="group-room-x3 row">

                                    <div class="col-xs-4 col-sm-4">

                                            <a  class="box_hover" href="<?php echo $site_url;  ?>/facilities/">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility1-min.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">ホーチミン市内、1区中心地の高立地にも関わらず、少し奥まったところにあるホテルのため、静かにお過ごし頂けます。</div>

                                            </div>

                                            </a>                                            

                                    </div>

                                    <div class="col-xs-4 col-sm-4">

                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/facilities/">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility2-min.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">2017年11月に改装を終えた館内。全室バスタブ付きのきれいなお部屋でおくつろぎ下さい。</div>

                                            </div>

                                            </a>

                                    </div>

                                    <div class="col-xs-4 col-sm-4" >

                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/facilities/">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility3-min.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">朝日が燦々と差し込む、眺めの良い９階レストランで、手づくり朝食（ビュッフェスタイル）をお召し上がりください。</div>

                                           </div>

                                           </a>

                                    </div>
                                    
                                    <div class="col-xs-4 col-sm-4" >

                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/facilities/">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility4.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">Wi-fiは全室無料で接続可能。オフィス感覚でご利用戴けます。</div>

                                           </div>

                                           </a>

                                    </div>
                                    
                                    <div class="col-xs-4 col-sm-4" >

                                             <a  class="box_hover" href="<?php echo $site_url;  ?>/facilities/">

                                            <div class="box-group-room">

                                                <div class="box-room-img" style="background:url(<?php echo $site_url;  ?>/images/top_facility5.jpg) no-repeat; background-position: center;   background-size: cover;"></div>

                                                <div class="box-room-detail">全室ウォシュレット完備。清潔と安心をご提供いたします。</div>

                                           </div>

                                           </a>

                                    </div>

                        </div>

            </div>

    </div>

    <!-- box gray end-->    

    <!-- box white-->

    <div class="box-white smt-padding-bottom-20">

        <div class="container">

                <h2 class="title-h1">客室のご案内</h2>

                

                <div class="clearfix"></div>

                

                 <div class="group-room-x4 row">

                                    <div class="col-xs-12 col-sm-3">

                                           

                                           <a href="<?php echo $site_url;  ?>/rooms/standard/" class="box-room">

                                           <div class="list-rooms">

                                          

                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room1-min.jpg) no-repeat; background-position: center;   background-size: cover;">

                                            

                                                         <div class="bg_instant"></div>

                                                          <div class="msg">

                                                            <div class="msg_group">

                                                              <span class="msg_top">スタンダード</span>

                                                              <span class="msg_bottom">Standard</span>

                                                           </div>

                                                        </div>

                                            

                                            </div>

                                            

                                            <div class="box-room-detail">16.5㎡・ベッド幅1600mm <br/>シンプルな心地よさ。窓なしのお部屋のため、静かな空間でお過ごし頂けます。</div>

                                             </div></a>

                                                

                                    </div>

                                    

                                    <div class="col-xs-12 col-sm-3" >

                                             <a href="<?php echo $site_url;  ?>/rooms/superior/"  class="box-room">

                                             <div class="list-rooms">

                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room2.jpg) no-repeat; background-position: center;   background-size: cover;">

                                                    

                                                       <div class="bg_instant"></div>

                                                          <div class="msg">

                                                            <div class="msg_group">

                                                              <span class="msg_top">スーペリア</span>

                                                              <span class="msg_bottom">Superior</span>

                                                           </div>

                                                        </div>

                                                        

                                            

                                            </div>

                                            <div class="box-room-detail">16.5㎡・ベッド幅1600mm <br/>

東向きの窓で、明るいお部屋。

清潔感のあるインテリアで快適なお部屋です。</div>

                                            </div></a>



                                    </div>

                                    <div class="col-xs-12 col-sm-3">

                                           <a href="<?php echo $site_url;  ?>/rooms/deluxe/"  class="box-room">

                                            <div class="list-rooms">

                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room4.jpg) no-repeat; background-position: center;   background-size: cover;">

                                            

                                                     <div class="bg_instant"></div>

                                                          <div class="msg">

                                                            <div class="msg_group">

                                                              <span class="msg_top">デラックス</span>

                                                              <span class="msg_bottom">Deluxe</span>

                                                           </div>

                                                        </div>

                                            

                                            </div>

                                            <div class="box-room-detail">20㎡・ベッド幅1600mm <br/>

南に面した明るいお部屋。ゆったりバスタブ付き。

柔らかな色調で落ち着き溢れる空間です。</div></div></a>





                                    </div>

                                    <div class="col-xs-12 col-sm-3">

                                            <a href="<?php echo $site_url;  ?>/rooms/twin/"  class="box-room">

                                             <div class="list-rooms">

                                            <div class="box-room-img"  style="background:url(<?php echo $site_url;  ?>/images/top_room3.jpg) no-repeat; background-position: center;   background-size: cover;">

                                            

                                            

                                                      <div class="bg_instant"></div>

                                                          <div class="msg">

                                                            <div class="msg_group">

                                                              <span class="msg_top">ツイン</span>

                                                              <span class="msg_bottom">Twin</span>

                                                           </div>

                                                        </div>

                                                        

                                            

                                            </div>

                                            <div class="box-room-detail">24㎡・ベッド幅1200mm <br/>

南向きに面した明るいお部屋。

お二人でもゆったりとおくつろぎ頂けます。</div></div></a>

                                    </div>

                        </div>    

                        

                        <div class="group-service">

						<ul>

							<li><img src="/images/ico_wifi-min.jpg"></li>

							<li><img src="/images/ico_print-min.jpg"></li>

							<li><img src="/images/ico_help-min.jpg"></li>

						</ul>

            </div>

               

        </div>

    </div>

</div>

    </div>

    <!-- box while end-->

</div>

<?php echo get_template_part('footer'); ?>

</body>

</html>