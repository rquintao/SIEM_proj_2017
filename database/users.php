<?php
  
  function createUser($realname, $username, $password, $email, $telemovel, $end1, $end2, $codpostal, $cidade, $regiao, $pais) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($username, $realname, sha1($password), $email, $telemovel, $end1, $end2, $codpostal, $cidade, $regiao, $pais));
  }

  function updateUser($realname, $username, $password, $email, $telemovel, $end1, $end2, $codpostal, $cidade, $regiao, $pais) {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET realname=?, password=?, email=?, telemovel=?, endereco1=?, endereco2=?, codpostal=?, cidade=?, regiao=?, pais=? WHERE username=?");
    $stmt->execute(array($realname, sha1($password), $email, $telemovel, $end1, $end2, $codpostal, $cidade, $regiao, $pais, $username));
  }

  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM users 
                            WHERE username = ? AND password = ?");
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }

  function checkAdmin($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT admin 
                            FROM users 
                            WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetch()['admin'];
  }

  function getAdressByUsername($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT endereco1, endereco2, codpostal, cidade, regiao, pais
      FROM users
      WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

  function getUserByUsername($username){
     global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE username= ? ");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

  function checkIfExists($username){
     global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE username= ? ");
    $stmt->execute(array($username));
    return $stmt->fetch() == true;
  }

  function makeAdmin($username) {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET admin=TRUE WHERE username=?");
    $stmt->execute(array($username));
  }

  function removeUser($username) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM users WHERE username=?");
    $stmt->execute(array($username));
  }

?>
