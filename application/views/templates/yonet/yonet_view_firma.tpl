 <div class="container">
	<div class="page-header">
	   <h1>Firma Bilgileri Giriş/Düzenleme Ekranı</h1>
    </div>
	<div class="alert alert-{$messageArr.alert}">
    	 <a class="close" data-dismiss="alert">×</a>
    		{$messageArr.fullText} Record Result : {$recordResult}
    </div>
      {$formpath}
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="firmaAdi">Firma Adı :</label>
            <div class="controls">
              <input name="firmaAdi" type="text" id="firmaAdi" size="50" maxlength="100" value="{$firmaArr.firmaAdi}"  class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="unvan">Unvan :</label>
            <div class="controls">
              <input name="unvan" type="text" id="unvan" size="50" maxlength="100" value="{$firmaArr.unvan}" class="span6" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="kisaAd">Kısa Ad :</label>
           <div class="controls">
           		<input name="kisaAd" type="text" id="kisaAd" size="40" maxlength="50" value="{$firmaArr.kisaAd}" class="span6"/>
           </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="description">Adres :</label>
            <div class="controls">
             <textarea name="adres" id="adres" cols="200" rows="5" class="span6">{$firmaArr.adres}</textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="tel">Telefon :</label>
            <div class="controls">
             <input name="tel" type="text" id="tel" size="11" maxlength="11" value="{$firmaArr.tel}" class="span6"/>
			</div>
          </div>
          <div class="control-group">
            <label class="control-label" for="fax">Fax :</label>
            <div class="controls">
             <input name="fax" type="text" id="fax" size="11" maxlength="11" value="{$firmaArr.fax}" class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="mail">e-Mail :</label>
            <div class="controls">
             <input name="email" type="text" id="email" size="50" maxlength="60" value="{$firmaArr.email}" class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="web">Web Site:</label>
            <div class="controls">
               <input name="website" type="text" id="website" size="40" maxlength="40" value="{$firmaArr.website}" class="span6"/>
            </div>
          </div>
          <div class="form-actions">
           <input type="submit" name="firmaChange"		id="firmaChange"		class="btn btn-primary" value="Kaydet">
           <input type="reset"  name="firmaChangeReset"	id="firmaChangeReset"	class="btn"			 	value="Fromu Temizle">
          </div>         
     </fieldset>
     </form>