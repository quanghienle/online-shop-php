
<?php
session_start();

require_once('include/db_connection.php');
require_once('include/headers.php');
require_once('config/config.php');

$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$brand = $_POST["brand"];
$category = $_POST["category"];
$count = $_POST["count"];

$sql = "INSERT INTO items (`name`, `description`, `price`, `count`, `image`, `category`, `brand`) VALUES ('{$name}', '{$description}', {$price}, {$count}, 'public/images/guitar3.png', '{$category}', '{$brand}')";
sql_query_update($sql);

header("Location: {$BASE_URL}inventory.php");
?>


