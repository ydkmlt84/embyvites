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
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
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
	<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
	</body>
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>	