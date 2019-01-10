<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $users = getUserByUsername($_SESSION['username']);

  foreach ($users as $key => $user) {

      unset($photo);
      if (file_exists($BASE_DIR.'images/users/'.$user['username'].'.png'))
       $photo = 'images/users/'.$user['username'].'.png';
      if (file_exists($BASE_DIR.'images/users/'.$user['username'].'.jpg'))
        $photo = 'images/users/'.$user['username'].'.jpg';
      if (!$photo) $photo = 'images/users/default.png';
      $users[$key]['photo'] = $photo;
     }



  $smarty->assign('users', $users);
  $smarty->display('users/profile.tpl');
?>