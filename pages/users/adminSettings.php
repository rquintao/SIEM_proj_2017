<?php
  include_once('../../config/init.php');

  if($_SESSION['admin'])
    $smarty->display('users/admin.tpl');
  else {
    //Colocar mensagem de erro
    header('Location: ' . $BASE_URL);
    exit;
  }



?>