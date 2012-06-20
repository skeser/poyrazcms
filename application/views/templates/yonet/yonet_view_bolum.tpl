 <div class="container">
    <div class="page-header">
	   <h1>Bölüm Ekleme</h1>
    </div>
	<div class="alert alert-{$messageArr.alert|default:'info'}">
    	 <a class="close" data-dismiss="alert">×</a>
    		 Mesaj : {$bolumResultMesaj} - Record Result : {$recordResult}
    </div>
      {$formpathBolumEkle}
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="kategoriID">Kategori Seç</label>
            <div class="controls">
             <select name="kategoriID" id="kategoriID">
				{foreach from = $kategoriTableObject item = kategoriRow}
            		<option value="{$kategoriRow.kategoriID}">{$kategoriRow.kategoriAdi}</option>
                {/foreach}
 			 </select>
           </div>
          </div>
          <div class="control-group">
             <label class="control-label" for="bolumAdi">Bölüm Adı :</label>
            <div class="controls">
              <input name="bolumAdi" type="text" id="bolumAdi" size="25" maxlength="20" class="xlarge"/>
            </div>
          </div>
          <div class="control-group">
       	     <label class="control-label" for="showStatus">Yayınla</label>
             <div class="controls">        
                    <input type="checkbox" value="1" name="showStatus"/>
            </div>
          </div>
          <div class="form-actions">
            <input name="bolumEkleChangeButton" type="submit" class="btn btn-primary" id="bolumEkleChangeButton" value="Bölüm Ekle"/>
            <input name="bolumEkleChangeReset" type="reset" class="btn" id="bolumEkleChangeReset" value="Formu Temizle"/>
          </div>         
     </fieldset>
     </form>
  <div class="page-header">
	 <h1>Bölüm Düzenleme</h1>
  </div>
  <div class="alert alert-{$messageArr.alert|default:'info'}">
     <a class="close" data-dismiss="alert">×</a>
    	 {$formGetBolumMultiEditMesaj}
  </div>
  {$formpathBolumUpdate}
  <fieldset>
    <table class="table table-striped">
   		<thead>
    		<tr>
      		<th>Kategori Adı</th><th>Bölüm Adı</th><th>Sıra</th><th>Yayınla</th><th>Sil</th>
     	</thead>
			<tbody>
				{foreach from = $bolumTableObject item = bolumRow}
        		<tr>
                  <td>
                    	<!--{$bolumRow.sira}-->
                        <select name="newKategoriID{$bolumRow.bolumID}" id="newKategoriID{$bolumRow.bolumID}" class="span4">
							{foreach from = $kategoriTableObject item = kategoriRow}
                            	{if $bolumRow.kategoriID == $kategoriRow.kategoriID}
            							<option value="{$kategoriRow.kategoriID}" selected="selected">{$kategoriRow.kategoriAdi}</option>
                                	{else}
                                		<option value="{$kategoriRow.kategoriID}">{$kategoriRow.kategoriAdi}</option>
								 {/if}                               
                			{/foreach}
						</select>
                  </td>
                  <td>
					<input name="bolumAdi{$bolumRow.bolumID}" type="text" id="bolumAdi{$bolumRow.bolumID}" value="{$bolumRow.bolumAdi}" size="25" maxlength="20" class="span5"/>
                    </td>
					<td>
                    	<!--{$bolumRow.sira}-->
                        
                        <select name="bolumOrder{$bolumRow.bolumID}" id="bolumOrder{$bolumRow.bolumID}" class="input-mini">
                          {foreach from = $bolumKayitSay item = bolumOrder}
                          	{if $bolumRow.bolumOrder == $bolumOrder}
                            		<option selected="selected">{$bolumOrder}</option>
                         	 	{else}
                                	<option>{$bolumOrder}</option>
                             {/if}
                          {/foreach}
                        </select>
                  </td>
                <td>
                    {if $bolumRow.showStatus == 1}
                   			<input type="checkbox" name="showStatus{$bolumRow.bolumID}" checked="checked"  value="1" />
                    	{else}
                    		<input type="checkbox" name="showStatus{$bolumRow.bolumID}" value="1" />
                    {/if}
				</td>
                    <td>
                        <input type="radio" name="kayitSil{$bolumRow.bolumID}" id="kayitSil{$bolumRow.bolumID}" value="1" />
                    </td>
				</tr>
				{/foreach}
			</tbody>
	</table>
		<div class="form-actions">
			<input name="bolumEditChangeButton" type="submit" class="btn btn-danger" id="bolumEditChangeButton" value="Değişiklikleri Kaydet"/>
            <input name="bolumEditReset" type="reset" class="btn" id="bolumEditReset" value="Formu Temizle"/>
		</div>         
  </fieldset> 
  </form>