<?php
include'config.php';
include'classes/Page.php';
include'classes/Database.php';
$page=new Page();
if (isset($_GET['id'])){
	$id=$_GET['id'];
	if($id!=0){
		$text=$page->get_one($id);
		echo $page->get_body($text,'view');
		exit();
	}
	else {
		exit('ne pravilni');
	}
	
}
else {
	
	$text=$page->get_all();
	echo $page->get_body($text,'main');
	}

?>