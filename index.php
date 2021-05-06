  <?php
  require_once('smarty/smtemplate.php');
  require_once('config/config.php');

  function getAllItems()
  {
    global $conn;
    $sql = "SELECT * FROM items";
    $result = mysqli_query($conn, $sql);

    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $items;
  }

  echo "global: " . isset($GLOBALS['conn']);


  $tpl = new SMTemplate();

  $data = array('items' => getAllItems());

  $route = 3;
  switch ($route) {
  case 1:
    $tpl->render('items_list', $data);
    break;
  case 2:
    $tpl->render('account');
    break;
  case 3:
    $tpl->render('edit_items', $data);
    break;
  case 4:
    $tpl->render('login');
    break;
  }


  ?>
