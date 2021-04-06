<?php 
function select_lang($template){
	
    $currentLanguage  = get_bloginfo('language');	
	
	if ($currentLanguage == 'en-US'){
	    $lang_path = 'en/';	
	}
	else if ($currentLanguage == 'vi'){
		$lang_path = 'vi/';
	}
	else{
		$lang_path = '';
	}
	
	$temp_name =  basename($template);	
	$temp_path =  $lang_path.$temp_name;	
	$template = locate_template($temp_path);
	
	return $template;
	

}

add_filter( 'template_include', 'select_lang' );
