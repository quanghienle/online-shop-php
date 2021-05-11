<?php
session_start();

include('include/db_connection.php');
include('include/headers.php');

$method = $_SERVER['REQUEST_METHOD'];
$success = false;
if ($method == "DELETE") {
    $id = $_REQUEST["id"];
    $sql = "DELETE FROM items WHERE id={$id}";
    $result = sql_query_update($sql);
    $success = true;
}

$res = array('success'=>$success);
echo json_encode($res);

