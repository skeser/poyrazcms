 <div class="container">
	<div class="page-header">
	   <h1>Kategori  Ekle</h1>
    </div>
	<div class="alert alert-{$messageArr.alert}">
    	 <a class="close" data-dismiss="alert">×</a>
    		{$messageArr.fullText} Record Result : {$recordResult}
    </div>   
      {$formpathKategoriEkle}
        <fieldset>
          <div class="control-group">
             <label class="control-label" for="kategoriAdi">Kategori Adı :</label>
             <div class="controls">
              <input name="kategoriAdi" type="text" id="kategoriAdi" size="25" maxlength="20" class="span6"/>
            </div>
          </div>
          <div class="control-group">
       	    <label class="control-label" for="showStatus">Yayınla</label>
            <div class="controls">      
              <input type="checkbox" value="1" name="showStatus"/>
            </div>
          </div>
          <div class="form-actions">
            <input name="kategoriEkleChangeButton" type="submit" class="btn btn-primary" id="kategoriEkleChangeButton" value="Kategori Ekle"/>
            <input name="userChangeReset" type="reset" class="btn" id="userChangeReset" value="Formu Temizle"/>
          </div>         
     </fieldset>
     </form>
	<div class="page-header">
	   <h1>Kategori Düzenleme</h1>
    </div>
  {$formpathKategoriUpdate}
  <fieldset>
    <table class="table table-striped">
   		<thead>
    		<tr>
      		<th>Kategori Adı</th><th>Yayınla</th><th>Sıra</th><th>Sil</th>
     	</thead>
			<tbody>
				{foreach from = $kategoriTableAllResult item = kategoriRow}
        		<tr>
                    <td>
						<input name="kategoriAdi{$kategoriRow.kategoriID}" type="text" id="kategoriAdi{$kategoriRow.kategoriID}" value="{$kategoriRow.kategoriAdi}" size="25" maxlength="20" class="span6"/>
                    </td>
					<td>
                        {if $kategoriRow.showStatus == 1}
                            <input type="checkbox" name="showStatus{$kategoriRow.kategoriID}" checked="checked"  value="1" />
                        {else}
                            <input type="checkbox" name="showStatus{$kategoriRow.kategoriID}" value="1" />
						{/if}
					</td>
					<td>
                    	<!--{$kategoriRow.sira}-->
                        <select name="order{$kategoriRow.kategoriID}" id="order{$kategoriRow.kategoriID}" class="input-mini">
                          {foreach from = $orderArr item = order}
                          	{if $kategoriRow.sira == {$order}}
                            		<option selected="selected">{$order}</option>
                         	 	{else}
                                	<option>{$order}</option>
                             {/if}
                          {/foreach}
                        </select>
                  </td>
                    <td>
                        <input type="radio" name="kayitSil{$kategoriRow.kategoriID}" id="kayitSil{$kategoriRow.kategoriID}" value="1" />
                    </td>
				</tr>
				{/foreach}
			</tbody>
	</table>
		<div class="form-actions">
			<input name="kategoriEditChangeButton" type="submit" class="btn btn-danger" id="kategoriEditChangeButton" value="Değişiklikleri Kaydet"/>
            <input name="kategoriEditReset" type="reset" class="btn" id="kategoriEditReset" value="Formu Temizle"/>
		</div>         
  </fieldset> 
  </form>