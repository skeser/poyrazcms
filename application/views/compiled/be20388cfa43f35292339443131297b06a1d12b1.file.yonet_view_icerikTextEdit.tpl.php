<?php /* Smarty version Smarty-3.1.7, created on 2012-04-14 23:36:01
         compiled from "application/views/templates/yonet/yonet_view_icerikTextEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1461260484f873ffb779c70-55774487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be20388cfa43f35292339443131297b06a1d12b1' => 
    array (
      0 => 'application/views/templates/yonet/yonet_view_icerikTextEdit.tpl',
      1 => 1334417015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1461260484f873ffb779c70-55774487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f873ffb80141',
  'variables' => 
  array (
    'messageArr' => 0,
    'icerikTextEditResultMesaj' => 0,
    'icerikTextEditFormPath' => 0,
    'bolumTableObject' => 0,
    'icerikTextArr' => 0,
    'bolumRow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f873ffb80141')) {function content_4f873ffb80141($_smarty_tpl) {?> <div class="container">
	<div class="page-header">
	   <h1>İçerik Düzenleme Ekranı</h1>
    </div>
    <div class="alert alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['messageArr']->value['alert'])===null||$tmp==='' ? 'info' : $tmp);?>
">
    	 <a class="close" data-dismiss="alert">×</a>
    		 Mesaj : <?php echo $_smarty_tpl->tpl_vars['icerikTextEditResultMesaj']->value;?>

    </div>
 <?php echo $_smarty_tpl->tpl_vars['icerikTextEditFormPath']->value;?>

      <fieldset>
         <div class="control-group">
            <label class="control-label" for="kategoriID">Bölüm Seç :</label>
         	<div class="controls">
             <select name="newbolumID" id="newbolumID" class="medium">
				<?php  $_smarty_tpl->tpl_vars['bolumRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bolumRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bolumTableObject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bolumRow']->key => $_smarty_tpl->tpl_vars['bolumRow']->value){
$_smarty_tpl->tpl_vars['bolumRow']->_loop = true;
?>
                 <?php if ($_smarty_tpl->tpl_vars['icerikTextArr']->value['kategoriID']==$_smarty_tpl->tpl_vars['bolumRow']->value['kategoriID']){?>
                                    <?php if ($_smarty_tpl->tpl_vars['icerikTextArr']->value['bolumID']==$_smarty_tpl->tpl_vars['bolumRow']->value['bolumID']){?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumAdi'];?>
</option>
                                        <?php }else{ ?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
"><?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumAdi'];?>
</option>
                                     <?php }?> 
                                <?php }?>                 
                <?php } ?>
 			 </select>
            </div>
          </div>
          
         <div class="control-group">
            <label class="control-label" for="kategoriID">İçerik Adı:</label>
            <div class="controls">
              <input name="icerikAdi" type="text" id="icerikAdi" size="30" maxlength="33" value="<?php echo $_smarty_tpl->tpl_vars['icerikTextArr']->value['icerikAdi'];?>
" class="span5"/>
            </div>
          </div>
          
         <div class="control-group">
            <label class="control-label" for="bolumAdi">İçerik Özet:</label>
            <div class="controls">
            	<textarea name="icerikOzet" id="icerikOzet" cols="200" rows="5" class="span8"><?php echo $_smarty_tpl->tpl_vars['icerikTextArr']->value['icerikOzet'];?>
</textarea>
            </div>
          </div>
         <div class="control-group">
            <label class="control-label" for="bolumAdi">İçerik Text:</label> 
         	<div class="controls">
            	<textarea name="icerikText" id="icerikText" cols="2000" rows="10" class="span8"><?php echo $_smarty_tpl->tpl_vars['icerikTextArr']->value['icerikText'];?>
</textarea>
            </div>
         </div>
             <input name="icerikID" type="hidden" id="icerikID" size="30" maxlength="33" value="<?php echo $_smarty_tpl->tpl_vars['icerikTextArr']->value['icerikID'];?>
"/>
		<div class="form-actions">
        	<input name="icerikTextEditChangeButton" type="submit" class="btn primary" id="icerikTextEditChangeButton" value="İşlem Yap"/>
            <input name="icerikTextEditChangeReset" type="reset" class="btn" id="icerikTextEditChangeReset" value="Formu Temizle"/>
        </div>         
     </fieldset>
 </form><?php }} ?>