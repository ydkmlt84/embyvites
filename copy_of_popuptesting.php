<?php
// Include functions if not already included
require_once('../../../functions.php');
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
    		padding-top:30px !important;
    		padding-bottom:12px !important;
		}
	input {
			text-align:center;
			border-radius:4px;
			display:inline-block;
		}
	a {
			text-decoration: none !important; 
		
		}
	.enjoy {
			font-size:24px;
			text-align: center;
			padding: 5px;
			text-shadow: 1px 1px #ffffff;
			font-family: Arial, Helvetica, sans-serif;
			font-weight: bold;
			color:#2da836;
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
    		width: 88%;
    		margin-left: auto;
    		margin-right: auto;
    		font-size: 20px;
		}
	#step2 {
			font-size:22px;
			color:#2da836;
	}
	#step2 a:hover {
			color:#fff !important;
	}
	.embyscreenshots {
		padding:5px;
		border-radius:6px;
		display: inline-block;
		margin-left:auto;
		margin-right:auto;
	}
	/*stuff for me to test the popup*/
	/* Popup container */
.popup {
    position: relative;
    display: block;
    cursor: pointer;
    color:#fff;
    font-size:40px;
}
#myPopup {
	font-size:15px;
	margin-left: auto;
    margin-right:auto;
}
/* The actual popup (appears on top) */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: indigo;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 6px 0;
    position: static;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: auto;
    margin-right:auto;
}
/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn .7s;
    animation: fadeIn .7s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
.popout1 {
	text-align:center;
}
/*end the popup stuff*/
</style>
	<body>
		<center><img src="https://tacohouse.us/images/taco_256.png" width=150px height=150px></center>
		<br>
		<div class="enjoy"> Finally! </div>
		<div class="leechers">
		    I am testing some popout stuff.
		</div><br>
	<div class=popout1><div class="popup" onclick="myFunction()">Click me!
  <span class="popuptext" id="myPopup"><img src=https://tacohouse.us/images/xbox.png width=256px height=256px></span>
		</div>
</div>
	</body>
	<script>
// When the user clicks on <div>, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
</html>	