<?php /* Smarty version Smarty-3.1.15, created on 2017-01-23 23:10:53
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:893482158868aaae06e89-41514727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '299455a93da77f041126cc223cb0b461ab27eb43' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/checkout.tpl',
      1 => 1485213043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '893482158868aaae06e89-41514727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58868aaae5f214_99644878',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'morada' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58868aaae5f214_99644878')) {function content_58868aaae5f214_99644878($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="linha">

<div class="coluna" style="width: 60%; padding: 0 20%">
	<br><br>Possui no seu carrinho um total de <div id="pagQuant"></div> artigos num valor total de <div id="pagPreco"></div> €. Por favor confirme a morada de envio antes de prosseguir. <br><br><br>
</div>
</div>
<div class="linha">

<div class="coluna" id="containerimagemesquerda" style="width: 30%;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pay.png" id="pay" style="width: 90%; height: auto;"></img>
</div>

<div class="coluna" style="width: 40%;">
		
		<table class="tabelapagamento">
				  <tr>
				    <th colspan="2">Dados do cartão</th>
				  </tr>
				  <tr>
				    <td width="50%"></td><td width="50%"></td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2">Nome indicado no cartão:</td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2" id="temdados">
				    	<input class="text" id="NOMECARTAO" value=""></input>
				    </td>
				    
				  </tr>
				  <tr>
				    <td width="100%" colspan="2">Número do cartão:</td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2" id="temdados">
				    	<input class="text" id="NOMECARTAO" value=""></input>
				    </td>
				    
				  </tr>
				  <tr>
				    <td width="80%">Data de validade:</td>
				    <td width="20%">CVC/CDV2:</td>
				  </tr>
				  <tr>
				  	<td width="80%" id="temdados">
				  		  <input type="month" /> 
				  	</td>
				    <td width="20%" id="temdados">
				    	<input class="text" width="100%" id="CVC" value=""></input>
				    </td>
				  </tr>
				 
				  <tr>
				    <td width="100%" colspan="2"><button type = "submit" id="botaopagar" onclick='checkout("<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
")' style="float: right; margin-top: 2px;">Efetuar Pagamento</button></td>
				  </tr>
							  
				</table>

	<h4>Morada de envio:</h4>

	  <h5>

	  <?php echo $_smarty_tpl->tpl_vars['morada']->value;?>

	   	 
	   </h5>
</div>

	<div class="coluna" id="containerimagemdireita" style="width: 30%; margin-bottom: 2%">
		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/pay2.png" id="pay2" style="width: 90%; height: auto; float: right;"></img>
	</div>


</div>

</div>






<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
