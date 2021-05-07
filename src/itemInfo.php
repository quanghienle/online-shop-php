<?php

include('db_connection.php');

$id = $_REQUEST["id"];
$sql = "SELECT * FROM items WHERE id={$id} LIMIT 1";
$item = sql_query($sql)[0];

echo json_encode($item);

?>
