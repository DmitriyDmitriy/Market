<?php

	include("page/db.php");

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Окунь</title>

	<link rel="icon" type="image/x-icon" href="images//fish.ico" />

	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">

	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">

	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">	

	<link rel="stylesheet" type="text/css" href="libraries/lib.css"> 

	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/shortcodes.css">

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
		   </div>
		</div>
	</div>

	
    <header class="header-main container-fluid no-padding"> 
        <?php

            include("page/header.php");

        ?>
    </header>
    <?php

        if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                if($id==1) include_once('home.php');
                if($id==2) include_once('page/novelties.php');
                if($id==3) include_once('page/shop.php');
                if($id==4) include_once('page/gallery.php');
                if($id==5) include_once('page/faq.php');
                if($id==6) include_once('page/about.php');
                if($id==7) include_once('page/contact.php');
                if($id==8) include_once('page/contact-us.php');
                if($id==9) include_once('page/registretion.php');
                if($id==10) include_once('page/reg.php');
                if($id==11) include_once('page/error.php');
                if($id==12) include_once('page/spining.php');
                if($id==13) include_once('page/catyshki.php');
                if($id==14) include_once('page/primanki.php');
                if($id==15) include_once('page/leska.php');
                if($id==16) include_once('page/osnastka.php');
                if($id==17) include_once('page/error_reg.php');
            }
    ?>
	<?php

        include("page/footer.php");

    ?>
	
	<!-- JQuery v1.11.3 -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Library Js -->
	<script src="libraries/lib.js"></script>
	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
</body>
</html>