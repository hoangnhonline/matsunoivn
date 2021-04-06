<?php 
$site_url = get_site_url(); 
?>
<!-- box gray-->
    <div class="box-gray-plain pc-p-bottom50">
            <div class="container">
                    <h2 class="title-h1">Một số đồ dùng và trang thiết bị trong phòng</h2>
             
            
            
                    <!-- fac -->
                    <div class="fac-group">
                        <div class="group-room-x4 row">
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-1.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Toilet <br/>Tất cả đều trang bị bồn cầu tự động.</div>
                                            </div>                                            
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-2.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Áo ngủ <br/>Áo ngủ được làm bằng chất liệu dễ chịu và không gây kích ứng da.</div>
                                            </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-3.jpg) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Tiện nghi trong phòng tắm<br/>Dầu gội, dầu xả, sữa tắm, xà phòng rửa tay và kem cạo râu</div>
                                           </div>
                                    </div>
                                      <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-4.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Xịt khử mùi quần áo <br/>Cho quần áo luôn trong trạng thái sạch sẽ và hoàn hảo nhất.</div>
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
                                                <div class="box-room-detail">40-inch LCD TV <br/>Tất cả các phòng đều được trang bị Tivi LCD 40 inch.</div>
                                            </div>                                            
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-6.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Bình đun nước – trà – cà phê – 2 chai nước suối v.v… luôn sẵn sang.</div>
                                            </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-7.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Bồn tắm <br/>Nơi thư giãn sau ngày dài bận rộn.</div>
                                           </div>
                                    </div>
                                      <div class="col-xs-3 col-sm-3">
                                            <div class="box-group-room">
                                                <div class="box-room-img" style="background:url(<?php echo $site_url; ?>/images/room_facilities/fac-thumb-8.png) no-repeat; background-position: center;   background-size: cover;"></div>
                                                <div class="box-room-detail">Bàn làm việc <br/>Được bố trí trong tất cả các phòng. </div>
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
                                <th>Trang bị </th>
                                <td>Bồn tắm – Toilet tự động – Vòi sen – Minibar – TV LCD 40 inch với các kênh truyền hình Nhật <br/>
Bàn làm việc – Máy điều hòa – Két sắt – Gương – Rèm cửa </td>
                            </tr>
                            <tr>
                                <th>Amenity</th>
                                <td>
                           Wifi miễn phí – bình đun nước – cà phê – trà – cốc – 2 chai nước suối – đồng hồ - máy xấy tóc – khử mùi quần áo – dầu gội – dầu xả - sữa tắm – kem cạo râu – xà phòng – khăn tắm – khăn mặt – thảm chân – áo ngủ - bàn chải đánh răng – lược – dao cạo râu – bông ngoáy tai – túi vệ sinh – kem đánh giày – bót xỏ giày – túi đựng đồ giặt ủi – dép đi trong phòng – giấy ghi chú – bút. Dịch vụ phục vụ đồ uống miễn phí tại sảnh từ 7AM đến 5PM <br/>
Xin lưu ý cần 3 đến 4 phút để nước nóng chảy ra từ vòi nóng khi sử dụng.



                                
                                
                                 </td>
                            </tr>
                            <tr>
                                <th>Cho mượn (free) </th>
                                <td>Sạc điện thoại · Gối · Nhiệt kế · Đồng hồ báo thức · Bàn ủi · Bàn để ủi quần áo</td>
                            </tr>
                            <tr>
                                <th>Dịch vụ thu phí    </th>
                                <td>Giặt ủi · Nước uống · Đưa đón tại sân bay</td>
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
                                        <h3 class="title-h3"><span>Nhận phòng – Trả phòng</span></h3>
                                  <div class="box-content ">
                                      • Nhận phòng từ 15:00<br/>
• Trả phòng đến 12:00 
                                  </div>      

                                        
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                        <h3 class="title-h3"><span>Gia hạn phòng </span> </h3>
<div class="box-content">                          
Trả thêm 25% tiền phòng nếu gia hạn đến 15:00 giờ <br/>
Trả thêm 50% tiền phòng nến gia hạn đến trước 18:00 giờ <br/>
Trả toàn bộ tiền phòng 1 đêm nếu gia hạn sau 18:00 giờ.
</div>

                                </div>
                                
                                
                                
                                 <div class="col-xs-12 col-sm-4">
                                        <h3 class="title-h3"><span>Chính sách hủy phòng </span> </h3>
<div class="box-content">                          
Lệnh <strong>hủy phòng</strong> nhận được trong vòng 48 giờ trước ngày lưu trú sẽ tính phí đêm đầu tiên.
</div>

                                </div>
                                
                    </div>
        </div>
    </div>
     <!-- box white end-->
  