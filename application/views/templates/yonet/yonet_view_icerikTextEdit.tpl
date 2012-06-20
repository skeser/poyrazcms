 <div class="container">
	<div class="page-header">
	   <h1>İçerik Düzenleme Ekranı</h1>
    </div>
    <div class="alert alert-{$messageArr.alert|default:'info'}">
    	 <a class="close" data-dismiss="alert">×</a>
    		 Mesaj : {$icerikTextEditResultMesaj}
    </div>
 {$icerikTextEditFormPath}
      <fieldset>
         <div class="control-group">
            <label class="control-label" for="kategoriID">Bölüm Seç :</label>
         	<div class="controls">
             <select name="newbolumID" id="newbolumID" class="medium">
				{foreach from = $bolumTableObject item = bolumRow}
                 {if $icerikTextArr.kategoriID == $bolumRow.kategoriID}
                                    {if $icerikTextArr.bolumID == $bolumRow.bolumID}
                                            <option value="{$bolumRow.bolumID}" selected="selected">{$bolumRow.bolumAdi}</option>
                                        {else}
                                            <option value="{$bolumRow.bolumID}">{$bolumRow.bolumAdi}</option>
                                     {/if} 
                                {/if}                 
                {/foreach}
 			 </select>
            </div>
          </div>
          
         <div class="control-group">
            <label class="control-label" for="kategoriID">İçerik Adı:</label>
            <div class="controls">
              <input name="icerikAdi" type="text" id="icerikAdi" size="30" maxlength="33" value="{$icerikTextArr.icerikAdi}" class="span5"/>
            </div>
          </div>
          
         <div class="control-group">
            <label class="control-label" for="bolumAdi">İçerik Özet:</label>
            <div class="controls">
            	<textarea name="icerikOzet" id="icerikOzet" cols="200" rows="5" class="span8">{$icerikTextArr.icerikOzet}</textarea>
            </div>
          </div>
         <div class="control-group">
            <label class="control-label" for="bolumAdi">İçerik Text:</label> 
         	<div class="controls">
            	<textarea name="icerikText" id="icerikText" cols="2000" rows="10" class="span8">{$icerikTextArr.icerikText}</textarea>
            </div>
         </div>
             <input name="icerikID" type="hidden" id="icerikID" size="30" maxlength="33" value="{$icerikTextArr.icerikID}"/>
		<div class="form-actions">
        	<input name="icerikTextEditChangeButton" type="submit" class="btn primary" id="icerikTextEditChangeButton" value="İşlem Yap"/>
            <input name="icerikTextEditChangeReset" type="reset" class="btn" id="icerikTextEditChangeReset" value="Formu Temizle"/>
        </div>         
     </fieldset>
 </form>