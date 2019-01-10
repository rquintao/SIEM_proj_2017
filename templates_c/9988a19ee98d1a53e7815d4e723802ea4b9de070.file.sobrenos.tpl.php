<?php /* Smarty version Smarty-3.1.15, created on 2017-01-30 00:28:05
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/sobrenos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197585685588a5f68daf699-87131996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9988a19ee98d1a53e7815d4e723802ea4b9de070' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/sobrenos.tpl',
      1 => 1485736021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197585685588a5f68daf699-87131996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_588a5f68e1f0c8_12151566',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588a5f68e1f0c8_12151566')) {function content_588a5f68e1f0c8_12151566($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<div class="linha">

				<h3 style="text-align: center;">Em baixo encontra um conjunto de credênciais para fazer login como um cliente com permissões normais e um conjunto de credênciais para fazer login com permissões de Administrador. É também possível realizar um registo. </h3>
				<div style="margin-left: 30%">
				<div class="coluna"><h3 style="padding: 0;margin: 0;">Login Cliente</h3> <br>Username: cliente <br> Password: cliente<br></div>
				<div class="coluna" style="display: block; padding: 0 0 0 60px;"><h3 style="padding: 0;margin: 0;">Login Administrador</h3> <br>Username: admin <br> Password: admin<br></div>
				<br><br><br><br><br><br>
				</div>
				<center>
				<h2 style="width: 40%;">Downloads</h2>
				<div style="margin-left: 34%">
				
				<div class="coluna" width="50%" style="text-align: center;">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
files/Mockup-e-mapa-do-site.zip" download style="text-decoration:none">
							<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/ppt2.png" alt="PPT" height="auto" width="70px"></a> <br>

					Mockup <br>em PowerPoint <br>
				</div>


				<div class="coluna" width="50%" style="padding: 0 0 0 100px; text-align: center;">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
files/codigo.zip" download style="text-decoration:none">
							<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/rar.png" alt="PPT" height="auto" width="70px"></a> <br>
					Código <br>
				</div>

				</center>
				</div>
			</div>
</center>
</div>

				



				
	

	<center><div class="container" id="sobrenos" style="width: 70%">

		<h3 style="text-align: center;">Este website foi desenvolvido no âmbito da disciplina de Sistemas de Informação Empresariais. Em baixo estão os responsáveis pelo desenvolvimento deste.</h3>
		
			<div class="linha">
				<div class="coluna1" id="colunagrifo">

					<img id='grifopic' src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/users/grifo.jpg'></img>

					<div style="text-align:center;">
						<h2>Eduardo Grifo</h2>
						<form action="https://paginas.fe.up.pt/~ee12046/trabalhosSiem/trabalhoHTML/">
							<button type="submit" class="aboutusbutton">Página Pessoal</button>
						</form>
					</div>



				</div>
				<div class="coluna1" id="colunaquintao" style="margin-left: 50px;">

					<img id='quintaopic' src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/users/kintano392.jpg'></img>

					<div style="text-align:center;">
						<h2>Rafael Quintão</h2>
						<form action="https://paginas.fe.up.pt/~ee12113/trabalhosSiem/trabalhoHTML/">
							<button type="submit" class="aboutusbutton">Página Pessoal</button>
						</form>
					</div>


				</div>
			</div>


	</div></center>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
