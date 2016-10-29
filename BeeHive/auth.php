<?php
	session_start(); // Starting Session
	$error = '';

	if (isset($_POST['login'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Missing Fields";
		} else {
			// Define $username and $password
			$username = $_POST['username'];
			$password = $_POST['password'];
			require('includes/connect_db.php');
			// MYSQL injection filtering
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			
			$query = mysql_query("SELECT * FROM Users WHERE password='$password' AND email='$username'", $dbc);
			$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user'] = $username
				echo "HELLO";
				//header("location: profile.php");
			} else {
				$error = "Username of Password is invalid";
			}
			mysql_close($dbc);
		}
	}
?>
