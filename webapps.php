<?php
// Include functions if not already included
require_once('../functions.php');
//Set variables

$admin_email="justin@turnedaround.net";
$title="Embyvites";
$baseURL="https://tacohouse.us";
$embyurl="https://tacohouse.us/emby";
?>
<!DOCTYPE html>

<html lang="<?php echo $language->getLang(); ?>" class="no-js">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="mobile-web-app-capable" content="yes" /
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no" />

		<title><?=$title;?><?php if($title !== "Embyvites") :  echo " - Organizr"; endif; ?></title>

		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/bootstrap/dist/css/bootstrap.min.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/font-awesome/css/font-awesome.min.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/mdi/css/materialdesignicons.min.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/metisMenu/dist/metisMenu.min.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/Waves/dist/waves.min.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css?v=<?php echo INSTALLEDVERSION; ?>">
<!--Embyvites CSS -->
		<link rel="stylesheet" href="<?=$baseURL;?>/embyvites-css/style.css?v=<?php echo INSTALLEDVERSION; ?>">
<!------------------>
		<link rel="stylesheet" href="<?=$baseURL;?>/js/selects/cs-select.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/js/selects/cs-skin-elastic.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/google-material-color/dist/palette.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/sweetalert/dist/sweetalert.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/bower_components/smoke/dist/css/smoke.min.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/js/notifications/ns-style-growl.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/js/notifications/ns-style-other.css?v=<?php echo INSTALLEDVERSION; ?>">


		<script src="<?=$baseURL;?>/js/menu/modernizr.custom.js?v=<?php echo INSTALLEDVERSION; ?>"></script>
		<script type="text/javascript" src="<?=$baseURL;?>/js/sha1.js?v=<?php echo INSTALLEDVERSION; ?>"></script>
		<script type="text/javascript" src="<?=$baseURL;?>/js/user.js?v=<?php echo INSTALLEDVERSION; ?>"></script>

		<link rel="stylesheet" href="<?=$baseURL;?>/css/style.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="<?=$baseURL;?>/css/weather-icons.css?v=<?php echo INSTALLEDVERSION; ?>">
		<link rel="stylesheet" href="../bower_components/animate.css/animate.min.css?v=<?php echo INSTALLEDVERSION; ?>">

		<link rel="icon" type="image/png" href="<?=$baseURL;?>/images/favicon/android-chrome-192x192.png" sizes="192x192">
		<link rel="apple-touch-icon" sizes="180x180" href="<?=$baseURL;?>/images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?=$baseURL;?>/images/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?=$baseURL;?>/images/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?=$baseURL;?>/images/favicon/manifest.json">
		<link rel="mask-icon" href="<?=$baseURL;?>/images/favicon/safari-pinned-tab.svg" color="#2d89ef">
		<link rel="shortcut icon" href="<?=$baseURL;?>/images/favicon/favicon.ico">
		<meta name="msapplication-config" content="<?=$baseURL;?>/images/favicon/browserconfig.xml">
		<meta name="theme-color" content="#2d89ef">
		<link rel="stylesheet" type="text/css" href="../css/addtohomescreen.css">
		<script src="../js/addtohomescreen.js"></script>
		<script src="../js/push.js"></script>
		<!--Other-->
		<script src="../js/ajax.js?v=<?php echo INSTALLEDVERSION; ?>"></script>
		<!--[if lt IE 9]>
		<script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
		<script src="bower_components/respondJs/dest/respond.min.js"></script>
		<![endif]-->
</head>
<style>

	.hp-link {
		width:70% !important;
		float:none;
		margin-left:auto;
		margin-right:auto;
	}
		/* This block will give you some animations when hovering over the big buttons */
        .slick-slide {
            max-width: 100%;
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            display:block;
            float:none;
        }
        .slick-slide:hover {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(.989);
            z-index: 10000000;
            border-radius: 7px;
            opacity: 1 !important;

        }
				.aka {
                        font-style: italic !important;
                        font-size: 12px !important;
                        text-align: center !important;
        }
				</style>
	<body>
		<center><img src="https://tacohouse.us/images/taco_256.png" width=150px height=150px></center>
		<br>
		<div class="enjoy"> Emby Web App</div>
		<div class="leechers">
		    Using the Web App is not the ideal solution, but a solution none the less. There are a few steps left to go this route.
				I will try to outline the steps the best I can.
		</div><br>
		<div class="hp-link col-sm-12 col-lg-12">
            <div class="slick-slide"><div class="content-box light-blue-bg" onclick="location.href='https://tacohouse.us/embyvites/enjoy.php'"style="cursor: pointer;">
				<!-- Change "Your Text Here" with whatever you want the button to say -->
                <h1 style="margin: 10px" class="text-uppercase text-center">Back to Device Options</h1>
                <div class="clearfix"></div>
             </div>
        </div>
			</div>
			<div class="hp-link col-sm-12 col-lg-12">
	            <div class="slick-slide"><div class="content-box green-bg" onclick="window.open('https://tv.emby.media')"style="cursor: pointer;">
					<!-- Change "Your Text Here" with whatever you want the button to say -->
	                <h1 style="margin: 10px" class="text-uppercase text-center">Open Up The Web-App Tab (steps below)&nbsp<div class="aka">will open in a new tab</div></h1>
	                <div class="clearfix"></div>
	             </div>
	        </div>
				</div>
		<div class="hp-link col-sm-12 col-lg-12">
            <div class="slick-slide"><div class="content-box red-orange-bg" onclick="location.href='https://tacohouse.us/embyvites/'"style="cursor: pointer;">
				<!-- Change "Your Text Here" with whatever you want the button to say -->
                <h1 style="margin: 10px" class="text-uppercase text-center">Back to Embyvites</h1>
                <div class="clearfix"></div>
             </div>
        </div>
			</div>
			<div class="col-lg-6">
				<div class="content-box big-box box-shadow gray-bg">
					<h4><strong>First</strong></h4>
					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9 slick-slide">
						<img src="https://tacohouse.us/images/webapp1.png" onclick="location.href='https://tacohouse.us/embyvites/webapp1.php'"style="
	width: 100%; border-radius:5px;">
</div>
<div class="col-lg-6">
	<div class="content-box big-box box-shadow gray-bg">
		<h4><strong>Second</strong></h4>
		<!-- 16:9 aspect ratio -->
		<div class="embed-responsive embed-responsive-16by9 slick-slide">
			<img src="https://tacohouse.us/images/webapp2.png" onclick="location.href='https://tacohouse.us/embyvites/webapp2.php'"style="
width: 100%; border-radius:5px;">
</div>

</html>
