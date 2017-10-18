<?php
// Include functions if not already included
require_once('../functions.php');
//Set variables

$admin_email="justin@turnedaround.net";
$title="Embyvites";
$baseURL="https://tacohouse.us/";

//Email Function Testing//
if(isset($_POST['submit'])){
    $to = "justin@turnedaround.net";
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $relationship= $_POST['relationship'];
    $embyconnect = $_POST['embyconnect'];
    $subject = "Embyvite Contact Info/Request";
    $message = 	$first_name . " " . $last_name . " " . "wants to join Emby and has added this information:" . "\n\n" . $relationship
    			. "\n\n " .  "Their Emby Connect Username is -" . $embyconnect . "\n\n" . "Their email address is -" . $from;
    $headers = "From:" . $from;
        //Email to the person requesting
    $subject2 = "Your Emby Connect info has been sent";
    $message2= "Thank you" . " " . $first_name . " " . $last_name. "." . " " . "Your Emby Connect information has been sent to me." . "\n\n" .
    "I have to enter your information into my server and you should receive an invite soon.
    If you have not received an invite approx. 2 hours, from the time you received this, please contact me and let me know." . "\n\n" . "Welcome to TacoHouse Inc.";
    $headers2= "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    header('Location: /embyvites/emailconfirm.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
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
  #taco {
  	height: 100px;
  	width: 100px;
  }
  .hp-link {
    margin-left: auto;
    margin-right: auto;
    float: none;
  }
  </style>
	<body>
    <div class="logo">
		    <img id="taco" src="/embyvites/images/taco_256.png">
    </div>
    <div class="provideinfo">
			<form action="" method= "post">
            <div class="heading-text"> Name </div>
			          <input type="text" name="first_name" required="required" placeholder="First Name">
                <input type="text" name="last_name" required="required" placeholder="Last Name">

		        <div class="heading-text"> Email Address / Emby Connect Username </div>
			          <input type="text" name="email" required="required" placeholder="something@email.com">
                <input type="text" name="embyconnect" required="required" placeholder="embyconnectusername">

            <div class="heading-text"> How do we know each other? </div>
			          <textarea id="relationship" name= "relationship" required="required" wrap="soft" maxlength="150"
                placeholder="Say something brief that tells me how we know each other, or how you found out about Emby.(max character-150)"></textarea>

		        <div class="slick-slide"> <input type="submit" name="submit" value="Send It" id="submit"></div>
      </form>
    </div>
    <div class="buttons">
      <div class="hp-link col-sm-4 col-lg-4">
            <div class="content-box red-orange-bg slick-slide text-uppercase text-center" onclick="location.href='/embyvites/'">
                <h1 style="margin: 10px">Back to Embyvites</h1>
            </div>
        </div>
			</div>
	</body>
</html>
