	<div class="content">
    <div class="span12">
      {$formpath}
        <fieldset>
          <legend>Kullanıcı Bilgileri Giriş/Düzenleme Ekranı</legend>
          Mesaj : {$userResultMesaj} - Record Result : {$recordResult}<br />
          <div class="clearfix">
            <label for="userName">Kullanıcı Adı:</label>
            <div class="input">
              <input name="userName" type="text" id="userName" size="25" maxlength="25" value="{$userUpdateArr.userName}"  class="xlarge"/>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="userPass1">Sifre :</label>
            <div class="input">
              <input name="userPass1" type="password" id="userPass1" size="10" maxlength="8" value="{$userUpdateArr.userPass}" class="xlarge" />
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="kisaAd">Sifre (Tekrar) :</label>
           <div class="input">
           		<input name="userPass2" type="password" id="userPass2" size="10" maxlength="8" value="{$userUpdateArr.userPass}" class="xlarge"/>
           </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="userAd">Ad:</label>
            <div class="input">
             <input name="userAd" type="text" id="userAd" size="25" maxlength="25" value="{$userUpdateArr.userAd}" class="xlarge"/>
			</div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="userAd">Soyad:</label>
            <div class="input">
             <input name="userSoyad" type="text" id="userAd" size="30" maxlength="30" value="{$userUpdateArr.userSoyad}" class="xlarge"/>
			</div>
          </div><!-- /clearfix -->
          <input name="userID" type="hidden" id="userID" size="25" maxlength="25" value="{$userUpdateArr.userID}"  class="xlarge"/>
           <div class="actions">
            <input name="{$button.name}" type="submit" class="btn primary" id="{$button.name}" value="{$button.value}"/>
            <input name="userChangeReset" type="reset" class="btn" id="userChangeReset" value="Formu Temizle"/>
          </div>         
     </fieldset>
     </form>
  </div>
  Kayıtlı Kullanıcılar
     <table border="1">
   		<thead>
    		<tr>
      		  <th>User Name</th><th>Ad</th><th>Soyad</th><th>Düzenle</th>
     	</thead>
   		<tbody>
        	{foreach from = $userArr item = userRow}
        		<tr>
                	<td>{$userRow.userName}</td>
                    <td>{$userRow.userAd}</td>
                    <td>{$userRow.userSoyad}</td>
                    <td>{$userRow.updateLinks }</td>
       			</tr>
       		{/foreach}
       </tbody>
    </table>
  </div> <!--container-fluid kapa-->