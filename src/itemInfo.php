<?php

// require_once('../config/config.php');

$id = $_REQUEST["id"];

// global $conn;
// $sql = "SELECT * FROM items WHERE id=" . $id;
// $result = mysqli_query($conn, $sql);
// 
// $item = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "hello from backend, item id: " . $id . ", global: " . json_encode($GLOBALS);
print_r($GLOBALS);


?>
