 <div class="container">
	<div class="page-header">
	   <h1>İçerik Düzenleme Ekranı</h1>
    </div>
    <div class="alert alert-{$messageArr.alert|default:'info'}">
    	 <a class="close" data-dismiss="alert">×</a>
    		 Mesaj : {$icerikEditResultMesaj} - Record Result : {$recordResult}
    </div>
 	{$icerikEditFormPath}
	<fieldset>
   <table class="table table-striped">
   		<thead>
    		<tr>
      		<th>Kategori Adı</th>
      		<th>Bölüm Seç</th>
            <th>İçerik Adı</th>
      		<th>Sıra</th>
            <th>Ön Sayfa</th>
            <th>Yayınla</th>
            <th>Sil</th>
            <th>İçerik Düzenle</th>
     	</thead>
			<tbody>
				{foreach from = $icerikTableObjectMultiTable item = icerikRow}
        		<tr>
                	<td><input name="kategoriAdi{$icerikRow.kategoriID}" type="text" id="kategoriAdi{$icerikRow.kategoriID}" value="{$icerikRow.kategoriAdi}" size="25" maxlength="20"  class="span3"/></td>
                  	<td> 
                    <select name="newBolumID{$icerikRow.icerikID}" id="newBolumID{$icerikRow.icerikID}" class="span3">
							{foreach from = $bolumTableObject item = bolumRow}
                                {if $icerikRow.kategoriID == $bolumRow.kategoriID}
                                    {if $icerikRow.bolumID == $bolumRow.bolumID}
                                            <option value="{$bolumRow.bolumID}" selected="selected">{$bolumRow.bolumAdi}</option>
                                        {else}
                                            <option value="{$bolumRow.bolumID}">{$bolumRow.bolumAdi}</option>
                                     {/if} 
                                {/if}                              
                			{/foreach}
						</select>
                    </td>
                  	<td>
               	  	<input name="icerikAdi{$icerikRow.icerikID}" type="text" id="icerikAdi{$icerikRow.icerikID}" value="{$icerikRow.icerikAdi}" size="25" maxlength="20" class="span4"/>
                 	 </td>
                	<td>
                    <select name="icerikOrder{$icerikRow.icerikID}" id="icerikOrder{$icerikRow.icerikID}" class="span1">
                          {foreach from = $icerikKayitSay item = icerikOrder}
                          	{if $icerikRow.icerikOrder == $icerikOrder}
                            		<option selected="selected">{$icerikOrder}</option>
                         	 	{else}
                                	<option>{$icerikOrder}</option>
                             {/if}
                          {/foreach}
					</select>
                    </td>
                    <td>
                    {if $icerikRow.frontShow == 1}
                   			<input type="checkbox" name="frontShow{$icerikRow.icerikID}" checked="checked"  value="1" />
                    	{else}
                    		<input type="checkbox" name="frontShow{$icerikRow.icerikID}" value="1" />
                    {/if}
                    </td>
                	<td>
                    {if $icerikRow.showStatus == 1}
                   			<input type="checkbox" name="showStatus{$icerikRow.icerikID}" checked="checked"  value="1" />
                    	{else}
                    		<input type="checkbox" name="showStatus{$icerikRow.icerikID}" value="1" />
                    {/if}
                    </td>
                	<td>
                    	<input type="checkbox" name="kayitSil{$icerikRow.icerikID}" id="kayitSil{$icerikRow.icerikID}" value="1" />
                    </td>
                    <td>
                    	<!--<input type="radio" name="TextChangeicerikID" id="TextChangeicerikID" value="{$icerikRow.icerikID}" />-->
                        {$icerikRow.icerikUpdateLink}
                    </td>
				</tr>
				{/foreach}
			</tbody>
	</table>
	<div class="form-actions">
    	<input name="icerikEditChangeButton" type="submit" class="btn btn-primary" id="icerikEditChangeButton" value="İşlem Yap"/>
        <input name="icerikEditChangeReset" type="reset" class="btn" id="icerikEditChangeReset" value="Formu Temizle"/>
    </div>         
  </fieldset>