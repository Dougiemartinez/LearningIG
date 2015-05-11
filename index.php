<?php 
	//Configuration for PHP server
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	//starts session
	session_start();
	//Make Constants using define
	define('client_ID', '025e77c43f93484fb23e475d3530c15c');
	define('client_Secret', '952be6ecb7d941f89de536e5fdd9d75e');
	define('redirectURI', 'http://localhost/maxapi/index.php');
	define('ImageDirectory', 'pics/');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width098, intitial-scale = 1">
	<title>InstApi</title>
	<meta rel="stylesheet" href="css/style.css">
	<meta rel="author" href="humans.txt">
</head>
<body>
	<!-- Creating a login for people to go and give approval for our web app to access their Instagram Account
		 After getting aprroval we are now going to have the information so that we can play with it.
	 -->
	<a href="https:api.instagram/oauth/authorize/?client_id= <?php echo client_ID; ?> &redirect_uri= <?php echo redirectURI; ?> &response_type=code">LOGIN</a>
	<script src="js/main.js"></script>
</body>
</html>

CLIENT ID	ebd393ddcaba4500a056cfa0ce5b944d
CLIENT SECRET	50f0ba8f32b0494588f35a13cdf7bd7b
WEBSITE URL	http://localhost/instagrampage/index.php
REDIRECT URI	http://localhost/instagrampage/index.php