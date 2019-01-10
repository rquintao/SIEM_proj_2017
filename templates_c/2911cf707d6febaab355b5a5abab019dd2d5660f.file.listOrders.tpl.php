<?php /* Smarty version Smarty-3.1.15, created on 2017-01-23 23:10:26
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167997108258868d623655d7-41593507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2911cf707d6febaab355b5a5abab019dd2d5660f' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listOrders.tpl',
      1 => 1485212218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167997108258868d623655d7-41593507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'order' => 0,
    'quants' => 0,
    'soma' => 0,
    'quant' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58868d624612d1_50982535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58868d624612d1_50982535')) {function content_58868d624612d1_50982535($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






<div class="linha">



	<div class="coluna" style="width: 70%;">
			<h2 style="text-align: center;">PRODUTOS</h2>

			<center><table class="tabelapesquisa">
				  <tr>
				    <th width="14.2857%">Número da Encomenda</th><th width="14.2857%">Estado da encomenda</th><th width="14.2857%">Data de Pagamento</th><th width="14.2857%">Data estimada de entrega</th><th width="14.2857%">Preço</th><th width="14.2857%">Número de items</th><th width="14.2857%">Ver encomenda</th>
				  </tr>
					
				  
						<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['soma'] = new Smarty_variable(0, null, 0);?>
							<?php $_smarty_tpl->tpl_vars['quants'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['order']->value['quantidades']), null, 0);?> 
					    	<?php  $_smarty_tpl->tpl_vars['quant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quant']->key => $_smarty_tpl->tpl_vars['quant']->value) {
$_smarty_tpl->tpl_vars['quant']->_loop = true;
?>
					    		<?php $_smarty_tpl->tpl_vars['soma'] = new Smarty_variable($_smarty_tpl->tpl_vars['soma']->value+$_smarty_tpl->tpl_vars['quant']->value, null, 0);?>
					    	<?php } ?>


						    <tr>
						    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
						    	<td width="14.2857%">
						    		<?php if ((time()>((strtotime($_smarty_tpl->tpl_vars['order']->value['datapagamento']))+(2*24*60*60)))) {?>
						    			Encomenda enviada
						    		<?php } elseif ((time()>((strtotime($_smarty_tpl->tpl_vars['order']->value['datapagamento']))+(15*24*60*60)))) {?>
						    			Encomenda entregue
						    		<?php } else { ?>
						    			Encomenda em processamento
						    		<?php }?>

						    	</td>
						    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['order']->value['datapagamento'];?>
</td>
						    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['order']->value['dataestimadaentrega'];?>
</td>
						    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['order']->value['preco'];?>
</td>
						    	<td width="14.2857%"><?php echo $_smarty_tpl->tpl_vars['soma']->value;?>
</td>
						    	<td width="14.2857%"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/productsInOrder.php?ids=<?php echo $_smarty_tpl->tpl_vars['order']->value['idspecas'];?>
&quantidades=<?php echo $_smarty_tpl->tpl_vars['order']->value['quantidades'];?>
" style="color: black;"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>

						    </tr>
						
				 		<?php } ?>

				 		

				  
							  
			</table></center>

		</div>




</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <?php }} ?>
