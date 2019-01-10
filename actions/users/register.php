<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['username'] || !$_POST['realname'] || !$_POST['password'] || !$_POST['regpassword2'] || !$_POST['regemail']) {
    $_SESSION['field_errors']['top'] = 'É obrigatório preencher todos os campos marcados com *';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $nome = test_input($_POST["realname"]);
  $username = test_input($_POST["username"]);
  $email = test_input($_POST["regemail"]);
  $telemovel = test_input($_POST["regtelemovel"]);
  $pass1 = $_POST["password"];
  $pass2 = $_POST["regpassword2"];
  if($pass1 != $pass2) {
    $_SESSION['field_errors']['top'] = 'As palavras-chave devem coincidir';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }
  if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    $_SESSION['field_errors']['email'] = 'Email inválido';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }


  function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }

  $realname = strip_tags($_POST['realname']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];

  $photo = $_FILES['photo'];
  $extension = end(explode(".", $photo["name"]));

  try {
    createUser($realname, $username, $password, $email, $telemovel, $_POST['regendereco1'], $_POST['regendereco2'], $_POST['regcodpostal'], $_POST['regcidade'], $_POST['regregiao'], $_POST['regpais']);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
  } catch (PDOException $e) {
  
    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");
?>
