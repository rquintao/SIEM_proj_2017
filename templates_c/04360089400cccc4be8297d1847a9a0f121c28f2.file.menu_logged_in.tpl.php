<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 17:16:00
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151026133258495e579a7ce2-70859211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04360089400cccc4be8297d1847a9a0f121c28f2' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl',
      1 => 1485450957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151026133258495e579a7ce2-70859211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58495e579b7506_20462343',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'photo' => 0,
    'ADMIN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58495e579b7506_20462343')) {function content_58495e579b7506_20462343($_smarty_tpl) {?><!-- <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
 -->

  <?php if (file_exists(((('../../').('images/users/')).($_smarty_tpl->tpl_vars['USERNAME']->value)).('.jpg'))) {?>
      <?php $_smarty_tpl->tpl_vars['photo'] = new Smarty_variable(((('../../').('images/users/')).($_smarty_tpl->tpl_vars['USERNAME']->value)).('.jpg'), null, 0);?>
  <?php } elseif (file_exists(((('../../').('images/users/')).($_smarty_tpl->tpl_vars['USERNAME']->value)).('.png'))) {?>
      <?php $_smarty_tpl->tpl_vars['photo'] = new Smarty_variable(((('../../').('images/users/')).($_smarty_tpl->tpl_vars['USERNAME']->value)).('.png'), null, 0);?>
  <?php } else { ?>
      <?php $_smarty_tpl->tpl_vars['photo'] = new Smarty_variable(('../../').('images/users/default.png'), null, 0);?>
  <?php }?>

<nav id="navigation">
            <ul class="parent">
              <li class="headerProfile" id="username" style="float: right; margin-right: 15%"><img style="position:relative; top:25px; width: auto; height: 60px;" src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
"><div style="margin-bottom: 0px;"><br><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</div>
                <ul class="child">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/showProfile.php">Perfil</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/orders/showOrders.php">Encomendas</a></li>
                  <?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/adminSettings.php">Definições Administrador</a></li>
                  <?php }?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></li>
                </ul>
                </li>
            </ul>
         </nav><?php }} ?>
