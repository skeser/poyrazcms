 <!--<div class="container">
	<div class="page-header">
	   <h1>Bize Ulaşın</h1>
    </div>
	<div class="alert alert-{$messageArr.alert}">
    	 <a class="close" data-dismiss="alert">×</a>
    		{$messageArr.fullText} Record Result : {$recordResult}
    </div>-->
    <div class="span7">
     <!-- {$formpath}-->
      <form action="http://192.168.2.11/~arge/pcms/front/showItem/defter" method="post" accept-charset="utf-8" class="form-horizontal" id="defter">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="ad">Ad :</label>
            <div class="controls">
              <input name="ad" type="text" id="ad" size="40" maxlength="40" class="span4"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="soyad">Soyad :</label>
            <div class="controls">
              <input name="soyad" type="text" id="soyad" size="40" maxlength="40" class="span4" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="email">e-mail :</label>
           <div class="controls">
           		<input name="email" type="text" id="email" size="40" maxlength="40"  class="span4"/>
           </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="email">Tel :</label>
           <div class="controls">
       		 <input name="tel" type="text" id="tel" size="40" maxlength="40"  class="span4"/>
           </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="email">Konu :</label>
           <div class="controls">
       		 <input name="konu" type="text" id="konu" size="40" maxlength="40"  class="span4"/>
           </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="mesaj">Mesajınız :</label>
            <div class="controls">
             <textarea name="mesaj" id="mesaj" cols="200" rows="5"  class="span4"></textarea>
            </div>
          </div>
          <div class="form-actions">
           <input type="submit" name="mesajFormSave"	id="mesajFormSave"			class="btn btn-primary" value="Gönder">
           <input type="reset"  name="mesajFormClear"	id="mesajFormClear"		class="btn btn-danger"	 	value="Fromu Temizle">
          </div>         
     </fieldset>
     </form>
     </div>