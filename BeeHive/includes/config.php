<?php
    echo "is that db server thar";
	define('DB_SERVER', '127.0.0.1:3306');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'team8');
	define('DB_DATABASE', 'Beehive');
	
	$dbc = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
	
