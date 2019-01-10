<?php
  
  function getAllProducts() {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM produtos");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getAllProductsSearch() {
    global $conn;
    $stmt = $conn->prepare("SELECT id, nome 
                            FROM produtos");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getProductById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM produtos
                            WHERE id = ? ");
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function getNProducts($n) {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM produtos
                            ORDER BY RANDOM()
                            LIMIT ?");
    $stmt->execute(array($n));
    return $stmt->fetchAll();
  }

  function getProductsFromCookie($ids) {
   global $conn;

   $str1 = 'SELECT * 
           FROM produtos
           WHERE';
 
   for($i=0 ; $i < sizeof($ids)-1; $i++){

    $str1 = $str1 . " id = ? OR";
    
   }
   
   $str1 = $str1 . " id = ?;";

   $stmt = $conn->prepare($str1);
   $stmt->execute($ids);
   return $stmt->fetchAll();
 }
 
 function removeProduct($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM produtos WHERE id=?");
    $stmt->execute(array($id));
  }

  function addProduct($name, $brand, $price, $stock, $categoria, $destaques, $novidades, $promocoes, $description) {

    global $conn;
    $stmt = $conn->prepare("INSERT INTO produtos (nome, descricao, preco, qtstock, marca, destaque, novidade, promocao, categoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute(array($name, $description, $price, $stock, $brand, $destaques, $novidades, $promocoes, $categoria));
  }

  function getIdByName($name) {
    global $conn;
    $stmt = $conn->prepare("SELECT id
                            FROM produtos
                            WHERE nome = ?");
    $stmt->execute(array($name));

    return $stmt->fetch()['id'];
  }

  function getProductsIn($cat, $dest) {
    global $conn;

    if($dest) {
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE categoria = ? AND destaque = 'TRUE'");
      $stmt->execute(array($cat));
    } else {
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE categoria = ?");
      $stmt->execute(array($cat));
    }
    return $stmt->fetchAll();
  }

  function getDestaques() {
    global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE destaque = 'TRUE'
                              ORDER BY RANDOM()");
      $stmt->execute();
   
    return $stmt->fetchAll();
  }

  function getNovidades() {
    global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE novidade = 'TRUE'
                              ORDER BY RANDOM()");
      $stmt->execute();
   
    return $stmt->fetchAll();
  }

  function getPromocoes() {
    global $conn;
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE promocao = 'TRUE'
                              ORDER BY RANDOM()");
      $stmt->execute();
   
    return $stmt->fetchAll();
  }

  function getExtras($ex) {
    global $conn;

    if($ex=='1') {
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE destaque = 'TRUE'");
      $stmt->execute();
    } else if($ex=='2') {
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE novidade = 'TRUE'");
      $stmt->execute();
    } else if($ex=='3') {
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE promocao = 'TRUE'");
      $stmt->execute();
    }
    return $stmt->fetchAll();
  }
  

  function getSearch($s) {
    global $conn;
    $s='%'.$s.'%';
      $stmt = $conn->prepare("SELECT *
                              FROM produtos
                              WHERE nome iLIKE ?;");
      $stmt->execute(array($s));
   
    return $stmt->fetchAll();
  }


 ?>
