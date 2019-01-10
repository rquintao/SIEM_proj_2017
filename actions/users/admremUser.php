<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if(!$_SESSION['admin']) {
    $_SESSION['error_messages']['headerMsg'] = 'É preciso ser administrador para aceder às funcionalidades pretendidas';
    header('Location: ' . $BASE_URL);
    exit;
  }

  if (!$_POST['user'] || !$_POST['changeUser']) {
    $_SESSION['field_errors']['userAdminMsg'] = 'Por favor preencha todos os campos';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  if(!checkIfExists($_POST['user'])) {
    $_SESSION['field_errors']['userAdminMsg'] = 'Introduza um nome de utilizador válido';
    header('Location: ' . $BASE_URL);
    exit;
  }

  if($_POST['changeUser']=='makeAdmin') {
    try {
      makeAdmin($_POST['user']);
    } catch (PDOException $e) {
      $_SESSION['field_errors']['userAdminMsg'] = 'Error creating user';
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit;
    }
    $_SESSION['success_messages']['userAdminMsg'] = 'Utilizador introduzido é agora Administrador';
  } else if($_POST['changeUser']=='removeUser') {
    try {
      removeUser($_POST['user']);
    } catch (PDOException $e) {
      $_SESSION['field_errors']['userAdminMsg'] = 'Error removing user';
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit;
    }
    $_SESSION['success_messages']['userAdminMsg'] = 'Utilizador removido com sucesso';
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
