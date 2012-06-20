  <body>
    <div class="container">

      <div class="content">
     	<div class="page-header">
          <h1>{$pageInfoArr.projectName}<small>		ViewSİS  MsSQL-MySQL</small></h1>
        </div>
        <div class="row">
          <div class="span16">
          	<div class="alert-message block-message info">
	          	<h2>{$pageInfoArr.pageName}</h2>
    		</div>        
            {foreach key = i item = data from = $validation_errors}
   				{$data}
			{/foreach}
            {$loginResultMesaj|default:'&nbsp;'}
            {$formpath}
            <div class="row">
           		<span class="span3"><strong>Kullanıcı Adı :</strong></span>
            		<input type="text" name="unameFromUser" value="" size="50" />
            </div>
            <div class="row">
          		<span class="span3"><strong>Şifre :</strong></span>
                  <input type="password" name="passFromUser" value="" size="50" />
           </div>
           <div class="row">
           <br />
           <div class="span3">.</div>
           		<button type="submit" id="login" 	  class="btn btn-primary">Gönder</button>
          		<button type="reset"  id="loginReset" class="btn"			 >Temizle</button>
    		</div>
                
			</form>


          </div>
          
        </div>
      </div>
      <!-- /container footer'de kapaniyor.-->