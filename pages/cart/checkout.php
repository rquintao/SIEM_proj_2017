<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $adress = getAdressByUsername($_SESSION['username']);
  foreach ($adress as $key => $elem) {

        if(strcmp($elem['endereco1'],"") != 0) {
          $morada = $morada . $elem['endereco1'] . "; ";
        }
        if(strcmp($elem['endereco2'],"") != 0) {
          $morada = $morada . $elem['endereco2'] . "; ";
        }
        if(strcmp($elem['regiao'],"") != 0) {
          $morada = $morada . $elem['regiao'] . "; ";
        }
        if(strcmp($elem['codpostal'],"") != 0) {
          $morada = $morada . $elem['codpostal'] . " ";
        }
        if(strcmp($elem['cidade'],"") != 0) {
          $morada = $morada . $elem['cidade'] . "; ";
        }
        if(strcmp($elem['pais'],"") != 0) {
          $morada = $morada . $elem['pais'];
        }

    }

    $smarty->assign('morada', $morada);
  $smarty->display('products/checkout.tpl');

?>

