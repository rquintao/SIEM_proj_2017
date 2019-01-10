<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 19:02:03
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/users/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11209203515889499a9d0738-60149949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51d36b0ade1a52dc372eb439fcc979f654a3ce3f' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/users/admin.tpl',
      1 => 1485457320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11209203515889499a9d0738-60149949',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5889499aab5a95_04389463',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FIELD_ERRORS' => 0,
    'SUCCESS_MESSAGES' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889499aab5a95_04389463')) {function content_5889499aab5a95_04389463($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	





	<div class="linha">



		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">Alterar definições de utilizador</h2>
				<div class="linha">
				<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/admremUser.php" method="post" enctype="multipart/form-data">
				<table class="tabelaregisto">
			          <tr>
			            <td width="40%"><input type="text" name="user" placeholder="Nome de utilizador a modificar" style="width: 80%; margin-left: 5%;"></td>
			            <td width="40%"><input type="radio" name="changeUser" value="makeAdmin"> Tornar Administrador<br>
			            <input type="radio" name="changeUser" value="removeUser"> Remover Utilizador<br>
			            </td>
			            <td width="20%"><input type="submit" name="" value="OK"></td>
			          </tr>
			          <tr>
			          <td colspan="3"><center><span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['userAdminMsg'];?>
</span><span class="field_success" style="color: green;"><?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value['userAdminMsg'];?>
</span></center></td>
			          </tr>
			          
			        </table>
			    </form>
				
				</div>
				


		</div></center>


		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">Adicionar produto</h2>
				<div class="linha">
					<form id="addProd" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/addProduct.php" method="post" enctype="multipart/form-data">

					  <table class="tabelaregisto">
					  	  <tr>
						    <td width="50%" colspan="2">Nome:</td>
						    <td width="50%">Descrição:</td>
						  </tr>
						  <tr>
						    <td colspan="2">
						    	<input type = "text" id="caixaregmaior" name = "productname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['productname'];?>
"></input>
					            <span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['productname'];?>
</span>
						    </td>
						    <td rowspan="9">
						    	<textarea rows="25" cols="58" name="description" form="addProd" style="resize: none;"><?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['description'];?>
</textarea>
						   	</td>
						  </tr>
						  <tr>
						    <td colspan="2">Marca:</td>
						  </tr>
						  <tr>
						    <td colspan="2">
						    	<input type = "text" id="caixaregmaior" name = "productbrand" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['productbrand'];?>
"></input>
					            <span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['productbrand'];?>
</span>
					        </td>
						  </tr>
						  <tr>
						    <td>Preço:</td>
						    <td>Quantidade em Stock</td>
						  </tr>
						  <tr>
						    <td>
						    	<input type="text" id="caixareg" name="price" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['price'];?>
">
						    	<span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['price'];?>
</span>
						    </td>
						    <td>
						    	<input type="text" id="caixareg" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['stock'];?>
">
						    	<span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['stock'];?>
</span>
						    </td>
						  </tr>
						  <tr>
						    <td>Categoria:</td>
						    <td>Categorias Extra:</td>
						  </tr>
						  <tr>
						    <td>
						    	<select name="categoria">
								 <option value="perifericos">Periféricos</option>
								 <option value="telm">Telemóveis/Tablets</option>
								 <option value="computadores">Computadores</option>
								 <option value="outros">Outros</option>
								</select>
						    </td>
						    <td>
						    	<input type="checkbox" name="extra[]" value="destaques">Destaques<br>
						    	<input type="checkbox" name="extra[]" value="novidades">Novidades<br>
						    	<input type="checkbox" name="extra[]" value="promocoes">Promoções 
						    </td>
						  </tr>
						  <tr>
						    <td colspan="2">Fotografia do Produto:</td>
						  </tr>
						  <tr>
						    <td colspan="2">
						    	<input type="file" name="photo">
						    </td>
						  </tr>
						  <tr>
						    <td colspan="3">
						    	<button type = "reset" name="prodreset" value="" style="float: right;">Limpar Campos</button>
						    	<button type = "submit" name="prodsubmit" value="" style="float: right;">Adicionar</button>
						    </td>
						  </tr>
						  <tr>
						  	<td colspan="3"><center><span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['addProdErr'];?>
</span><span class="field_success" style="color: green;"><?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value['addProd'];?>
</span></center></td>
						  </tr>
					          
					         <!--  <tr>
					            <td width="50%">Nome:*</td><td width="25%">Email:*</td><td width="50%" colspan="1">Fotografia:</td>
					          </tr>
					          <tr>
					            <td width="25%" id="temcaixa">
					              <input type="text" id="caixaregmaior" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];?>
">
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixaregmaior" name = "regemail" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['regemail'];?>
"></input>
					              <span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['email'];?>
</span>
					            </td>
					            <td width="50%" id="temcaixa" colspan="2">
					              <input type="file" name="photo">
					            </td>
					          </tr>
					          <tr>
					            <td width="25%">Username:*</td>
					            <td width="25%">Telemóvel:</td>
					            <td width="25%">Palavra-Chave:*</td>
					            <td width="25%">Confirmar Palavra-Chave:*</td>
					          </tr>
					          <tr>
					            <td width="25%" id="temcaixa">
					              <input type="text" id="caixareg" name="username" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
">
					              <span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regtelemovel" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['regtelemovel'];?>
"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type="password" id="caixareg" name="password" value="">
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "password" id="caixareg" name = "regpassword2" value=""></input>
					            </td>
					          </tr>
					          <tr>
					            <td width="50%"  colspan="2"><h4>Morada:</h4></td><td width="25%"></td><td width="25%"></td>
					          </tr>
					          <tr>
					            <td width="50%"  colspan="2">Endereço:</td><td width="25%">Código Postal:</td><td width="25%">Cidade:</td>
					          </tr>
					          <tr>
					            <td width="50%" id="temcaixa"  colspan="2">
					              <input type = "text" id="caixaregmaior" name = "regendereco1" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['regendereco1'];?>
"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regcodpostal" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['regcodpostal'];?>
"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regcidade" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['regcidade'];?>
"></input>
					            </td>
					          </tr>
					          <tr>
					            <td width="50%"  colspan="2"></td><td width="25%">Região:</td><td width="25%">País:</td>
					          </tr>
					          <tr>
					            <td width="50%" id="temcaixa"  colspan="2">
					              <input type = "text" id="caixaregmaior" name = "regendereco2" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['regendereco2'];?>
"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regregiao" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['regregiao'];?>
"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regpais" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['regpais'];?>
"></input>
					            </td>
					          </tr>
					          <tr>
					            <td width="50%"  colspan="2"><span class="error"><<?php ?>?php echo $MsgErro;?<?php ?>></span></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Registar</button><button type = "reset" name="cmdreset" value="">Limpar Dados</button></td>
					          </tr> -->
					                
					        </table>
					      </form>

				
				</div>
				


		</div></center>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	 <?php }} ?>
