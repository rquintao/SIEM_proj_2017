{include file='common/header.tpl'}


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
							<img src="{$BASE_URL}images/users/grifo.jpg" style="width: auto;height: 200px;"><br>
							Eduardo Grifo <br> ee12046@fe.up.pt
						</div>
						<div class="coluna" style="margin-left: 10%;">
							<img src="{$BASE_URL}images/users/kintano392.jpg" style="width: auto;height: 200px;"><br>
							Rafael Quintão <br> ee12113@fe.up.pt
						</div>

					</div></center>
				</div>

				</div>


				</div>

		</center>
</div>


{include file='common/footer.tpl'}