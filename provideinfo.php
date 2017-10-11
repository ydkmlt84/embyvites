<?php
// Include functions if not already included
require_once('../../../functions.php');
//Set variables

$admin_email="justin@turnedaround.net";
$title="Embyvites";
$baseURL="https://tacohouse.us";

//Email Function Testing//
if(isset($_POST['submit'])){
    $to = "justin@turnedaround.net"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $relationship= $_POST['relationship'];
    $embyconnect = $_POST['embyconnect'];
    $subject = "Embyvite Contact Info/Request";
    $message = 	$first_name . " " . $last_name . " " . "wants to join Emby and has added this information:" . "\n\n" . $relationship
    			. "\n\n " .  "Their Emby Connect Username is -" . $embyconnect . "\n\n" . "Their email address is -" . $from;
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: https://tacohouse.us/Embyvites/emailconfirm.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<html>
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
    	padding-top:12px !important;
    	padding-bottom:12px !important;
		}
		input {
			text-align:center;
			border-radius:4px;
			display:inline-block;
			width:200px;
		}
	.entry-field {
			text-align:center;
		}
	.large-entry-field {
			text-align:center;
			display:block;
	}
	textarea#relationship {
		height:100px;
		width:300px;
		border-radius:4px;
	}
	.fields-labels {
			display:block;
			text-align:center;
			color:#2da836;
			text-shadow: 1px 1px #ffffff;
			font-weight: bold;
			font-size:20px;
		}
	.hp-link1 {
			width:300px !important;
			display:block;
			margin-left: auto;
    		margin-right: auto;
    		float: none;
	}	
	a { text-decoration: none !important; }
	input#submit {
		background: #3f51b5;
		display:block;
		margin-left:auto;
		margin-right:auto;
		width:300px;
		text-align:center;
		cursor:pointer;
		text-transform:uppercase;
		overflow:hidden;
		font-family: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		font-size:24px;
		color:#fff;
		border:none;
		font-weight:500;
	</style>
	<body>

		<center><img src="https://tacohouse.us/images/taco_256.png" width=119px height=119px></center>
		<br>
			<form action="" method= "post"><div class="fields-labels"> Name </div><br>
			<div class="entry-field">
                <input type="text" name="first_name" required="required" placeholder="First Name">
                        <input type="text" name="last_name" required="required" placeholder="Last Name">
			</div><br>
			<div class="fields-labels"> Email Address / Emby Connect Username </div><br>
			<div class="entry-field">
                <input type="text" name="email" required="required" placeholder="something@email.com">
                	<input type="text" name="embyconnect" required="required" placeholder="embyconnectusername">
            </div><br>
            <div class="fields-labels"> How do we know each other? </div><br>
			<div class="large-entry-field">
                <textarea id="relationship" name= "relationship" required="required" wrap="soft" maxlength="150"
                placeholder="Say something brief that tells me how we know each other, or how you found out about Emby."></textarea>
            </div><br>
		    <input type="submit" name="submit" value="Send It" id="submit">   
		</form>    
	</body>
</html> 