<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');  

  if(!$_SESSION['admin']) {
    $_SESSION['error_messages']['headerMsg'] = 'É preciso ser administrador para aceder às funcionalidades pretendidas';
    header('Location: ' . $BASE_URL);
    exit;
  }
  
    try {
      removeProduct($_GET['id']);
    } catch (PDOException $e) {
      echo 'jhsgfd';
      die();
      $_SESSION['field_errors']['userAdminMsg'] = 'Error removing Product';
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit;
    }

  include ($BASE_DIR . 'actions/products/product_list_creator.php');

  header('Location: ' . $BASE_URL);
?>
