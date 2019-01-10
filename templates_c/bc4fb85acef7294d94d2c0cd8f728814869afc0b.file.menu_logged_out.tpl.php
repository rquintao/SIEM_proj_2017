<?php /* Smarty version Smarty-3.1.15, created on 2017-01-13 13:09:28
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:406530419584562060c2010-55007801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4fb85acef7294d94d2c0cd8f728814869afc0b' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_out.tpl',
      1 => 1484104794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406530419584562060c2010-55007801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58456206109555_62937704',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58456206109555_62937704')) {function content_58456206109555_62937704($_smarty_tpl) {?><!-- <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a> -->

		<div class="coluna" id="container_caixas">
			
		<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
		  <div class="caixastexto"> <input type="text" placeholder="username" name="username"> </div>
		  <div class="caixastexto"> <input type="password" placeholder="password" name="password"> </div>
		  <input id="botao_login" type="submit" value="Login">
		  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php" style="font-size: 92%; padding: 10%;">Registar</a>
		</form>

		</div>

<?php }} ?>
