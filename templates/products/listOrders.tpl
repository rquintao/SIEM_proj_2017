{include file='common/header.tpl'}

{include file='publicity/slider.tpl'}





<div class="linha">



	<div class="coluna" style="width: 100%;">
			<h2 style="text-align: center;">PRODUTOS</h2>

			<center><table class="tabelapesquisa">
				  <tr>
				    <th width="14.2857%">Número da Encomenda</th><th width="14.2857%">Estado da encomenda</th><th width="14.2857%">Data de Pagamento</th><th width="14.2857%">Data estimada de entrega</th><th width="14.2857%">Preço</th><th width="14.2857%">Número de items</th><th width="14.2857%">Ver encomenda</th>
				  </tr>
					
				  
						{foreach $orders as $order}
							{$soma=0}
							{$quants= ","|explode:$order.quantidades} 
					    	{foreach $quants as $quant}
					    		{$soma = $soma + $quant}
					    	{/foreach}


						    <tr>
						    	<td width="14.2857%">{$order.id}</td>
						    	<td width="14.2857%">
						    		{if ($smarty.now > (($order.datapagamento|strtotime) + (2*24*60*60)))}
						    			Encomenda enviada
						    		{else if ($smarty.now > (($order.datapagamento|strtotime) + (15*24*60*60)))}
						    			Encomenda entregue
						    		{else}
						    			Encomenda em processamento
						    		{/if}

						    	</td>
						    	<td width="14.2857%">{$order.datapagamento}</td>
						    	<td width="14.2857%">{$order.dataestimadaentrega}</td>
						    	<td width="14.2857%">{$order.preco}</td>
						    	<td width="14.2857%">{$soma}</td>
						    	<td width="14.2857%"><a href="{$BASE_URL}pages/products/productsInOrder.php?ids={$order.idspecas}&quantidades={$order.quantidades}" style="color: black;"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a></td>

						    </tr>
						
				 		{/foreach}

				 		

				  
							  
			</table></center>

		</div>




</div>

{include file='common/footer.tpl'}
 