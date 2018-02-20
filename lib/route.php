<?php function get_page($var_get){
	$gets = explode('/', $var_get);
	foreach($gets AS $get){
		$i = $i+1;
		${'get_'.$i} = $get;
	}	
	if($get==''){
		$page = "home";
	} else{
		$page = $get_1;
	}	
	return $page;
}


function get_view($var_page){
	
	ob_start();
	
		if(file_exists('controlleurs/'.$var_page.'.php')){
			include('controlleurs/'.$var_page.'.php');
		}
		
		if(file_exists('pages/'.$var_page.'.php')){
			include('pages/'.$var_page.'.php');
		} else{
			include('pages/404.php');
		}
			
	$result = ob_get_contents();
	ob_end_clean();
	
	return $result;
	
}

function get_param($var_get, $witch){
	$gets = explode('/', $var_get);
	foreach($gets AS $get){
		$i = $i+1;
		${'get_'.$i} = $get;
	}	

	return ${'get_'.$witch};
}

function get_title($page){

	ob_start();
	
		include('pages/'.$page.'.php');
			
	$result = ob_get_contents();
	ob_end_clean();

	return $title;
}