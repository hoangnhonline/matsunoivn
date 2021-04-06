// JavaScript Document

$('document').ready( function(){
        
		$('.gallery-list a').click( function(event){
		        event.preventDefault();					
				_href = $(this).attr('href');				
				$('.select-img img').attr( {'src':_href});
		});
		
		
		
			/* menu */ 
			var menu_mobile = $('.menu_mobile');
				 menu_mobile.hide();
				 
				 $('.nav_mobile a').click(
						function(e){
							e.preventDefault();				
								menu_mobile.css({'left' : -1* $(document).width() });
								menu_mobile.show();
								menu_mobile.animate({left: "0px"}, 250, function(){		
																				 
								$("html, body").addClass("fixed_scroll"); 												 
																				 
								});
				});
				
				$('.btn-close').click( 
						function(e){
							e.preventDefault();				
							menu_mobile.animate({'left' : -1* $(document).width() },150, function(){
							menu_mobile.css({'left' : -1* $(document).width() });			
							menu_mobile.hide();});	 
							
						$("html, body").removeClass("fixed_scroll");
			 });
			
			
			
			
			$('.lang-list').css({"height": "0px"});	
				
			$('.select_lang').click( function(e){
				  e.preventDefault();
				  
				  if ( $('.lang-list').height()  > 10){
						 $('.lang-list').animate({"height": "0px"}  , 200);	
						 $('.icon-angle').html('<i class="fa fa-caret-down" aria-hidden="true"></i>');
					 }
				  else{
						$('.lang-list').animate( {"height": "55px"} , 200, function(){});	
						$('.menu_mobile').animate({scrollTop:(jQuery( this).offset().top) },200);	
						$('.icon-angle').html('<i class="fa fa-caret-up" aria-hidden="true"></i>');
					
					}
									   
			});
			/* menu end */	
							  
});