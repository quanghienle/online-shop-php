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


  $tpl = new SMTemplate();

  $data = array('items' => getAllItems());

  $route = 3;

  if ($route == 1) {
    // display a list of items
    $tpl->render('items_list', $data);
  } elseif ($route == 2) {
    $tpl->render('account');
  } elseif ($route == 3) {
    $tpl->render('edit_items', $data);
  }


  ?>
