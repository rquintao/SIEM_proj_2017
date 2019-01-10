<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');  

  if (!$_POST['productname'] || !$_POST['price'] || !$_POST['stock']) {
    $_SESSION['field_errors']['addProdErr'] = 'É necessário colocar pelo menos o nome, preço e quantidade em stock do Produto';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  if(IsChecked('extra','destaques')) {
    $destaques = 'TRUE';
  } else {
    $destaques = 'FALSE';
  }

  if(IsChecked('extra','novidades')) {
    $novidades = 'TRUE';
  } else {
    $novidades = 'FALSE';
  }

  if(IsChecked('extra','promocoes')) {
    $promocoes = 'TRUE';
  } else {
    $promocoes = 'FALSE';
  }

  $productname = $_POST['productname'];
  $brand = $_POST['productbrand'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];
  $cat = $_POST['categoria'];
  $description = $_POST['description'];


  function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }

  $photo = $_FILES['photo'];
  $extension = end(explode(".", $photo["name"]));

  try {
    addProduct($productname, $brand, $price, $stock, $cat, $destaques, $novidades, $promocoes, $description);
    $id = getIdByName($productname);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/products/" . $id . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/products/" . $id . '.' . $extension, 0644);
  } catch (PDOException $e) {
  
    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate product';
      $_SESSION['field_errors']['name'] = 'Product name already exists';
    }
    else $_SESSION['field_errors']['addProdErr'] = 'Erro ao adicionar produto';

    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  include ($BASE_DIR . 'actions/products/product_list_creator.php');

  $_SESSION['success_messages']['addProd'] = 'Produto adicionado com sucesso';  
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
