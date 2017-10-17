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
				<link rel="stylesheet" href="/embyvites/css/embyvites-style.css?v=<?php echo INSTALLEDVERSION; ?>">
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
					border-radius: 5px;
					opacity: 1 !important;

			}
</style>
	<body>
		<center><img src="/embyvites/images/thlogo.png" width=250px height=30px></center>
		<center><img src="/embyvites/images/taco_256.png" width=150px height=150px></center>
		<br>
			<div class="welcome-text">
				Welcome To Embyvites!
			</div><br>
		<div class="leechers">
		    Each button below is a link. They are numbered in the order you must complete each one. This is how
		    you get access to your next big thing.  You won't need that bogus Kodi stick anymore. Unless you're going to use
		    it with the Emby app. <div class="smiley"><img src="/embyvites/images/big emoticons 4.png" height="27" width="27"></img></div>
		</div>
		<br>
		<div class="hp-link col-sm-12 col-lg-12"> <a target="_blank" href="https://goo.gl/8iW7Ye">
            <div class="content-box green-bg slick-slide" style="cursor: pointer;">
<!-- Change "Your Text Here" with whatever you want the button to say -->
                <h1 style="margin: 10px" class="text-uppercase text-center"> <img src="/embyvites/images/pencil.png" height="27" width="27"></img> Step 1: sign up for emby connect then come back here. </h1>
                <div class="clearfix"></div>
             </div>
        </div></a>
        <div class="hp-link col-sm-12 col-lg-12">
            <div class="content-box orange-bg slick-slide"onclick="location.href='https://tacohouse.us/embyvites/provideinfo.php'"style="cursor: pointer;">
<!-- Change "Your Text Here" with whatever you want the button to say -->
                <h1 style="margin: 10px" class="text-uppercase text-center"><img src="/embyvites/images/mail.png"height="27" width="27"></img> Step 2: send me your contact information.</h1>
                <div class="clearfix"></div>
             </div>
        </div>
        <div class="hp-link col-sm-12 col-lg-12">
            <div class="content-box blue-bg slick-slide"onclick="location.href='https://tacohouse.us/embyvites/enjoy.php'"style="cursor: pointer;">
<!-- Change "Your Text Here" with whatever you want the button to say -->
                <h1 style="margin: 10px" class="text-uppercase text-center"><img src="/embyvites/images/emby.png" height="27" width="27"></img> Step 3: Enjoy Emby.</h1>
                <div class="clearfix"></div>
             </div>
        </div>


		</body>
</html>
