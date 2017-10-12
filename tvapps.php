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
	
	.embyscreenshots {
		padding:5px;
		border-radius:6px;
		display: inline-block;
		margin-left:auto;
		margin-right:auto;
	}
/*gallery images*/
div.gallery {
    border-radius:6px;
}

div.gallery:hover {

}

div.gallery img {
    width: 95%;
    height: 300px;
    border-top-left-radius:6px;
    border-top-right-radius:6px;
}

div.desc {
    padding: 15px;
    text-align: center;
    background: #42b382;
    text-transform:uppercase;
    color:#ffffff;
    font-size:24px;
    width:95%;
    cursor:default;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 6px 6px;
    float:left;
    margin-left:55px;
    width: 45%;
    display:block;
    
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
/* This block will give you some animations when hovering over the "Recently Added" items (v1.38) */
        .slick-slide img {
            max-width: 100%;
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }
        .slick-slide:hover img {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(.983);
            z-index: 10000000;
            border-top-left-radius: 7px;
            border-top-right-radius: 7px;
            opacity: 1 !important;
            
        }
        .whole-gallery {
        	margin-left:auto;
        	margin-right:auto;
        	float:none;
        }
</style>
	<body>
		<center><img src="https://tacohouse.us/images/taco_256.png" width=150px height=150px></center>
		<br>
		<div class="enjoy"> Finally! </div>
		<div class="leechers">
		    I am testing some stuff.
		</div><br>
	</body>
<!--gallery stuff-->
<!--/////////////-->
<!--/////////////-->
<!--/////////////-->

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://emby.media/emby-theater-xboxone.html">
      <div class="slick-slide"><img src="https://tacohouse.us/images/xbox.png" alt="XBoxONE" width="300" height="200">
    </div></a>
    <div class="desc">XboxONE</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://emby.media/emby-for-roku.html">
      <div class="slick-slide"><img src="https://tacohouse.us/images/rokuhome1.jpg" alt="Roku" width="300" height="200">
    </a></div>
    <div class="desc">Roku</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://emby.media/emby-for-appletv.html">
      <div class="slick-slide"><img src="https://tacohouse.us/images/appletv.png" alt="AppleTV" width="300" height="200">
    </a></div>
    <div class="desc">AppleTV</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://emby.media/emby-for-fire-tv.html">
      <div class="slick-slide"><img src="https://tacohouse.us/images/amazonemby.png" alt="Amazon" width="300" height="200">
    </a></div>
    <div class="desc">FireTV</div>
  </div>
</div>



<div class="clearfix"></div>

<div style="padding:6px;">
  <p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
</div>
	<script>

</script>
</html>	