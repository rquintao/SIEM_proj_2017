<!DOCTYPE html>
<html>
  <head>
    <title>RG Peças</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="{$BASE_URL}css/style.css">
    <link rel="stylesheet" href="{$BASE_URL}css/paginate.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="{$BASE_URL}javascript/menus/showmenu.js" type="text/javascript"></script>
    <script src="{$BASE_URL}javascript/cart/jquery.cookie.js" type="text/javascript"></script>
    <script src="{$BASE_URL}javascript/cart/cart.js" type="text/javascript"></script>
    <script src="{$BASE_URL}javascript/menus/popup.js" type="text/javascript"></script>
    <link rel="stylesheet" href="{$BASE_URL}font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
  

  </head>
  
    <header>
    <div class="linha">
    
      <div class="coluna">
        <a href="{$BASE_URL}"><img id="headerLogo" src="{$BASE_URL}images/assets/headerLogo.png"></a>
      </div>



      <div class="coluna" id="container_botoes">
       
      <div class="linha">
      <script src="{$BASE_URL}javascript/search/livesearch.js" type="text/javascript"></script>

        <form action="{$BASE_URL}pages/products/listProductsSearch.php" method="post">
          <input type="text" id="caixapesquisa" name="caixapesquisa" value="{$FORM_VALUES.caixapesquisa}" placeholder="Pesquisa" size="30" onkeyup="showResult(this.value)" />
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
                  <li><a href="{$BASE_URL}pages/products/listProductsHeader.php?cat=perifericos">Periféricos</a></li>
                  <li><a href="{$BASE_URL}pages/products/listProductsHeader.php?cat=telm">Telemóveis/Tablets</a></li>
                  <li><a href="{$BASE_URL}pages/products/listProductsHeader.php?cat=computadores">Computadores</a></li>
                  <li><a href="{$BASE_URL}pages/products/listProductsHeader.php?cat=outros">Outros</a></li>
                </ul>
                </li>
              <li id="destaques">Destaques
                <ul class="child">
                  <li><a href="{$BASE_URL}pages/products/listProductsHeader.php?cat=perifericos&dest=1">Periféricos</a></li>
                  <li><a href="{$BASE_URL}pages/products/listProductsHeader.php?cat=telm&dest=1">Telemóveis/Tablets</a></li>
                  <li><a href="{$BASE_URL}pages/products/listProductsHeader.php?cat=computadores&dest=1">Computadores</a></li>
                  <li><a href="{$BASE_URL}pages/products/listProductsHeader.php?cat=outros&dest=1">Outros</a></li>
                </ul>
                </li>
            </ul>
         </nav>
        

       <!--  <div class="coluna"> -->
        
        <!-- </div> -->

        </div>

        </div>
       </div>



       

       
        {if $USERNAME}
          {include file='common/menu_logged_in.tpl'}
           {else}
          {include file='common/menu_logged_out.tpl'}
          {/if}
          

          <nav id="navigation">
           <ul class="parent" style="width: 100%;">
            <li class="carrinho" id="carrinho">
              <div id="carrinho2">
              <div class="carrinho3" id="ncart" onload="updateCart()"></div>
              <i class="fa fa-shopping-cart fa-3x" style="margin-right: 5px;" aria-hidden="true"></i><br>
              </div>
            <div id="precototal" onload="updateCart()"></div>
                <ul class="child">
                  <li><a href="{$BASE_URL}pages/cart/seeCart.php">Ver Carrinho</a></li>
                  <li><a href="{$BASE_URL}pages/cart/checkout.php">Pagamento</a></li>
                </ul>
            </li>
          </ul>
          </nav>
<font color="#D47404">.</font>
    

    </header>
    <body>

    <div id="error_messages">
    {foreach $ERROR_MESSAGES as $error}
      <div class="error" style="padding: 10px 15%;margin-top: -5px;">{$error}
      <button id="lupa" style="float: right; margin-top: -5px;" onclick="closeMsg();"><i class="fa fa-times fa-2x" aria-hidden="true"></i></button></div>
    {/foreach}
    </div>
    <div id="success_messages">
    {foreach $SUCCESS_MESSAGES as $success}
      <div class="success" style="padding: 10px 15%;">{$success}
      <button id="lupa" style="float: right; margin-top: -5px;" onclick="closeMsg();"><i class="fa fa-times fa-2x" aria-hidden="true"></i></button></div>
    {/foreach}
    </div>
   
    <div class="containergeral">
 
