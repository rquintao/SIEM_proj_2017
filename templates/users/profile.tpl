{include file='common/header.tpl'}

{include file='publicity/slider.tpl'}

<div class="coluna" style="width: 100%;">
  <h2 style="text-align: center;">REGISTAR</h2>
  
<form action="{$BASE_URL}pages/users/changeData.php" method="post" enctype="multipart/form-data">
{foreach $users as $user}

  <table class="tabelaregisto">
          <tr>
            <td width="50%" colspan="2"><span class="field_error" style="color: red;">{$FIELD_ERRORS.top}</span></td><td width="25%"></td><td width="25%"></td>
          </tr>
          <tr>
            <td width="25%">Nome:*</td><td width="25%">Email:*</td><td width="50%" colspan="2">Fotografia:</td>
          </tr>
          <tr>
            <td width="25%" id="temcaixa">
              <h3>{$user.realname}</h3>
              <span class="field_error" style="color: red;">{$FIELD_ERRORS.username}</span>
            </td>
            <td width="25%" id="temcaixa">
              <h3>{$user.email}</h3>
              <span class="field_error" style="color: red;">{$FIELD_ERRORS.email}</span>
            </td>
            <td width="50%" id="temcaixa" colspan="2">
             <img src="{$BASE_URL}{$user.photo}" style="height: 128px; width: auto; position: absolute; margin-top: -25px; ">
            </td>
          </tr>
          <tr>
            <td width="25%">Username:*</td>
            <td width="25%">Telemóvel:</td>
            <td width="25%"></td>
            <td width="25%">Palavra-Chave:</td>
          </tr>
          <tr>
            <td width="25%" id="temcaixa">
              <h3 name="p1username">{$user.username}</h3>
            </td>
            <td width="25%" id="temcaixa">
              <h3 name="ptelemovel">{$user.telemovel}</h3>
            </td>
            <td width="25%" id="temcaixa">
              
            </td>
            <td width="25%" id="temcaixa">
              ••••••••••••
            </td>
          </tr>
          
          <tr>
            <td width="50%"  colspan="2"><u><h3 style="margin:0; padding: 0;">MORADA:</h3></u></td><td width="25%">Código Postal:</td><td width="25%">Cidade:</td>
          </tr>
          <tr>
            <td width="50%" id="temcaixa"  colspan="2">
             Endereço: 
            </td>
            <td width="25%" id="temcaixa">
              <h4 name="pcodpostal">{$user.codpostal}</h4>
            </td>
            <td width="25%" id="temcaixa">
              <h4 name="pcidade">{$user.cidade}</h4>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"><h4 name="pendereco1">{$user.endereco1}; </h4></td><td width="25%">Região:</td><td width="25%">País:</td>
          </tr>
          <tr>
            <td width="50%" id="temcaixa"  colspan="2">
              <h4 name="pendereco2">{$user.endereco2}</h4>
            </td>
            <td width="25%" id="temcaixa">
              <h4 name="pregiao">{$user.regiao}</h4>
            </td>
            <td width="25%" id="temcaixa">
              <h4 name="ppais">{$user.pais}</h4>
            </td>
          </tr>
          <tr>
            <td width="50%"  colspan="2"><span class="error2"><?php echo $MsgErro;?></span></td><td width="25%"></td><td width="25%"><button type = "submit" name="cmdsubmit" value="">Alterar dados</button></td>
          </tr>
        </table>
        <input type="hidden" name="username" value="{$user.username}">
        <input type="hidden" name="realname" value="{$user.realname}">
        <input type="hidden" name="regemail" value="{$user.email}">
        <input type="hidden" name="regcidade" value="{$user.cidade}">
        <input type="hidden" name="regregiao" value="{$user.regiao}">
        <input type="hidden" name="regpais" value="{$user.pais}">
        <input type="hidden" name="regendereco1" value="{$user.endereco1}">
        <input type="hidden" name="regendereco2" value="{$user.endereco2}">
        <input type="hidden" name="regcodpostal" value="{$user.codpostal}">
        <input type="hidden" name="regtelemovel" value="{$user.telemovel}">
        <input type="hidden" name="profile" value="1">
  {/foreach}
</form>

</div>

{include file='common/footer.tpl'}
