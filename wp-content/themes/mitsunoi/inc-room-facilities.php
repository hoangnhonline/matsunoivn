<?php 
$site_url = get_site_url(); 
?>
<!-- box gray-->
    <div class="box-gray-plain pc-p-bottom50">
            <div class="container">
                    <h2 class="title-h1">客室備品・アメニティ<span>Room Supplies & Amenities</span></h2>
             
            
            
                    <!-- fac -->
                    <div class="fac-group">
                        <div class="group-room-x4 row">
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-1.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">トイレ<br/>全室ウォシュレット付き</div>
                                            </div>                                            
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-2.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">ナイトウェア<br/>前紐タイプ・ワッフル生地で肌に優しいナイトウェアをご用意。</div>
                                            </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-3.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">バスアメニティ<br/>シャンプー・コンディショナー・シャワージェル ・ハンドソープ・シェービングクリーム</div>
                                           </div>
                                    </div>
                                      <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-4.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">衣類消臭スプレー<br/>旅先で便利な消臭スプレーをご用意。</div>
                                           </div>
                                    </div>
                        </div>
                    </div>
                    <!-- fac end-->
            
                      <!-- fac -->
                    <div class="fac-group">
                        <div class="group-room-x4 row">
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-5.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">４０型液晶テレビ<br/>４０型液晶テレビを全室に備えております。 </div>
                                            </div>                                            
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-6.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">電気ケトル・ティーセット・ペットボトル水２本　コーヒー・お茶等をご用意しております。</div>
                                            </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-7.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">バスタブ<br/>ゆっくりとおくつろぎ下さい</div>
                                           </div>
                                    </div>
                                      <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-8.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">デスク<br/>全室に備えております。 </div>
                                           </div>
                                    </div>
                        </div>
                    </div>
                    <!-- fac end-->
                    
                    <script type="text/javascript">
					
					function adj_height(){
								$('.fac-group').each( function(){
										
										_fac_h = 0;
										
										$(this).find('.box-room-detail').each(
												function(){
													
														if ($(this).outerHeight() > 	_fac_h){
																_fac_h = 	$(this).outerHeight();
														}
														
												}							  
										);
										
									$(this).find('.box-room-detail').css({'height' :_fac_h }) ;	
							});
					}
					
					adj_height();
					
					  $(window).on('resize',adj_height);
					
                   </script>
                
                     <div class="clearfix"></div>
                        
                        <table class="table-style1 m-top40">
                            <tr>
                                <th>客室備品 </th>
                                <td>全室バス・ウォシュレット付トイレ・全室シャワー・全室空の冷蔵庫・４０インチ液晶テレビ(日本語チャンネル使用可能)・デスク エアーコンディショナー・全室セーフティボックス・姿見・ロールカーテン </td>
                            </tr>
                            <tr>
                                <th>付属アメニティ</th>
                                <td>
                                全室Wi-Fi接続無料・１L電気ケトル・お茶・コーヒー・マグカップ・ペットボトル水２・本掛時計・ヘアードライヤー・
                                衣類消臭スプレー ・シャンプー・コンディショナー・シャワージェル・シェービングジェル・石鹸・バスタオル・フェイスタオル・バスマット・
                                ナイトウェア・歯ブラシ・櫛・カミソリ・綿棒・サニタリーバッグ・靴磨き・靴べら・ランドリーバッグ・スリッパ・メモ帳・ボールペン
                                ・ロビーにてドリンクサービス（AM7 ~ PM5)
                                <br/>
                                ＊お湯のご利用に3-4分かかる場合がございます。

                                
                                
                                 </td>
                            </tr>
                            <tr>
                                <th>無料貸出 </th>
                                <td>ケータイ充電器 ・水枕・体温計・目覚まし時計・アイロン・アイロン台</td>
                            </tr>
                            <tr>
                                <th>有料サービス </th>
                                <td>クリーニングサービス・ドリンク販売・空港送迎</td>
                            </tr>
                        </table>
                        
            </div>  
            
    </div>
  </div>
       <!-- box gray end-->
    
    <!-- box white-->
    <div class="box-white smt-padding-bottom-20  box-room-info">
        <div class="container">
                    <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                        <h3 class="title-h3"><span>チェックイン・チェックアウト</span>  <br/>Check in - Check out</h3>
                                  <div class="box-content ">
                                      • チェックイン：15:00より<br/>
• チェックアウト：12:00まで
                                  </div>      

                                        
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                        <h3 class="title-h3"><span>延長料金</span>  Extended Fee</h3>
<div class="box-content">                          
延長料金 Extend Fee<br/>
15時まで 正規客室の２５％<br/> 
18時まで 正規客室の５０％<br/> 
18時以降 正規客室の全額 
</div>

                                </div>
                                
                                
                                 <div class="col-xs-12 col-sm-4">
                                        <h3 class="title-h3"><span>キャンセルポリシー </span> </h3>
                                         <div class="box-content">ご宿泊日の４８時間以内のキャンセルは、１泊分の宿泊料金を頂戴いたします。</div>
                                </div>       
                                
                    </div>
        </div>
    </div>
     <!-- box white end-->
  