
<?php
session_start();

require_once('include/db_connection.php');
require_once('include/headers.php');
require_once('config/config.php');

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$brand = $_POST["brand"];
$category = $_POST["category"];
$count = $_POST["count"];

$sql = "UPDATE items SET name='{$name}', price={$price}, description='{$description}', brand='{$brand}', category='{$category}', count={$count} WHERE id={$id}";
sql_query_update($sql);

header("Location: {$BASE_URL}inventory.php");
?>


