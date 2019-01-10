<?php /* Smarty version Smarty-3.1.15, created on 2017-01-26 20:13:27
         compiled from "/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/contactos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974457703588a5033ec4db5-46010659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d5929842f2e8aea0e817ef32b8cbda337ca266' => 
    array (
      0 => '/usr/users2/mieec2012/ee12046/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/contactos.tpl',
      1 => 1485461605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '974457703588a5033ec4db5-46010659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_588a5033ef00c1_35640980',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588a5033ef00c1_35640980')) {function content_588a5033ef00c1_35640980($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="linha">



		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">CONTACTOS</h2>
				<div class="linha">

				<div class="coluna" id="map" style="width:50%;height:400px; float: left;"></div>


				<script>
				function myMap() {
				  var mapCanvas = document.getElementById("map");
				  var mapOptions = {
				    center: new google.maps.LatLng(41.178274, -8.596869),
				    zoom: 14
				  }
				  var map = new google.maps.Map(mapCanvas, mapOptions);
				  var marker = new google.maps.Marker({
				    position: new google.maps.LatLng(41.178274, -8.596869),
				    // animation: google.maps.Animation.BOUNCE
				  });
				  marker.setMap(map);
				}
				</script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHZI4bqqYVvSq5pti-ZF2HXlgpTStKuRc&callback=myMap"></script>


				<div class="coluna" style="text-align: center; margin-top: 5%; margin-left: 4%">
					<div class="linha">

					Faculdade de Engenharia da Universidade do Porto	<br>
					Rua Dr. Roberto Frias, s/n 4200-465 Porto PORTUGAL
					</div><br><br>
					<center>
					<div class="linha">

						<div class="coluna" style="margin-left: 10%;">
							<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/users/grifo.jpg" style="width: auto;height: 200px;"><br>
							Eduardo Grifo <br> ee12046@fe.up.pt
						</div>
						<div class="coluna" style="margin-left: 10%;">
							<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/users/kintano392.jpg" style="width: auto;height: 200px;"><br>
							Rafael Quintão <br> ee12113@fe.up.pt
						</div>

					</div></center>
				</div>

				</div>


				</div>

		</center>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
