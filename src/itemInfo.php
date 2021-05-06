<?php

include('db_connection.php');

$id = $_REQUEST["id"];
$sql = "SELECT * FROM items WHERE id=" . $id;
$item = sql_query($sql);

print_r($item);

?>
