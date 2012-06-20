<?php /* Smarty version Smarty-3.1.7, created on 2012-06-10 17:25:26
         compiled from "application/views/templates/yonet/yonet_view_icerikEkle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19505612234f873e96cd4ac3-34485751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f12ba74a5ff4a989d9e2424dde63dcca8afbe0' => 
    array (
      0 => 'application/views/templates/yonet/yonet_view_icerikEkle.tpl',
      1 => 1339255458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19505612234f873e96cd4ac3-34485751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f873e96d2999',
  'variables' => 
  array (
    'messageArr' => 0,
    'icerikEkleResultMesaj' => 0,
    'recordResult' => 0,
    'icerikEkleFormPath' => 0,
    'bolumTableObject' => 0,
    'bolumRow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f873e96d2999')) {function content_4f873e96d2999($_smarty_tpl) {?> <div class="container">
	<div class="page-header">
	   <h1>İçerik Ekleme Ekranı</h1>
    </div>
	<div class="alert alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['messageArr']->value['alert'])===null||$tmp==='' ? 'info' : $tmp);?>
">
    	 <a class="close" data-dismiss="alert">×</a>
    		 Mesaj : <?php echo $_smarty_tpl->tpl_vars['icerikEkleResultMesaj']->value;?>
 - Record Result : <?php echo $_smarty_tpl->tpl_vars['recordResult']->value;?>

    </div>
    <?php echo $_smarty_tpl->tpl_vars['icerikEkleFormPath']->value;?>

        <fieldset>
          <div class="control-group">
            <label class="control-label" for="kategoriID">Bölüm Seç :</label>
            <div class="controls">
             <select name="bolumID" id="bolumID" class="span4">
				<?php  $_smarty_tpl->tpl_vars['bolumRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bolumRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bolumTableObject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bolumRow']->key => $_smarty_tpl->tpl_vars['bolumRow']->value){
$_smarty_tpl->tpl_vars['bolumRow']->_loop = true;
?>
            		<option value="<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
"><?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumAdi'];?>
</option>
                <?php } ?>
 			 </select>
            </div>
          </div>
         <div class="control-group">
          <label class="control-label" for="kategoriID">İçeik Adı:</label>
          <div class="controls">
              <input name="icerikAdi" type="text" id="icerikAdi" size="30" maxlength="33" class="span6"/>
          </div>
         </div>
         <div class="control-group">
          <label class="control-label" for="bolumAdi">İçerik Özet:</label>
          <div class="controls">
          		<textarea name="icerikOzet" id="icerikOzet" cols="200" rows="5" class="span6"></textarea>
          </div>
         </div>
        <div class="control-group">
         <label class="control-label" for="bolumAdi">İçerik Text:</label> 
         <div class="controls">
        	<textarea name="icerikText" id="icerikText" cols="2000" rows="10" class="span6"></textarea>
         </div>
        </div>
		<div class="form-actions">
    		<input name="icerikEkleChangeButton" type="submit" class="btn btn-primary" id="icerikEkleChangeButton" value="İçerik Ekle"/>
        	<input name="icerikEkleChangeReset" type="reset" class="btn" id="icerikEkleChangeReset" value="Formu Temizle"/>
		</div>         
     </fieldset>
   </form><?php }} ?>