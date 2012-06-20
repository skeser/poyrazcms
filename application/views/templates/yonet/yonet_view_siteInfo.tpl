 <div class="container">
	<div class="page-header">
	   <h1>Site Bilgileri Giriş/Düzenleme Ekranı</h1>
    </div>
	<div class="alert alert-{$messageArr.alert}">
    	 <a class="close" data-dismiss="alert">×</a>
    		{$messageArr.fullText} Record Result : {$recordResult}
    </div>
      {$formpath}
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="siteAdi">Site Adı :</label>
            <div class="controls">
              <input name="siteAdi" type="text" id="siteAdi" size="40" maxlength="40" value="{$siteInfoArr.siteAdi}" class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="slogan">Slogan :</label>
            <div class="controls">
              <input name="slogan" type="text" id="slogan" size="50" maxlength="50" value="{$siteInfoArr.slogan}"  class="span6" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="title">Title :</label>
           <div class="controls">
           		<input name="title" type="text" id="title" size="40" maxlength="40" value="{$siteInfoArr.title}"  class="span6"/>
           </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="description">Description:</label>
            <div class="controls">
             <textarea name="description" id="description" cols="200" rows="5"  class="span6">{$siteInfoArr.description}</textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="keywords">Keywords:</label>
            <div class="controls">
             <textarea name="keywords" id="keywords" cols="500" rows="5"  class="span6">{$siteInfoArr.keywords}</textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="copyright">Copyright:</label>
            <div class="controls">
             <input name="copyright" type="text" id="copyright" size="40" maxlength="40" value="{$siteInfoArr.copyright}"  class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="author">Author:</label>
            <div class="controls">
             <input name="author" type="text" id="author" size="50" maxlength="50" value="{$siteInfoArr.author}"  class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="downMessage">Site Down Mesaj:</label>
            <div class="controls">
              <textarea name="downMessage" id="downMessage" cols="500" rows="5"  class="span6">{$siteInfoArr.downMessage}</textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="templateName">Template Name:</label>
            <div class="controls">
               <input name="templateName" type="text" id="templateName" size="40" maxlength="40" value="{$siteInfoArr.templateName}" class="input-xlarge"/>
            </div>
          </div>
          <div class="form-actions">
           <input type="submit" name="siteInfoChange"		id="siteInfoChange"			class="btn btn-primary" value="Kaydet">
           <input type="reset"  name="siteInfoChangeReset"	id="siteInfoChangeReset"	class="btn"			 	value="Fromu Temizle">
          </div>         
     </fieldset>
     </form>