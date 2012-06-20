<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{$baseURL}css/bootstrap/v1.4.0/bootstrap.css">
<title>{$SiteTitle}--{$PageTitle}</title>
  </head>
  <body>
    <div class="container">

      <div class="content">
     	<div class="page-header">
          <h1>{$pageName}<small>.</small></h1>
        </div>
        <div class="row">
          <div class="span16">
          	<div class="alert-message block-message info">
	          	<h2>Giriş Sayfası</h2>
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
                <input type="submit" value="Gönder" class="btn primary" />
                <input name="Reset" type="reset" class="btn danger" value="Reset" />
    		</div>
                
			</form>


          </div>
          
        </div>
      </div>

      <footer>
        <p>&copy; Age-Satınalma Onay Sistemi - 2012</p>

      </footer>

    </div> <!-- /container -->

</body>
</html>