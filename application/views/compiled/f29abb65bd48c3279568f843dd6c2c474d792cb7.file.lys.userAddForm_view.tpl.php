<?php /* Smarty version Smarty-3.1.7, created on 2012-06-10 17:25:38
         compiled from "application/views/templates/lys/lys.userAddForm_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19515244074f6f7602010663-07591548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29abb65bd48c3279568f843dd6c2c474d792cb7' => 
    array (
      0 => 'application/views/templates/lys/lys.userAddForm_view.tpl',
      1 => 1339255458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19515244074f6f7602010663-07591548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f6f760208284',
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f760208284')) {function content_4f6f760208284($_smarty_tpl) {?> <div class="container">
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
                    <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

                <?php } ?>
            <?php }?>    
    </div>
  <?php echo $_smarty_tpl->tpl_vars['userAddFormPath']->value;?>

	<div class="control-group">
      <label class="control-label" for="siteAdi">Ad*	:</label>
      <div class="controls">
		<input name="ad" type="text" id="ad" size="35" maxlength="30" class="span5" />
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="siteAdi">Soyad*:</label>
      <div class="controls">
      	<input name="soyad" type="text" id="soyad" size="35" maxlength="30" class="span5" />
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="siteAdi">email*:</label>
      <div class="controls">
      	<input name="email" type="text" id="email" size="40" maxlength="50" class="span5" />
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="siteAdi">Cep Telefonu:</label>
      <div class="controls">
    	<input name="ceptel" type="text" id="ceptel" size="10" maxlength="10" class="span5" />
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="siteAdi"> Kullanıcı Adı:</label>
      <div class="controls">
      	<input name="uname" type="text" id="uname" size="25" maxlength="20" class="span3" />
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="siteAdi"> Şifre:</label>
      <div class="controls">
    	<input name="upass" type="password" id="upass" size="10" maxlength="8" class="span3" />
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="siteAdi">Şifre (Tekrar):</label>
      <div class="controls">
      	<input name="upassCheck" type="password" id="upassCheck" size="10" maxlength="8" class="span3" />
      </div>
    </div>
    
    <div class="form-actions">
    	<input type="submit" name="userAddButton" id="userAddButton" class="btn btn-primary" value="Kullanıcı Ekle" />
        <input type="reset" name="userAddButtonReset" id="userAddButtonReset" class="btn" value="Formu Temizle" />
    </div>
 </form><?php }} ?>