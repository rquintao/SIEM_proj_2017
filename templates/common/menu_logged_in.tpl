<!-- <a href="{$BASE_URL}actions/users/logout.php">Logout</a>
 -->

  {if file_exists('../../'|cat:'images/users/'|cat: $USERNAME|cat:'.jpg')}
      {$photo = '../../'|cat:'images/users/'|cat: $USERNAME|cat:'.jpg'}
  {else if file_exists('../../'|cat:'images/users/'|cat: $USERNAME|cat:'.png')}
      {$photo = '../../'|cat:'images/users/'|cat: $USERNAME|cat:'.png'}
  {else}
      {$photo = '../../'|cat:'images/users/default.png'}
  {/if}

<nav id="navigation">
            <ul class="parent">
              <li class="headerProfile" id="username" style="float: right; margin-right: 15%"><img style="position:relative; top:25px; width: auto; height: 60px;" src="{$photo}"><div style="margin-bottom: 0px;"><br>{$USERNAME}</div>
                <ul class="child">
                  <li><a href="{$BASE_URL}pages/users/showProfile.php">Perfil</a></li>
                  <li><a href="{$BASE_URL}pages/orders/showOrders.php">Encomendas</a></li>
                  {if $ADMIN}
                    <li><a href="{$BASE_URL}pages/users/adminSettings.php">Definições Administrador</a></li>
                  {/if}
                  <li><a href="{$BASE_URL}actions/users/logout.php">Logout</a></li>
                </ul>
                </li>
            </ul>
         </nav>