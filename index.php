  <?php
  require_once('smarty/smtemplate.php');
  require_once('config/config.php');
  require_once('src/db_connection.php');

  function getAllItems()
  {
    $conn = openConn();
    $sql = "SELECT * FROM items";
    $result = mysqli_query($conn, $sql);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    closeConn($conn);
    return $items;
  }


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
