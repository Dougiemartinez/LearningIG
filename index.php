<?php 
	//Configuration for PHP server
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	//starts session
	session_start();
	//Make Constants using define
	define('clientID', 'fa4f7acd50714993b75b95ab5e3745fb');
	define('clientSecret', 'c35a94b5e3d64f0f9677b63c72a99532');
	define('redirectURI', 'http://localhost/douglasAPI/index.php');
	define('ImageDirectory', 'pics/');
	// if (isset($_GET['code'])) {
	// 	$code = ($_GET['code']);
	// 	$url = 'https://api.instagram.com/oauth/access_token';
		// $access_token_settings = array('client_id' => clientID,
		// 							   	'client_secret' => clientSecret,
		// 								'grant_type' => 'authorization_code',
		// 								'redirect_uri' => redirectURI, 
		// 								'code' => $code);
	//}
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- <meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width098, intitial-scale = 1"> -->
		<title>InstApi</title>
		<!-- <meta rel="stylesheet" href="css/style.css">
		<meta rel="author" href="humans.txt"> -->
	</head>
	<body>
		
		<h2><center>Welcome<center></h2> 
		<div><a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code"><h1><center>LOGIN TO INSTAGRAM</center></h1></a></div>
		<script src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="main.css">
		<body background="images../bgimage2.jpg">
		<!-- <body background="images../bgimage2.jpg"> -->

        
	</body>
</html>