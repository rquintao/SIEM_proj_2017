	{include file='common/header.tpl'}

	{include file='publicity/slider.tpl'}





	<div class="linha">



		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">DESTAQUE</h2>
				<div class="linha">
				
				{foreach from=$destaques key=i item=destaque name=foo}
				  {if $smarty.foreach.foo.index == 4}
				    {break}
				  {/if}	
				
						<div class="card">
						  <a href="{$BASE_URL}pages/products/displayproduct.php?id={$destaque.id}"><img src="{$BASE_URL}{$destaque.photo}" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b>{$destaque.nome}</b></h4> 
						    <p><strong>{$destaque.preco} €</strong></p> 
						  </div>

						            <button onclick="addToCart({$destaque.id},{$destaque.preco});" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					
				{/foreach}

				<!-- {foreach key=cid item=con from=$results}
				    <a href="contact.php?contact_id={$cid}">{$con.name} - {$con.nick}</a><br />
				{foreachelse}
				    No items were found in the search
				{/foreach} -->

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="{$BASE_URL}pages/products/listProducts.php?ex=1" style="float: right; color: black;">Mostrar todos >></a>
				</div>


		</div></center>

		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">NOVIDADES</h2>
				<div class="linha">
				{foreach from=$novidades key=i item=novidade name=foo}
				  {if $smarty.foreach.foo.index == 4}
				    {break}
				  {/if}	
						
						<div class="card">
						  <a href="{$BASE_URL}pages/products/displayproduct.php?id={$novidade.id}"><img src="{$BASE_URL}{$novidade.photo}" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b>{$novidade.nome}</b></h4> 
						    <p><strong>{$novidade.preco} €</strong></p> 
						  </div>

						            <button onclick="addToCart({$novidade.id},{$novidade.preco});" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				{/foreach}

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="{$BASE_URL}pages/products/listProducts.php?ex=2" style="float: right; color: black;">Mostrar todas >></a>
				</div>


		</div></center>

		<center><div class="coluna" style="width: 100%;">
				<h2 style="text-align: center;">PROMOÇÕES</h2>
				<div class="linha">
				{foreach from=$promocoes key=i item=promocao name=foo}
				  {if $smarty.foreach.foo.index == 4}
				    {break}
				  {/if}	
						
						<div class="card">
						  <a href="{$BASE_URL}pages/products/displayproduct.php?id={$promocao.id}"><img src="{$BASE_URL}{$promocao.photo}" alt="Avatar" style="width:100%"></a>
						  <div class="containercard">
						    <h4><b>{$promocao.nome}</b></h4> 
						    <p><strong>{$promocao.preco} €</strong></p> 
						  </div>

						            <button onclick="addToCart({$promocao.id},{$promocao.preco});" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

						</div>
					    
					
				{/foreach}

				
				</div>
				<div class="linha" style="margin-right: 1%; margin-bottom: 1%">
				<a href="{$BASE_URL}pages/products/listProducts.php?ex=3" style="float: right; color: black;">Mostrar todas >></a>
				</div>


		</div></center>
	</div>
	

	{include file='common/footer.tpl'}
	 