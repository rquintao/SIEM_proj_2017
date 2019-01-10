
{include file='common/header.tpl'}
{include file='publicity/slider.tpl'}


<div class="linha">



        <center><div class="coluna" style="width: 100%;">
                <h2 style="text-align: center;">{$msg}</h2>
                <div class="linha">



                {foreach $products as $product name=pagina}

                    {if ($smarty.foreach.pagina.index >= ($pag-1)*$ppag) && ($smarty.foreach.pagina.index < ($pag)*$ppag)}
                        <div class="card">
                                  <a href="{$BASE_URL}pages/products/displayproduct.php?id={$product.id}"><img src="{$BASE_URL}{$product.photo}" alt="Avatar" style="width:100%"></a>
                                  <div class="containercard">
                                    <h4><b>{$product.nome}</b></h4> 
                                    <p><strong>{$product.preco} €</strong></p> 
                                  </div>

                                            <button onclick="addToCart({$product.id},{$product.preco});" class="botaocompra"><span><i class="fa fa-cart-plus fa-lg"></i></span></button>

                            </div>
                    {/if}
                   
                {foreachelse}
                    Não foram encontrados itens;    
                {/foreach}

              
                {$pagination}
                
              

        </div></center>
</div>

    {include file='common/footer.tpl'}