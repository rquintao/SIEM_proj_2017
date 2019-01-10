<?php

 
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/users.php');

if($_POST['profile']==1) {
	$smarty->assign('FORM_VALUES', $_POST);
}

$smarty->assign('users', $_POST);
$smarty->assign('datachange', TRUE);

$smarty->display('users/register.tpl');
?>
