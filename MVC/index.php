<?php 
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once './app/controllers/HomeControler.php';

switch ($url) {
	case '/':
		$ctr = new HomeControler();
		echo $ctr->index();
		break;
	
	default:
		echo "Đường dẫn không tồn tại";
		break;
}