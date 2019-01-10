<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Preencha todos os campos!';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['success_messages'][] = 'Login feito com Sucesso';
    $_SESSION['admin'] = checkAdmin($username);
  } else {
    $_SESSION['error_messages'][] = 'Combinação Username/Password errada!';
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
