<?php
require_once('smarty/smtemplate.php');
require_once('config/config.php');

function getAvailableItems() {
  global $conn;
  $sql = "SELECT * FROM items WHERE count>0";
  $result = mysqli_query($conn, $sql);

  $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $items;
}



$tpl = new SMTemplate();


$route = 2;

if ($route == 1){
  // display a list of items
  $data = array('items' => json_encode(getAvailableItems()));
  $tpl->render('items_list', $data);
} elseif ($route == 2){
  $tpl->render('account');
}


?>
