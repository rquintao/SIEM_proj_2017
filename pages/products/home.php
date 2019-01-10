<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');

   $destaques = getDestaques();  

    foreach ($destaques as $key => $destaque) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/products/'.$destaque['id'].'.png'))
       $photo = 'images/products/'.$destaque['id'].'.png';
      if (file_exists($BASE_DIR.'images/products/'.$destaque['id'].'.jpg'))
        $photo = 'images/products/'.$destaque['id'].'.jpg';
      if (!$photo) $photo = 'images/assets/default.png';
      $destaques[$key]['photo'] = $photo;
    }

  $novidades = getNovidades();  

    foreach ($novidades as $key => $novidade) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/products/'.$novidade['id'].'.png'))
       $photo = 'images/products/'.$novidade['id'].'.png';
      if (file_exists($BASE_DIR.'images/products/'.$novidade['id'].'.jpg'))
        $photo = 'images/products/'.$novidade['id'].'.jpg';
      if (!$photo) $photo = 'images/assets/default.png';
      $novidades[$key]['photo'] = $photo;
    }

  $promocoes = getPromocoes();  

    foreach ($promocoes as $key => $promocao) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/products/'.$promocao['id'].'.png'))
       $photo = 'images/products/'.$promocao['id'].'.png';
      if (file_exists($BASE_DIR.'images/products/'.$promocao['id'].'.jpg'))
        $photo = 'images/products/'.$promocao['id'].'.jpg';
      if (!$photo) $photo = 'images/assets/default.png';
      $promocoes[$key]['photo'] = $photo;
    }

 

   $smarty->assign('destaques', $destaques);
   $smarty->assign('novidades', $novidades);
   $smarty->assign('promocoes', $promocoes);
  $smarty->display('products/listSquare.tpl');


?>

