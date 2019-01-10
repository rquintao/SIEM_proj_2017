<?php /* Smarty version Smarty-3.1.15, created on 2017-01-27 12:04:00
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listSquarePages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:771076109588b3730d43fc9-26349514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e10ac43139e138b9266ad4f3bca746a6d9a83b2' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/products/listSquarePages.tpl',
      1 => 1485476578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '771076109588b3730d43fc9-26349514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'products' => 0,
    'pag' => 0,
    'ppag' => 0,
    'BASE_URL' => 0,
    'product' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_588b3731071193_77086222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b3731071193_77086222')) {function content_588b3731071193_77086222($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('publicity/slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="linha">



        <center><div class="coluna" style="width: 100%;">
                <h2 style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
                <div class="linha">



                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['pagina']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['pagina']['index']++;
?>

                    <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['pagina']['index']>=($_smarty_tpl->tpl_vars['pag']->value-1)*$_smarty_tpl->tpl_vars['ppag']->value)&&($_smarty_tpl->getVariable('smarty')->value['foreach']['pagina']['index']<($_smarty_tpl->tpl_vars['pag']->value)*$_smarty_tpl->tpl_vars['ppag']->value)) {?>
                        <div class="card">
                                  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/displayproduct.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
" alt="Avatar" style="width:100%"></a>
                                  <div class="containercard">
                                    <h4><b><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</b></h4> 
                                    <p><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
 €</strong></p> 
                                  </div>

                                            <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
);" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

                            </div>
                    <?php }?>
                   
                <?php }
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
                    Não foram encontrados itens;    
                <?php } ?>

              
                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                
              

        </div></center>
</div>

    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
