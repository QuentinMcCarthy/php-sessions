<?php
	ob_start();
	session_start();

	$msg = "";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Sessions</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body style="padding: 10% 30%;">
		<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<h4><?= $msg ?></h4>
			<div class="form-group">
				<label for="username">Email address</label>
				<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</body>
</html>
