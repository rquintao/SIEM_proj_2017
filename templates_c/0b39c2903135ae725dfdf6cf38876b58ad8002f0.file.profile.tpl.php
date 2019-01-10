<?php /* Smarty version Smarty-3.1.15, created on 2017-01-24 01:45:55
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/users/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10469573558869359a8c197-25371509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b39c2903135ae725dfdf6cf38876b58ad8002f0' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/users/profile.tpl',
      1 => 1485222350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10469573558869359a8c197-25371509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58869359b1c7b7_78708724',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'users' => 0,
    'FIELD_ERRORS' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58869359b1c7b7_78708724')) {function content_58869359b1c7b7_78708724($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="coluna" style="width: 70%;">
  <h2 style="text-align: center;">REGISTAR</h2>
  
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/changeData.php" method="post" enctype="multipart/form-data">
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>

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
              <h3><?php echo $_smarty_tpl->tpl_vars['user']->value['realname'];?>
</h3>
              <span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
            </td>
            <td width="25%" id="temcaixa">
              <h3><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</h3>
              <span class="field_error" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['email'];?>
</span>
            </td>
            <td width="50%" id="temcaixa" colspan="2">
             <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" style="height: 128px; width: auto; position: absolute; margin-top: -25px; ">
            </td>
          </tr>
          <tr>
            <td width="25%">Username:*</td>
            <td width="25%">Telemóvel:</td>
            <td width="25%"></td>
            <td width="25%">Palavra-Chave:</td>
          </tr>
          <tr>
            <td width="25%" id="temcaixa">
              <h3 name="p1username"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h3>
            </td>
            <td width="25%" id="temcaixa">
              <h3 name="ptelemovel"><?php echo $_smarty_tpl->tpl_vars['user']->value['telemovel'];?>
</h3>
            </td>
            <td width="25%" id="temcaixa">
              
            </td>
            <td width="25%" id="temcaixa">
              ••••••••••••
            </td>
          </tr>
          
          <tr>
            <td width="50%"  colspan="2"><u><h3 style="margin:0; padding: 0;">MORADA:</h3></u></td><td width="25%">Código Postal:</td><td width="25%">Cidade:</td>
          </tr>
          <tr>
            <td width="50%" id="temcaixa"  colspan="2">
             Endereço: 
            </td>
            <td width="25%" id="temcaixa">
              <h4 name="pcodpostal"><?php echo $_smarty_tpl->tpl_vars['user']->value['codpostal'];?>
</h4>
            </td>
            <td width="25%" id="temcaixa">
              <h4 name="pcidade"><?php echo $_smarty_tpl->tpl_vars['user']->value['cidade'];?>
</h4>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"><h4 name="pendereco1"><?php echo $_smarty_tpl->tpl_vars['user']->value['endereco1'];?>
; </h4></td><td width="25%">Região:</td><td width="25%">País:</td>
          </tr>
          <tr>
            <td width="50%" id="temcaixa"  colspan="2">
              <h4 name="pendereco2"><?php echo $_smarty_tpl->tpl_vars['user']->value['endereco2'];?>
</h4>
            </td>
            <td width="25%" id="temcaixa">
              <h4 name="pregiao"><?php echo $_smarty_tpl->tpl_vars['user']->value['regiao'];?>
</h4>
            </td>
            <td width="25%" id="temcaixa">
              <h4 name="ppais"><?php echo $_smarty_tpl->tpl_vars['user']->value['pais'];?>
</h4>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"><span class="error"><<?php ?>?php echo $MsgErro;?<?php ?>></span></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Alterar dados</button></td>
          </tr>
        </table>
        <input type="hidden" name="pusername" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">
        <input type="hidden" name="prealname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['realname'];?>
">
        <input type="hidden" name="pemail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
        <input type="hidden" name="pcidade" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['cidade'];?>
">
        <input type="hidden" name="pregiao" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['regiao'];?>
">
        <input type="hidden" name="ppais" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['pais'];?>
">
        <input type="hidden" name="pendereco1" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['endereco1'];?>
">
        <input type="hidden" name="pendereco2" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['endereco2'];?>
">
        <input type="hidden" name="pcodpostal" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['codpostal'];?>
">
        <input type="hidden" name="ptelemovel" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['telemovel'];?>
">
  <?php } ?>
</form>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
