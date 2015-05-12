<?php 
	//Configuration for PHP server
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	//starts session
	session_start();
	//Make Constants using define
	define('clientID', 'a9eeb01471f54b6ebf5829cd6bf521ee');
	define('clientSecret', '3607ef7b33fb43419b910e82e2bb4260');
	define('redirectURI', 'http://localhost/LearningIG/index.php');
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
	<a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">Login to Instagram</a></li>
	<script src="js/main.js"></script>
</body>
</html>

