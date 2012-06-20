<?php /* Smarty version Smarty-3.1.7, created on 2012-06-10 17:25:17
         compiled from "application/views/templates/yonet/yonet_view_firma.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12013776204f873c711082a3-39957876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43979758adac0b7aeba6a0690216705eb0baddbe' => 
    array (
      0 => 'application/views/templates/yonet/yonet_view_firma.tpl',
      1 => 1339255458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12013776204f873c711082a3-39957876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f873c71186d7',
  'variables' => 
  array (
    'messageArr' => 0,
    'recordResult' => 0,
    'formpath' => 0,
    'firmaArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f873c71186d7')) {function content_4f873c71186d7($_smarty_tpl) {?> <div class="container">
	<div class="page-header">
	   <h1>Firma Bilgileri Giriş/Düzenleme Ekranı</h1>
    </div>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['messageArr']->value['alert'];?>
">
    	 <a class="close" data-dismiss="alert">×</a>
    		<?php echo $_smarty_tpl->tpl_vars['messageArr']->value['fullText'];?>
 Record Result : <?php echo $_smarty_tpl->tpl_vars['recordResult']->value;?>

    </div>
      <?php echo $_smarty_tpl->tpl_vars['formpath']->value;?>

        <fieldset>
          <div class="control-group">
            <label class="control-label" for="firmaAdi">Firma Adı :</label>
            <div class="controls">
              <input name="firmaAdi" type="text" id="firmaAdi" size="50" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['firmaArr']->value['firmaAdi'];?>
"  class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="unvan">Unvan :</label>
            <div class="controls">
              <input name="unvan" type="text" id="unvan" size="50" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['firmaArr']->value['unvan'];?>
" class="span6" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="kisaAd">Kısa Ad :</label>
           <div class="controls">
           		<input name="kisaAd" type="text" id="kisaAd" size="40" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['firmaArr']->value['kisaAd'];?>
" class="span6"/>
           </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="description">Adres :</label>
            <div class="controls">
             <textarea name="adres" id="adres" cols="200" rows="5" class="span6"><?php echo $_smarty_tpl->tpl_vars['firmaArr']->value['adres'];?>
</textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="tel">Telefon :</label>
            <div class="controls">
             <input name="tel" type="text" id="tel" size="11" maxlength="11" value="<?php echo $_smarty_tpl->tpl_vars['firmaArr']->value['tel'];?>
" class="span6"/>
			</div>
          </div>
          <div class="control-group">
            <label class="control-label" for="fax">Fax :</label>
            <div class="controls">
             <input name="fax" type="text" id="fax" size="11" maxlength="11" value="<?php echo $_smarty_tpl->tpl_vars['firmaArr']->value['fax'];?>
" class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="mail">e-Mail :</label>
            <div class="controls">
             <input name="email" type="text" id="email" size="50" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['firmaArr']->value['email'];?>
" class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="web">Web Site:</label>
            <div class="controls">
               <input name="website" type="text" id="website" size="40" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['firmaArr']->value['website'];?>
" class="span6"/>
            </div>
          </div>
          <div class="form-actions">
           <input type="submit" name="firmaChange"		id="firmaChange"		class="btn btn-primary" value="Kaydet">
           <input type="reset"  name="firmaChangeReset"	id="firmaChangeReset"	class="btn"			 	value="Fromu Temizle">
          </div>         
     </fieldset>
     </form><?php }} ?>