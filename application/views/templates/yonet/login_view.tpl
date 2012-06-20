<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<body>
     {foreach name = error_print key = i item = data from = $validation_errors}
        {$data}
    {/foreach}
    
    {$formpath}
    
    <h5>Username : 
      <input type="text" name="username" value="" size="50" />
    </h5>
    <h5>Password : 
      <input type="text" name="password" value="" size="50" />
    </h5>
    
    <div><input name="gonder" type="submit" id="gonder" value="Gonder" />
      | 
      <input name="reset" type="reset" id="reset" value="Temizle" />
    </div>

</form>
</body>
</html>