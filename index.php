  <?php

  session_start();

  require_once('smarty/smtemplate.php');
  require_once('config/config.php');
  require_once('src/db_connection.php');

  $tpl = new SMTemplate();

  function getAllItems()
  {
    $sql = "SELECT * FROM items";
    $items = sql_query($sql);
    return $items;
  }

  if (isset($_POST['goto'])) {
    $nextPage = $_POST['goto'];
    // if (isset($_POST['userInfo'])) {
    //   $info = $_POST['userInfo'];
    //   $_SESSION['username'] = $info['name'];
    //   $_SESSION['role'] = $info['role'];
    // }

    switch ($nextPage) {
      case 'items_table':
        $data = array('items' => getAllItems());
        $tpl->fetchAssign('items_table', $data);
        break;
      case 'items_list':
        $data = array('items' => getAllItems());
        $tpl->fetchAssign('items_list', $data);
        break;
      case 'item_info':
        $tpl->fetchAssign('item_info', json_decode($_POST['data']));
        break;
    }
  } else {
        $tpl->render('login');
  }




  // $route = 4;
  // 
  // switch ($route) {
  // case 1:
  //   $tpl->render('items_list', $data);
  //   break;
  // case 2:
  //   $tpl->render('account');
  //   break;
  // case 3:
  //   $tpl->render('edit_items', $data);
  //   break;
  // case 4:
  //   $tpl->render('login');
  //   break;
  // }


  ?>
