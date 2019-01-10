<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 23:30:00
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156550731958494bfdf04343-41678115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff54e1bf05d75421970c86c927979f5487db1539' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/header.tpl',
      1 => 1485473396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156550731958494bfdf04343-41678115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58494bfe024601_53354771',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58494bfe024601_53354771')) {function content_58494bfe024601_53354771($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>RG Peças</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/paginate.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/menus/showmenu.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/cart/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/cart/cart.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/menus/popup.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
  

  </head>
  
    <header>
    <div class="linha">
    
      <div class="coluna">
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img id="headerLogo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/headerLogo.png"></a>
      </div>



      <div class="coluna" id="container_botoes">
       
      <div class="linha">
      <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/search/livesearch.js" type="text/javascript"></script>

        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsSearch.php" method="post">
          <input type="text" id="caixapesquisa" name="caixapesquisa" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['caixapesquisa'];?>
" placeholder="Pesquisa" size="30" onkeyup="showResult(this.value)" />
          <button type="submit" id="lupa" style="margin-top: 10px;">
              <i class="fa fa-search fa-2x" aria-hidden="false" style="color: #444444;"></i>
          </button>

          <div id="livesearch"></div>
        </form>

      </div>
      <div class="linha">

         <nav id="navigation">
            <ul class="parent">
              <li id="categorias">Categorias
                <ul class="child">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsHeader.php?cat=perifericos">Periféricos</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsHeader.php?cat=telm">Telemóveis/Tablets</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsHeader.php?cat=computadores">Computadores</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsHeader.php?cat=outros">Outros</a></li>
                </ul>
                </li>
              <li id="destaques">Destaques
                <ul class="child">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsHeader.php?cat=perifericos&dest=1">Periféricos</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsHeader.php?cat=telm&dest=1">Telemóveis/Tablets</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsHeader.php?cat=computadores&dest=1">Computadores</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/listProductsHeader.php?cat=outros&dest=1">Outros</a></li>
                </ul>
                </li>
            </ul>
         </nav>
        

       <!--  <div class="coluna"> -->
        
        <!-- </div> -->

        </div>

        </div>
       </div>



       

       
        <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
          <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

           <?php } else { ?>
          <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php }?>
          

          <nav id="navigation">
           <ul class="parent" style="width: 100%;">
            <li class="carrinho" id="carrinho">
              <div id="carrinho2">
              <div class="carrinho3" id="ncart" onload="updateCart()"></div>
              <i class="fa fa-shopping-cart fa-3x" style="margin-right: 5px;" aria-hidden="true"></i><br>
              </div>
            <div id="precototal" onload="updateCart()"></div>
                <ul class="child">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/seeCart.php">Ver Carrinho</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/checkout.php">Pagamento</a></li>
                </ul>
            </li>
          </ul>
          </nav>
<font color="#D47404">.</font>
    

    </header>
    <body>

    <div id="error_messages">
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
      <div class="error" style="padding: 10px 15%;margin-top: -5px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>

      <button id="lupa" style="float: right; margin-top: -5px;" onclick="closeMsg();"><i class="fa fa-times fa-2x" aria-hidden="true"></i></button></div>
    <?php } ?>
    </div>
    <div id="success_messages">
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
      <div class="success" style="padding: 10px 15%;"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>

      <button id="lupa" style="float: right; margin-top: -5px;" onclick="closeMsg();"><i class="fa fa-times fa-2x" aria-hidden="true"></i></button></div>
    <?php } ?>
    </div>
   
    <div class="containergeral">
 
<?php }} ?>
