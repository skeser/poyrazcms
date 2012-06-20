<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 16:36:54
         compiled from "application/views/templates/lys/lys.userEditForm_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4244852374f7b21bef16506-46945046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '395e3d16e5ab82c5d768a4378a9eb7c4a1ef59db' => 
    array (
      0 => 'application/views/templates/lys/lys.userEditForm_view.tpl',
      1 => 1340196668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4244852374f7b21bef16506-46945046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f7b21bf08d36',
  'variables' => 
  array (
    'pageInfoArr' => 0,
    'messageArr' => 0,
    'resultMessage' => 0,
    'mukerrerStatus' => 0,
    'mukerrerResult' => 0,
    'validation_errors' => 0,
    'data' => 0,
    'userAddFormPath' => 0,
    'userObj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7b21bf08d36')) {function content_4f7b21bf08d36($_smarty_tpl) {?> <div class="container">
	<div class="page-header">
	   <h1><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['pageName'];?>
<small>.</small></h1>
    </div>
	<div class="alert alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['messageArr']->value['alert'])===null||$tmp==='' ? 'info' : $tmp);?>
">
    	 <a class="close" data-dismiss="alert">×</a>
    	 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['resultMessage']->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>

    		<?php if ($_smarty_tpl->tpl_vars['mukerrerStatus']->value=="true"){?>
       			 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['mukerrerResult']->value['uname'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
<br />
       			 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['mukerrerResult']->value['email'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>

   			
            	<?php }else{ ?>
        			<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['validation_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
            			<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>

        			<?php } ?>
    		<?php }?>     
    </div>
    <?php echo $_smarty_tpl->tpl_vars['userAddFormPath']->value;?>

      <div class="control-group">
       <label class="control-label" for="siteAdi">Ad*	:</label>
          <div class="controls">
            <input name="ad" type="text" id="ad" size="35" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['userObj']->value['ad'];?>
" />
          </div>
      </div><!-- /clearfix -->
      <div class="control-group">
        <label class="control-label" for="siteAdi">Soyad*:</label>
      <div class="controls">
         <input name="soyad" type="text" id="soyad" size="35" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['userObj']->value['soyad'];?>
" />
      </div>
      </div><!-- /clearfix -->
      <div class="control-group">
        <label class="control-label" for="siteAdi">email*:</label>
      <div class="controls">
        <input name="email" type="text" id="email" size="40" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['userObj']->value['email'];?>
" />
        <span id="repeadTestResult"></span>
       </div>
      </div><!-- /clearfix -->
      <div class="control-group">
        <label class="control-label" for="siteAdi">Cep Telefonu:</label>
      <div class="controls">
      <input name="ceptel" type="text" id="ceptel" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['userObj']->value['ceptel'];?>
" />
      </div>
      </div><!-- /clearfix -->
      <div class="control-group">
        <label class="control-label" for="siteAdi"> Kullanıcı Adı:</label>
      <div class="controls">
        <input name="uname" type="text" id="uname" size="25" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['userObj']->value['uname'];?>
" disabled="disabled" />
       </div>
      </div><!-- /clearfix -->
      <div class="control-group">
        <label class="control-label" for="siteAdi"> Şifre:</label>
      <div class="controls">
      <input name="upass" type="password" id="upass" size="10" maxlength="8" />
     </div>
      </div><!-- /clearfix -->
      <div class="control-group">
        <label class="control-label" for="siteAdi">Şifre (Tekrar):</label>
      <div class="controls">
          <input name="upassCheck" type="password" id="upassCheck" size="10" maxlength="8" />
      </div>
      </div><!-- /clearfix -->
  <input name="userID" type="hidden" id="userID" value="<?php echo $_smarty_tpl->tpl_vars['userObj']->value['userID'];?>
"/>
  <div class="form-actions">
  	<input type="submit" name="userAddButton" id="userAddButton" class="btn btn-danger" value="Kaydet" />
    <input type="reset" name="userAddButtonReset" id="userAddButtonReset" class="btn" value="Formu Temizle" />
  </div>
    </form><?php }} ?>