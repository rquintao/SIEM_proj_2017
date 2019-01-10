<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/orders.php');

  $orders = getOrdersFromUser($_SESSION['username']);

  $smarty->assign('orders', $orders);
  $smarty->display('products/listOrders.tpl');

?>
