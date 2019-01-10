<?php /* Smarty version Smarty-3.1.15, created on 2017-01-27 14:46:24
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/displayproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:825698039587d73d702a440-53503380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6cb7321cef118ce9233a9156891d21fe064eab3' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/displayproduct.tpl',
      1 => 1485528381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '825698039587d73d702a440-53503380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_587d73d708d1f4_00606905',
  'variables' => 
  array (
    'indproduct' => 0,
    'indprod' => 0,
    'BASE_URL' => 0,
    'ADMIN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d73d708d1f4_00606905')) {function content_587d73d708d1f4_00606905($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="linha">

	<?php  $_smarty_tpl->tpl_vars['indprod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indprod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['indproduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['indprod']->key => $_smarty_tpl->tpl_vars['indprod']->value) {
$_smarty_tpl->tpl_vars['indprod']->_loop = true;
?>

		<div class="coluna" style="width: 100%;">
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
								<center><button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['indprod']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['indprod']->value['preco'];?>
);" class="botaocompra" style="width: 55%"><span><i class="fa fa-cart-plus fa-lg"></i></span></button></center><br><br>
							<?php } else { ?>
								<font color="red"><h4><center>Producto esgotado</center></h4><br></font>
							<?php }?>

							
							<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
							<center><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/removeProduct.php?id=<?php echo $_smarty_tpl->tpl_vars['indprod']->value['id'];?>
"><button class="botaoremover" style="width: 80%"><span><i class="fa fa-trash" aria-hidden="true"></i>
</span></button></a></center><br><br>
							<?php }?>

						</div>
					</div>
					<div class="coluna" style="width:1%">
						<p><hr size="450%" width="1" align="center"></p>
					</div>
					<div class="coluna" style="width:54%; white-space: pre-wrap;">
						<br><?php echo $_smarty_tpl->tpl_vars['indprod']->value['descricao'];?>

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
