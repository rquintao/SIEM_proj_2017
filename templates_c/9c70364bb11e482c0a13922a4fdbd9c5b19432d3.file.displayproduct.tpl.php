<?php /* Smarty version Smarty-3.1.15, created on 2017-01-17 17:39:27
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/displayproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:358400918587e56cfc542b7-57225393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c70364bb11e482c0a13922a4fdbd9c5b19432d3' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/displayproduct.tpl',
      1 => 1484626478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358400918587e56cfc542b7-57225393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'indproduct' => 0,
    'indprod' => 0,
    'BASE_URL' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_587e56cfd05fb0_81029540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587e56cfd05fb0_81029540')) {function content_587e56cfd05fb0_81029540($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="linha">

	<?php  $_smarty_tpl->tpl_vars['indprod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indprod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['indproduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['indprod']->key => $_smarty_tpl->tpl_vars['indprod']->value) {
$_smarty_tpl->tpl_vars['indprod']->_loop = true;
?>

		<div class="coluna" style="width: 70%;">
				<h2 style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['indprod']->value['nome'];?>
</h2>


					<div class="coluna" style="width:45%">
						<div class="linha">

							<p><center><img src=<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['indprod']->value['photo'];?>
 style="width: 95%"></center></p>

							<p><h4><center><?php echo $_smarty_tpl->tpl_vars['indprod']->value['preco'];?>
 €</center></h4></p>

							<?php if ($_smarty_tpl->tpl_vars['indprod']->value['qtstock']>0) {?>
								<font color="green"><h4><center>Em stock</center></h4><br></font>
							<?php } else { ?>
								<font color="red"><h4><center>Producto esgotado</center></h4><br></font>
							<?php }?>

							<center><button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
);" class="botaocompra" style="width: 55%"><span><i class="fa fa-cart-plus fa-lg"></i></span></button></center><br><br>

						</div>
					</div>
					<div class="coluna" style="width:1%">
						<p><hr size="450%" width="1" align="center"></p>
					</div>
					<div class="coluna" style="width:54%">
						<p><<?php ?>?php echo nl2br <?php echo $_smarty_tpl->tpl_vars['indprod']->value['descricao'];?>
 ?<?php ?>></p>
					</div>

		</div>
</div>

	<?php } ?>

	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/cart/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/cart/cart.js" type="text/javascript"></script>

	<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	 <?php }} ?>
