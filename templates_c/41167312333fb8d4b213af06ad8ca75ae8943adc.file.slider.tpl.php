<?php /* Smarty version Smarty-3.1.15, created on 2017-01-17 15:35:42
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/publicity/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1973665295856dcff46ff39-56551554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41167312333fb8d4b213af06ad8ca75ae8943adc' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/publicity/slider.tpl',
      1 => 1484626478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1973665295856dcff46ff39-56551554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5856dcff49cf36_59668295',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5856dcff49cf36_59668295')) {function content_5856dcff49cf36_59668295($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('publicity/sidepub.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="slidercontainer" >
 <a href="http://www.google.pt">  
 <img class="mySlides" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/publicity/slider/honor8.jpg" style="width:100%; height: auto;">
 </a>
  <a href="http://www.google.pt"> 
  <img class="mySlides" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/publicity/slider/asus.jpg" style="width:100%; height: auto;">
  </a>
   <a href="http://www.google.pt"> 
  <img class="mySlides" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/publicity/slider/titanx.jpg" style="width:100%; height: auto;">
   </a>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('publicity/sidepubright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/publicity/publicity.js" type="text/javascript"></script>
<?php }} ?>
