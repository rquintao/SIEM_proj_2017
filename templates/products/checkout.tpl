{include file='common/header.tpl'}

<div class="linha">

<div class="coluna" style="width: 60%; padding: 0 20%">
	<br><br>Possui no seu carrinho um total de <div id="pagQuant"></div> artigos num valor total de <div id="pagPreco"></div> €. Por favor confirme a morada de envio antes de prosseguir. <br><br><br>
</div>
</div>
<div class="linha">

<div class="coluna" id="containerimagemesquerda" style="width: 30%;">
	<img src="{$BASE_URL}images/assets/pay.png" id="pay" style="width: 90%; height: auto;"></img>
</div>

<div class="coluna" style="width: 40%;">
		
		<table class="tabelapagamento">
				  <tr>
				    <th colspan="2">Dados do cartão</th>
				  </tr>
				  <tr>
				    <td width="50%"></td><td width="50%"></td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2">Nome indicado no cartão:</td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2" id="temdados">
				    	<input class="text" id="NOMECARTAO" value=""></input>
				    </td>
				    
				  </tr>
				  <tr>
				    <td width="100%" colspan="2">Número do cartão:</td>
				  </tr>
				  <tr>
				    <td width="100%" colspan="2" id="temdados">
				    	<input class="text" id="NOMECARTAO" value=""></input>
				    </td>
				    
				  </tr>
				  <tr>
				    <td width="80%">Data de validade:</td>
				    <td width="20%">CVC/CDV2:</td>
				  </tr>
				  <tr>
				  	<td width="80%" id="temdados">
				  		  <input type="month" /> 
				  	</td>
				    <td width="20%" id="temdados">
				    	<input class="text" width="100%" id="CVC" value=""></input>
				    </td>
				  </tr>
				 
				  <tr>
				    <td width="100%" colspan="2"><button type = "submit" id="botaopagar" onclick='checkout("{$BASE_URL}")' style="float: right; margin-top: 2px;">Efetuar Pagamento</button></td>
				  </tr>
							  
				</table>

	<h4>Morada de envio:</h4>

	  <h5>

	  {$morada}
	   	 
	   </h5>
</div>

	<div class="coluna" id="containerimagemdireita" style="width: 30%; margin-bottom: 2%">
		<img src="{$BASE_URL}images/assets/pay2.png" id="pay2" style="width: 90%; height: auto; float: right;"></img>
	</div>


</div>

</div>






{include file='common/footer.tpl'}