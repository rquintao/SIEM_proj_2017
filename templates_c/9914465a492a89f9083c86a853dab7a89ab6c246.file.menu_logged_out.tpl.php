<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 15:49:11
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171599162758494bfe039368-58670220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9914465a492a89f9083c86a853dab7a89ab6c246' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_out.tpl',
      1 => 1485445697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171599162758494bfe039368-58670220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58494bfe0485a6_61495720',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58494bfe0485a6_61495720')) {function content_58494bfe0485a6_61495720($_smarty_tpl) {?><!-- <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
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
