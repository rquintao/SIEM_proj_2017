<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');
  include_once($BASE_DIR .'actions/products/pagination3.php');

  $s= $_POST['caixapesquisa'];
  $_SESSION['form_values'] = $_POST;
  $products = getSearch($s);

  $msg='RESULTADOS DE PESQUISA PARA "'.$s.'"';

    foreach ($products as $key => $product) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/products/'.$product['id'].'.png'))
       $photo = 'images/products/'.$product['id'].'.png';
      if (file_exists($BASE_DIR.'images/products/'.$product['id'].'.jpg'))
        $photo = 'images/products/'.$product['id'].'.jpg';
      if (!$photo) $photo = 'images/assets/default.png';
      $products[$key]['photo'] = $photo;
     }

  $ppage=intval($_GET['ppage']);
  if($ppage!=intval($_POST['ppage']) && intval($_POST['ppage'])!=0) {
    $ppage=intval($_POST['ppage']);
  }
  
  if($ppage<=0)  $ppage  = 8;
  $pages = ceil(count($products)/$ppage);

  $page   = intval($_GET['page']);
  if(isset($_POST['ppage'])) $ppage=intval($_POST['ppage']);

  $tpages = $pages; 
  $adjacents  = intval($_GET['adjacents']);

  if($page<=0)  $page  = 1;
  
  if($adjacents<=0) $adjacents = 4;

  $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages . "&amp;adjacents=" . $adjacents . "&ppage=" . $ppage;
  $out = paginate_three($reload, $page, $tpages, $adjacents, $ppage);

  $smarty->assign('msg', $msg);
  $smarty->assign('pag', $page);
  $smarty->assign('ppag', $ppage);
  $smarty->assign('pagination', $out);
  $smarty->assign('products', $products);
  $smarty->display('products/listSquarePages.tpl');


?>

