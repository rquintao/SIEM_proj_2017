<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');
$semaforo = 0;
$array = array();
$qtcarrinho = array();

  if(!isset($_COOKIE['cart'])) {
     $semaforo = 1;
  }
if ($semaforo==0){

        $jsonIterator = new RecursiveIteratorIterator(
            new RecursiveArrayIterator(json_decode($_COOKIE["cart"], TRUE)),
            RecursiveIteratorIterator::SELF_FIRST);

        foreach ($jsonIterator as $key => $val) {
            if(is_array($val)) {
                if(strcmp("$key","item")==0) {
                  foreach ($val as $key => $vals) {
                   array_push($array, $vals);
                  }
                }

                if(strcmp("$key","quantidade")==0) {
                  foreach ($val as $key => $vals) {
                   array_push($qtcarrinho, $vals);
                  }
                }
           }
        }

        $products = getProductsFromCookie($array);



    foreach ($products as $key => $product) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/products/'.$product['id'].'.png'))
       $photo = 'images/products/'.$product['id'].'.png';
      if (file_exists($BASE_DIR.'images/products/'.$product['id'].'.jpg'))
        $photo = 'images/products/'.$product['id'].'.jpg';
      if (!$photo) $photo = 'images/assets/default.png';
      $products[$key]['photo'] = $photo;
      $products[$key]['quantidadecarrinho'] = $qtcarrinho[$key];
     }

 

   $smarty->assign('products', $products);
   }
  $smarty->display('products/list.tpl');


?>
