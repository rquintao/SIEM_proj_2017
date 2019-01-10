	{include file='common/header.tpl'}

	





	<div class="linha">



		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">Alterar definições de utilizador</h2>
				<div class="linha">
				<form action="{$BASE_URL}actions/users/admremUser.php" method="post" enctype="multipart/form-data">
				<table class="tabelaregisto">
			          <tr>
			            <td width="40%"><input type="text" name="user" placeholder="Nome de utilizador a modificar" style="width: 80%; margin-left: 5%;"></td>
			            <td width="40%"><input type="radio" name="changeUser" value="makeAdmin"> Tornar Administrador<br>
			            <input type="radio" name="changeUser" value="removeUser"> Remover Utilizador<br>
			            </td>
			            <td width="20%"><input type="submit" name="" value="OK"></td>
			          </tr>
			          <tr>
			          <td colspan="3"><center><span class="field_error" style="color: red;">{$FIELD_ERRORS.userAdminMsg}</span><span class="field_success" style="color: green;">{$SUCCESS_MESSAGES.userAdminMsg}</span></center></td>
			          </tr>
			          
			        </table>
			    </form>
				
				</div>
				


		</div></center>


		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">Adicionar produto</h2>
				<div class="linha">
					<form id="addProd" action="{$BASE_URL}actions/products/addProduct.php" method="post" enctype="multipart/form-data">

					  <table class="tabelaregisto">
					  	  <tr>
						    <td width="50%" colspan="2">Nome:</td>
						    <td width="50%">Descrição:</td>
						  </tr>
						  <tr>
						    <td colspan="2">
						    	<input type = "text" id="caixaregmaior" name = "productname" value="{$FORM_VALUES.productname}"></input>
					            <span class="field_error" style="color: red;">{$FIELD_ERRORS.productname}</span>
						    </td>
						    <td rowspan="9">
						    	<textarea rows="25" cols="58" name="description" form="addProd" style="resize: none;">{$FORM_VALUES.description}</textarea>
						   	</td>
						  </tr>
						  <tr>
						    <td colspan="2">Marca:</td>
						  </tr>
						  <tr>
						    <td colspan="2">
						    	<input type = "text" id="caixaregmaior" name = "productbrand" value="{$FORM_VALUES.productbrand}"></input>
					            <span class="field_error" style="color: red;">{$FIELD_ERRORS.productbrand}</span>
					        </td>
						  </tr>
						  <tr>
						    <td>Preço:</td>
						    <td>Quantidade em Stock</td>
						  </tr>
						  <tr>
						    <td>
						    	<input type="text" id="caixareg" name="price" value="{$FORM_VALUES.price}">
						    	<span class="field_error" style="color: red;">{$FIELD_ERRORS.price}</span>
						    </td>
						    <td>
						    	<input type="text" id="caixareg" name="stock" value="{$FORM_VALUES.stock}">
						    	<span class="field_error" style="color: red;">{$FIELD_ERRORS.stock}</span>
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
						  	<td colspan="3"><center><span class="field_error" style="color: red;">{$FIELD_ERRORS.addProdErr}</span><span class="field_success" style="color: green;">{$SUCCESS_MESSAGES.addProd}</span></center></td>
						  </tr>
					          
					         <!--  <tr>
					            <td width="50%">Nome:*</td><td width="25%">Email:*</td><td width="50%" colspan="1">Fotografia:</td>
					          </tr>
					          <tr>
					            <td width="25%" id="temcaixa">
					              <input type="text" id="caixaregmaior" name="realname" value="{$FORM_VALUES.realname}">
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixaregmaior" name = "regemail" value="{$FORM_VALUES.regemail}"></input>
					              <span class="field_error" style="color: red;">{$FIELD_ERRORS.email}</span>
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
					              <input type="text" id="caixareg" name="username" value="{$FORM_VALUES.username}">
					              <span class="field_error" style="color: red;">{$FIELD_ERRORS.username}</span>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regtelemovel" value="{$FORM_VALUES.regtelemovel}"></input>
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
					              <input type = "text" id="caixaregmaior" name = "regendereco1" value="{$FORM_VALUES.regendereco1}"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regcodpostal" value="{$FORM_VALUES.regcodpostal}"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regcidade" value="{$FORM_VALUES.regcidade}"></input>
					            </td>
					          </tr>
					          <tr>
					            <td width="50%"  colspan="2"></td><td width="25%">Região:</td><td width="25%">País:</td>
					          </tr>
					          <tr>
					            <td width="50%" id="temcaixa"  colspan="2">
					              <input type = "text" id="caixaregmaior" name = "regendereco2" value="{$FORM_VALUES.regendereco2}"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regregiao" value="{$FORM_VALUES.regregiao}"></input>
					            </td>
					            <td width="25%" id="temcaixa">
					              <input type = "text" id="caixareg" name = "regpais" value="{$FORM_VALUES.regpais}"></input>
					            </td>
					          </tr>
					          <tr>
					            <td width="50%"  colspan="2"><span class="error"><?php echo $MsgErro;?></span></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Registar</button><button type = "reset" name="cmdreset" value="">Limpar Dados</button></td>
					          </tr> -->
					                
					        </table>
					      </form>

				
				</div>
				


		</div></center>
	</div>

	{include file='common/footer.tpl'}
	 