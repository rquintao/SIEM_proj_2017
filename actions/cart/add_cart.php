<?php
   include_once('../../config/init.php');

  $prod_id = $_GET['prod_id'];

  if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
  if (!isset($_SESSION['cart'][$prod_id])) $_SESSION['cart'][$prod_id] = 0;

  $_SESSION['cart'][$prod_id]++;

  $_SESSION['success_message'] = 'Produto adicionado com sucesso!';
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
