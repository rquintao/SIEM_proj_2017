{include file='common/header.tpl'}

{include file='publicity/slider.tpl'}





<div class="linha">



	<div class="coluna" style="width: 100%;">
			<h2 style="text-align: center;">PRODUTOS</h2>

			<table class="tabelapesquisa">
				  <tr>
				    <th width="16.66%">Imagem</th><th width="16.66%">Nome</th><th width="16.66%">Marca</th><th width="16.66%">Preço p/unidade</th><th width="16.66%">Categoria</th><th width="16.66%">Quantidade</th>
				  </tr>
					
				  
						{foreach $products as $product name=foo}
							{$i=$smarty.foreach.foo.index}

					    <tr>
					    	<td width="16.66%"><a id="linktabela" href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}"><img style="height: 75px; width: auto;" src="{$BASE_URL}{$product.photo}" class="imagens" /></a></td>
					    	<td width="16.66%"><a id="linktabela" href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}">{$product.nome}</a></td>
					    	<td width="16.66%">{$product.marca}</td>
					    	<td width="16.66%">{$product.preco}€</td>
					    	<td width="16.66%">{$product.categoria}</td>
					    	<td width="16.66%">{$productsquantidades[$i]}</td>

					    </tr>
					
				 		{/foreach}

				 		

				  
							  
			</table>

			<div class="linha" style="margin: 1%">
				<a href="{$BASE_URL}pages/orders/showOrders.php" style="float: right; color: black;">Voltar atrás</a>
			</div>


		</div>




</div>

{include file='common/footer.tpl'}
 