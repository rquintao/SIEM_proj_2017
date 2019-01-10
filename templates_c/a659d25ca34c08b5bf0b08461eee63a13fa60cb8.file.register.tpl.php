<?php /* Smarty version Smarty-3.1.15, created on 2017-01-24 01:59:08
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17230621575878d45893f6f3-97088803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a659d25ca34c08b5bf0b08461eee63a13fa60cb8' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/users/register.tpl',
      1 => 1485223124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17230621575878d45893f6f3-97088803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5878d4589f9439_67851644',
  'variables' => 
  array (
    'datachange' => 0,
    'BASE_URL' => 0,
    'FIELD_ERRORS' => 0,
    'FORM_VALUES' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5878d4589f9439_67851644')) {function content_5878d4589f9439_67851644($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['datachange']->value==false) {?>
<div class="coluna" style="width: 70%;">
  <h2 style="text-align: center;">REGISTAR</h2>
  
  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">

  <table class="tabelaregisto">
          <tr>
            <td width="50%" colspan="2"><span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['top'];?>
</span></td><td width="25%"></td><td width="25%"></td>
          </tr>
          <tr>
            <td width="25%">Nome:*</td><td width="25%">Email:*</td><td width="50%" colspan="2">Fotografia:</td>
          </tr>
          <tr>
            <td width="25%" id="temcaixa">
              <input type="text" id="caixaregmaior" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];?>
"> 
              <span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
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
          </tr>
                
        </table>
      </form>

</div>

<?php } else { ?>



<div class="coluna" style="width: 70%;">
  <h2 style="text-align: center;">ALTERAR DADOS</h2>
  
  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/updateUser.php" method="post" enctype="multipart/form-data">

  <table class="tabelaregisto">
          <tr>
            <td width="50%" colspan="2"><span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['top'];?>
</span></td><td width="25%"></td><td width="25%"></td>
          </tr>
          <tr>
            <td width="25%">Nome:*</td><td width="25%">Email:*</td><td width="50%" colspan="2">Fotografia:</td>
          </tr>
          <tr>
            <td width="25%" id="temcaixa">
              <input type="text" id="caixaregmaior" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];?>
"> 
              <span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixaregmaior" name = "regemail" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['pemail'];?>
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
              <?php echo $_smarty_tpl->tpl_vars['users']->value['pusername'];?>
<input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['pusername'];?>
">
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regtelemovel" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['ptelemovel'];?>
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
              <input type = "text" id="caixaregmaior" name = "regendereco1" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['pendereco1'];?>
"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regcodpostal" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['pcodpostal'];?>
"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regcidade" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['pcidade'];?>
"></input>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"></td><td width="25%">Região:</td><td width="25%">País:</td>
          </tr>
          <tr>
            <td width="50%" id="temcaixa"  colspan="2">
              <input type = "text" id="caixaregmaior" name = "regendereco2" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['pendereco2'];?>
"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regregiao" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['pregiao'];?>
"></input>
            </td>
            <td width="25%" id="temcaixa">
              <input type = "text" id="caixareg" name = "regpais" value="<?php echo $_smarty_tpl->tpl_vars['users']->value['ppais'];?>
"></input>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"><span class="error"><<?php ?>?php echo $MsgErro;?<?php ?>></span></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Registar</button><button type = "reset" name="cmdreset" value="">Limpar Dados</button></td>
          </tr>
                
        </table>
      </form>

</div>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
