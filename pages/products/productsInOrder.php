<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');

  $ids = explode(",", $_GET['ids']);
  $quantidades = explode(",", $_GET['quantidades']);

  $products = getProductsFromCookie($ids);



    foreach ($products as $key => $product) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/products/'.$product['id'].'.png'))
       $photo = 'images/products/'.$product['id'].'.png';
      if (file_exists($BASE_DIR.'images/products/'.$product['id'].'.jpg'))
        $photo = 'images/products/'.$product['id'].'.jpg';
      if (!$photo) $photo = 'images/assets/default.png';
      $products[$key]['photo'] = $photo;
     }

 

   $smarty->assign('products', $products);
   $smarty->assign('productsquantidades', $quantidades);
  $smarty->display('products/listInOrder.tpl');


?>
