<?php
// Include functions if not already included
require_once('../../../functions.php');
//Set variables

$admin_email="justin@turnedaround.net";
$title="Embyvites";
$baseURL="https://tacohouse.us";
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
		<link rel="stylesheet" href="../../../bower_components/animate.css/animate.min.css?v=<?php echo INSTALLEDVERSION; ?>">

		<link rel="icon" type="image/png" href="<?=$baseURL;?>/images/favicon/android-chrome-192x192.png" sizes="192x192">
		<link rel="apple-touch-icon" sizes="180x180" href="<?=$baseURL;?>/images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?=$baseURL;?>/images/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?=$baseURL;?>/images/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?=$baseURL;?>/images/favicon/manifest.json">
		<link rel="mask-icon" href="<?=$baseURL;?>/images/favicon/safari-pinned-tab.svg" color="#2d89ef">
		<link rel="shortcut icon" href="<?=$baseURL;?>/images/favicon/favicon.ico">
		<meta name="msapplication-config" content="<?=$baseURL;?>/images/favicon/browserconfig.xml">
		<meta name="theme-color" content="#2d89ef">
		<link rel="stylesheet" type="text/css" href="../../../css/addtohomescreen.css">
		<script src="../../../js/addtohomescreen.js"></script>
		<script src="../../../js/push.js"></script>
		<!--Other-->
		<script src="../../../js/ajax.js?v=<?php echo INSTALLEDVERSION; ?>"></script>
		<!--[if lt IE 9]>
		<script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
		<script src="bower_components/respondJs/dest/respond.min.js"></script>
		<![endif]-->
	</head>	
	<style>
	
	body {
    	background-color: #242424;
		}
	.welcome-text {
		font-size:20px;
		text-align: center;
		padding: 5px;
		}
	input {
			text-align:center;
			border-radius:4px;
			display:inline-block;
		}
	.entry-field {
			text-align:center;
		}
	.fields-labels {
			display:inline-block;
		}
	.leechers {
		   text-align: center;
    		color: #ffffff;
    		background: #545454;
    		padding-left: 5px;
    		padding-right: 5px;
    		display: block;
    		border: 1px solid black;
    		border-radius: 4px;
    		width: 700px;
    		margin-left: auto;
    		margin-right: auto;
		}	
	body > div.hp-link.col-sm-6.col-lg-6{
    		width: 480px;
    		margin-left: auto;
    		margin-right: auto;
    		float: none;
		}
	</style>
	<body>
		<center><img src="https://tacohouse.us/images/taco_256.png" width=150px height=150px></center>
		<center><img src="https://tacohouse.us/images/thlogo.png" width=250px height=30px></center><br>
			<div class="welcome-text">
				Welcome To Emby Signup!
			</div><br>
		<div class="leechers">
			If you already know that you want what we have, click continue below. If you're not sure, check out
			<a href="https://tacohouse.us/emby"><b>TacoHouse Emby</b></a> and sign is as the Leecher user. You will be able
			to browse the library, but you will not be able to play anything. If you like what you see, then come back here 
			and click continue below.
		</div>
		<br>
		<div class="hp-link col-sm-6 col-lg-6">
            <div class="content-box red-orange-bg" style="cursor: pointer;">
<!-- Change "Your Text Here" with whatever you want the button to say -->
                <h1 style="margin: 10px" class="text-uppercase text-center">Continue to Signup</h1>
                <div class="clearfix"></div>
             </div>
        </div>
		
		</body>	
</html>

