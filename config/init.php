<?php
  session_set_cookie_params(3600, '/~ee12046/');
  session_start();

  $BASE_DIR = dirname(__DIR__).'/';
  $BASE_URL = '//gnomo.fe.up.pt/~ee12046/trabalhosSiem/trabalhoPHP-2/';

    $conn = new PDO('pgsql:host=db.fe.up.pt; dbname=siem1639', 'siem1639', '123456');
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->query('set search_path TO pecasrg');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
    
   // ($BASE_DIR . 'actions/products/product_list_creator.php'); //MUDAR QUANDO SE FIZER ADMIN


  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('ADMIN', $_SESSION['admin']);

  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
