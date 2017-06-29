<?php

	$page = $_GET['page'];

	if(isset($_GET['action']))
				$action = $_GET['action'];
			else
				$action = "";
	switch ($page) {
		case 'goods':
			if($action == "add_goods"){
				include("../page/articles_admin/add_goods.php");
			}else{
				include("../page/articles_admin/articals_goods.php");
			}
			break;
		
		case 'brand':
			if($action == "add_brand"){
				include("../page/articles_admin/add_brand.php");
			}else{
				include("../page/articles_admin/articals_brand.php");
			}
			break;

		
		default:
			include("../page/articles_admin/articals_admin.php");
			break;
	}
	
	
?>
