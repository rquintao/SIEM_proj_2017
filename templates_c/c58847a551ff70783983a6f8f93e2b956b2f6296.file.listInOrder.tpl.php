<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 19:32:28
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listInOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244789990588a4c47c2e3d8-16955551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c58847a551ff70783983a6f8f93e2b956b2f6296' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listInOrder.tpl',
      1 => 1485459146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244789990588a4c47c2e3d8-16955551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_588a4c47cc7de5_83730816',
  'variables' => 
  array (
    'products' => 0,
    'BASE_URL' => 0,
    'product' => 0,
    'i' => 0,
    'productsquantidades' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588a4c47cc7de5_83730816')) {function content_588a4c47cc7de5_83730816($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






<div class="linha">



	<div class="coluna" style="width: 100%;">
			<h2 style="text-align: center;">PRODUTOS</h2>

			<table class="tabelapesquisa">
				  <tr>
				    <th width="16.66%">Imagem</th><th width="16.66%">Nome</th><th width="16.66%">Marca</th><th width="16.66%">Preço p/unidade</th><th width="16.66%">Categoria</th><th width="16.66%">Quantidade</th>
				  </tr>
					
				  
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index'], null, 0);?>

					    <tr>
					    	<td width="16.66%"><a id="linktabela" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/displayproduct.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img style="height: 75px; width: auto;" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
" class="imagens" /></a></td>
					    	<td width="16.66%"><a id="linktabela" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/displayproduct.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</a></td>
					    	<td width="16.66%"><?php echo $_smarty_tpl->tpl_vars['product']->value['marca'];?>
</td>
					    	<td width="16.66%"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
€</td>
					    	<td width="16.66%"><?php echo $_smarty_tpl->tpl_vars['product']->value['categoria'];?>
</td>
					    	<td width="16.66%"><?php echo $_smarty_tpl->tpl_vars['productsquantidades']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</td>

					    </tr>
					
				 		<?php } ?>

				 		

				  
							  
			</table>

			<div class="linha" style="margin: 1%">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/orders/showOrders.php" style="float: right; color: black;">Voltar atrás</a>
			</div>


		</div>




</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <?php }} ?>
