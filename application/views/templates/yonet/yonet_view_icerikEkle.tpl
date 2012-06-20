 <div class="container">
	<div class="page-header">
	   <h1>İçerik Ekleme Ekranı</h1>
    </div>
	<div class="alert alert-{$messageArr.alert|default:'info'}">
    	 <a class="close" data-dismiss="alert">×</a>
    		 Mesaj : {$icerikEkleResultMesaj} - Record Result : {$recordResult}
    </div>
    {$icerikEkleFormPath}
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="kategoriID">Bölüm Seç :</label>
            <div class="controls">
             <select name="bolumID" id="bolumID" class="span4">
				{foreach from = $bolumTableObject item = bolumRow}
            		<option value="{$bolumRow.bolumID}">{$bolumRow.bolumAdi}</option>
                {/foreach}
 			 </select>
            </div>
          </div>
         <div class="control-group">
          <label class="control-label" for="kategoriID">İçeik Adı:</label>
          <div class="controls">
              <input name="icerikAdi" type="text" id="icerikAdi" size="30" maxlength="33" class="span6"/>
          </div>
         </div>
         <div class="control-group">
          <label class="control-label" for="bolumAdi">İçerik Özet:</label>
          <div class="controls">
          		<textarea name="icerikOzet" id="icerikOzet" cols="200" rows="5" class="span6"></textarea>
          </div>
         </div>
        <div class="control-group">
         <label class="control-label" for="bolumAdi">İçerik Text:</label> 
         <div class="controls">
        	<textarea name="icerikText" id="icerikText" cols="2000" rows="10" class="span6"></textarea>
         </div>
        </div>
		<div class="form-actions">
    		<input name="icerikEkleChangeButton" type="submit" class="btn btn-primary" id="icerikEkleChangeButton" value="İçerik Ekle"/>
        	<input name="icerikEkleChangeReset" type="reset" class="btn" id="icerikEkleChangeReset" value="Formu Temizle"/>
		</div>         
     </fieldset>
   </form>