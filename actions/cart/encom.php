<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/orders.php');

  if(!isset($_SESSION['username']) || empty($_SESSION['username'])) {
     echo 'Erro: Tem que fazer login';
     header('Location: ' . $BASE_URL);
  }

  createOrder($_SESSION['username'], $_GET['ids'], $_GET['quantidades'], $_GET['preco']);
  
  header('Location: ' . $BASE_URL. "pages/orders/showOrders.php");
?>