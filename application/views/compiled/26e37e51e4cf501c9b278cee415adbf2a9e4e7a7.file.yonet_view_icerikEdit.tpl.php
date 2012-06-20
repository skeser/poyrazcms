<?php /* Smarty version Smarty-3.1.7, created on 2012-06-09 20:09:38
         compiled from "application/views/templates/yonet/yonet_view_icerikEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6051215984f873fb12257e8-31776058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26e37e51e4cf501c9b278cee415adbf2a9e4e7a7' => 
    array (
      0 => 'application/views/templates/yonet/yonet_view_icerikEdit.tpl',
      1 => 1339255759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6051215984f873fb12257e8-31776058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f873fb132763',
  'variables' => 
  array (
    'messageArr' => 0,
    'icerikEditResultMesaj' => 0,
    'recordResult' => 0,
    'icerikEditFormPath' => 0,
    'icerikTableObjectMultiTable' => 0,
    'icerikRow' => 0,
    'bolumTableObject' => 0,
    'bolumRow' => 0,
    'icerikKayitSay' => 0,
    'icerikOrder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f873fb132763')) {function content_4f873fb132763($_smarty_tpl) {?> <div class="container">
	<div class="page-header">
	   <h1>İçerik Düzenleme Ekranı</h1>
    </div>
    <div class="alert alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['messageArr']->value['alert'])===null||$tmp==='' ? 'info' : $tmp);?>
">
    	 <a class="close" data-dismiss="alert">×</a>
    		 Mesaj : <?php echo $_smarty_tpl->tpl_vars['icerikEditResultMesaj']->value;?>
 - Record Result : <?php echo $_smarty_tpl->tpl_vars['recordResult']->value;?>

    </div>
 	<?php echo $_smarty_tpl->tpl_vars['icerikEditFormPath']->value;?>

	<fieldset>
   <table class="table table-striped">
   		<thead>
    		<tr>
      		<th>Kategori Adı</th>
      		<th>Bölüm Seç</th>
            <th>İçerik Adı</th>
      		<th>Sıra</th>
            <th>Ön Sayfa</th>
            <th>Yayınla</th>
            <th>Sil</th>
            <th>İçerik Düzenle</th>
     	</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['icerikRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icerikRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icerikTableObjectMultiTable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icerikRow']->key => $_smarty_tpl->tpl_vars['icerikRow']->value){
$_smarty_tpl->tpl_vars['icerikRow']->_loop = true;
?>
        		<tr>
                	<td><input name="kategoriAdi<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['kategoriID'];?>
" type="text" id="kategoriAdi<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['kategoriID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['kategoriAdi'];?>
" size="25" maxlength="20"  class="span3"/></td>
                  	<td> 
                    <select name="newBolumID<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" id="newBolumID<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" class="span3">
							<?php  $_smarty_tpl->tpl_vars['bolumRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bolumRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bolumTableObject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bolumRow']->key => $_smarty_tpl->tpl_vars['bolumRow']->value){
$_smarty_tpl->tpl_vars['bolumRow']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['icerikRow']->value['kategoriID']==$_smarty_tpl->tpl_vars['bolumRow']->value['kategoriID']){?>
                                    <?php if ($_smarty_tpl->tpl_vars['icerikRow']->value['bolumID']==$_smarty_tpl->tpl_vars['bolumRow']->value['bolumID']){?>
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
                    </td>
                  	<td>
               	  	<input name="icerikAdi<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" type="text" id="icerikAdi<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikAdi'];?>
" size="25" maxlength="20" class="span4"/>
                 	 </td>
                	<td>
                    <select name="icerikOrder<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" id="icerikOrder<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" class="span1">
                          <?php  $_smarty_tpl->tpl_vars['icerikOrder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icerikOrder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icerikKayitSay']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icerikOrder']->key => $_smarty_tpl->tpl_vars['icerikOrder']->value){
$_smarty_tpl->tpl_vars['icerikOrder']->_loop = true;
?>
                          	<?php if ($_smarty_tpl->tpl_vars['icerikRow']->value['icerikOrder']==$_smarty_tpl->tpl_vars['icerikOrder']->value){?>
                            		<option selected="selected"><?php echo $_smarty_tpl->tpl_vars['icerikOrder']->value;?>
</option>
                         	 	<?php }else{ ?>
                                	<option><?php echo $_smarty_tpl->tpl_vars['icerikOrder']->value;?>
</option>
                             <?php }?>
                          <?php } ?>
					</select>
                    </td>
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['icerikRow']->value['frontShow']==1){?>
                   			<input type="checkbox" name="frontShow<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" checked="checked"  value="1" />
                    	<?php }else{ ?>
                    		<input type="checkbox" name="frontShow<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" value="1" />
                    <?php }?>
                    </td>
                	<td>
                    <?php if ($_smarty_tpl->tpl_vars['icerikRow']->value['showStatus']==1){?>
                   			<input type="checkbox" name="showStatus<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" checked="checked"  value="1" />
                    	<?php }else{ ?>
                    		<input type="checkbox" name="showStatus<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" value="1" />
                    <?php }?>
                    </td>
                	<td>
                    	<input type="checkbox" name="kayitSil<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" id="kayitSil<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" value="1" />
                    </td>
                    <td>
                    	<!--<input type="radio" name="TextChangeicerikID" id="TextChangeicerikID" value="<?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikID'];?>
" />-->
                        <?php echo $_smarty_tpl->tpl_vars['icerikRow']->value['icerikUpdateLink'];?>

                    </td>
				</tr>
				<?php } ?>
			</tbody>
	</table>
	<div class="form-actions">
    	<input name="icerikEditChangeButton" type="submit" class="btn btn-primary" id="icerikEditChangeButton" value="İşlem Yap"/>
        <input name="icerikEditChangeReset" type="reset" class="btn" id="icerikEditChangeReset" value="Formu Temizle"/>
    </div>         
  </fieldset><?php }} ?>