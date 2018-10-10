<?php
	session_start();

	unset($_SESSION["username"]);

	header("Refresh:2; URL=login.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Logged out</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<h1>You have been logged out successfully.</h1>
		<h2>If you are not redirected in 2s</h2>
		<h2>Click <a href="login.php">here</a> to return</h2>
	</body>
</html>
