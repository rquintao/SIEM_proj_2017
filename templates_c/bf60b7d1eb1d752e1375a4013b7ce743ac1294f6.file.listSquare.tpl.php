<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 19:07:07
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listSquare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12284132435876d80b51b618-26269655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf60b7d1eb1d752e1375a4013b7ce743ac1294f6' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listSquare.tpl',
      1 => 1485457607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12284132435876d80b51b618-26269655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5876d80b70e871_74413213',
  'variables' => 
  array (
    'destaques' => 0,
    'BASE_URL' => 0,
    'destaque' => 0,
    'results' => 0,
    'cid' => 0,
    'con' => 0,
    'novidades' => 0,
    'novidade' => 0,
    'promocoes' => 0,
    'promocao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5876d80b70e871_74413213')) {function content_5876d80b70e871_74413213($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






	<div class="linha">



		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">DESTAQUE</h2>
				<div class="linha">
				
				<?php  $_smarty_tpl->tpl_vars['destaque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destaque']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['destaques']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['destaque']->key => $_smarty_tpl->tpl_vars['destaque']->value) {
$_smarty_tpl->tpl_vars['destaque']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['destaque']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
				  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']==4) {?>
				    <?php break 1?>
				  <?php }?>	
				
						<div class="card">
						  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/displayproduct.php?id=<?php echo $_smarty_tpl->tpl_vars['destaque']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['destaque']->value['photo'];?>
" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b><?php echo $_smarty_tpl->tpl_vars['destaque']->value['nome'];?>
</b></h4> 
						    <p><strong><?php echo $_smarty_tpl->tpl_vars['destaque']->value['preco'];?>
 €</strong></p> 
						  </div>

						            <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['destaque']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['destaque']->value['preco'];?>
);" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					
				<?php } ?>

				<!-- <?php  $_smarty_tpl->tpl_vars['con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['con']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['con']->key => $_smarty_tpl->tpl_vars['con']->value) {
$_smarty_tpl->tpl_vars['con']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['con']->key;
?>
				    <a href="contact.php?contact_id=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['con']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['con']->value['nick'];?>
</a><br />
				<?php }
if (!$_smarty_tpl->tpl_vars['con']->_loop) {
?>
				    No items were found in the search
				<?php } ?> -->

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProducts.php?ex=1" style="float: right; color: black;">Mostrar todos >></a>
				</div>


		</div></center>

		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">NOVIDADES</h2>
				<div class="linha">
				<?php  $_smarty_tpl->tpl_vars['novidade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['novidade']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['novidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['novidade']->key => $_smarty_tpl->tpl_vars['novidade']->value) {
$_smarty_tpl->tpl_vars['novidade']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['novidade']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
				  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']==4) {?>
				    <?php break 1?>
				  <?php }?>	
						
						<div class="card">
						  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/displayproduct.php?id=<?php echo $_smarty_tpl->tpl_vars['novidade']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['novidade']->value['photo'];?>
" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b><?php echo $_smarty_tpl->tpl_vars['novidade']->value['nome'];?>
</b></h4> 
						    <p><strong><?php echo $_smarty_tpl->tpl_vars['novidade']->value['preco'];?>
 €</strong></p> 
						  </div>

						            <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['novidade']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['novidade']->value['preco'];?>
);" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				<?php } ?>

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProducts.php?ex=2" style="float: right; color: black;">Mostrar todas >></a>
				</div>


		</div></center>

		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">PROMOÇÕES</h2>
				<div class="linha">
				<?php  $_smarty_tpl->tpl_vars['promocao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promocao']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promocoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['promocao']->key => $_smarty_tpl->tpl_vars['promocao']->value) {
$_smarty_tpl->tpl_vars['promocao']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['promocao']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
				  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']==4) {?>
				    <?php break 1?>
				  <?php }?>	
						
						<div class="card">
						  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/displayproduct.php?id=<?php echo $_smarty_tpl->tpl_vars['promocao']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promocao']->value['photo'];?>
" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b><?php echo $_smarty_tpl->tpl_vars['promocao']->value['nome'];?>
</b></h4> 
						    <p><strong><?php echo $_smarty_tpl->tpl_vars['promocao']->value['preco'];?>
 €</strong></p> 
						  </div>

						            <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['promocao']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['promocao']->value['preco'];?>
);" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				<?php } ?>

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProducts.php?ex=3" style="float: right; color: black;">Mostrar todas >></a>
				</div>


		</div></center>
	</div>
	

	<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	 <?php }} ?>
