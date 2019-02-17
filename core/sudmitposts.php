<?php 
	session_start();



	$page_referrer=$_SERVER['HTTP_REFERER'];
	
	$status = 'Yoy have succsesfully subscribed';
	$_SESSION['status'] = $status;



	header('Location: '.$page_referrer);
 ?>