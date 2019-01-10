{include file='common/header.tpl'}

{include file='publicity/slider.tpl'}





<div class="linha">



	<div class="coluna" style="width: 100%;">
			<h2 style="text-align: center;">PRODUTOS</h2>

			<table class="tabelapesquisa">
				  <tr>
				    <th width="14.2857%">Imagem</th><th width="14.2857%">Nome</th><th width="14.2857%">Marca</th><th width="14.2857%">Preço p/unidade</th><th width="14.2857%">Categoria</th><th width="14.2857%">Quantidade</th><th width="14.2857%">Retirar do Carrinho</th>
				  </tr>
					
				  
						{foreach $products as $product}

					    <tr>
					    	<td width="14.2857%"><a id="linktabela" href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}"><img style="height: 75px; width: auto;" src="{$BASE_URL}{$product.photo}" class="imagens" /></a></td>
					    	<td width="14.2857%"><a id="linktabela" href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}">{$product.nome}</a></td>
					    	<td width="14.2857%">{$product.marca}</td>
					    	<td width="14.2857%">{$product.preco}€</td>
					    	<td width="14.2857%">{$product.categoria}</td>
					    	<td width="14.2857%">{$product.quantidadecarrinho}</td>
					    	<td width="14.2857%"><button type = "submit" name="idcarrinho" onclick="removeFromCart({$product.id});"><img src="{$BASE_URL}images/assets/x.png" class="x_remove_table" /></button> </td>

					    </tr>
					
				 		{/foreach}

				 		

				  
							  
			</table>

			<div class="linha" style="margin: 1%">
			{if $USERNAME}
				<a href="{$BASE_URL}pages/cart/checkout.php" style="float: right; color: black;">Checkout >></a>
			{else}
				<a href="#" onclick="return alert('Faça login antes realizar uma compra')" style="float: right; color: black;">Checkout >></a>
			{/if}
			</div>


		</div>




</div>

{include file='common/footer.tpl'}
 