<?php
  session_start();

  $host = "127.0.0.1";
  $username = "root";
  $password =  "4008458";
  $dbname = "simple_system";
  $port = 3306;

  // mysqli_connect(host, username, password, dbname, port, socket)
  $conn = mysqli_connect($host, $username, $password, $dbname, $port);

  if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

  define('ROOT_PATH', realpath(dirname(__FILE__)));
  define('BASE_URL', 'http://localhost:8080/simple-system/');
?>

