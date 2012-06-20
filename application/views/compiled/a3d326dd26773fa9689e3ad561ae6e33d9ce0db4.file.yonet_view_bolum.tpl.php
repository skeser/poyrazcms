<?php /* Smarty version Smarty-3.1.7, created on 2012-06-10 17:25:31
         compiled from "application/views/templates/yonet/yonet_view_bolum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15284224524f873c7d0b1488-74910433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3d326dd26773fa9689e3ad561ae6e33d9ce0db4' => 
    array (
      0 => 'application/views/templates/yonet/yonet_view_bolum.tpl',
      1 => 1339255458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15284224524f873c7d0b1488-74910433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f873c7d1e7e3',
  'variables' => 
  array (
    'messageArr' => 0,
    'bolumResultMesaj' => 0,
    'recordResult' => 0,
    'formpathBolumEkle' => 0,
    'kategoriTableObject' => 0,
    'kategoriRow' => 0,
    'formGetBolumMultiEditMesaj' => 0,
    'formpathBolumUpdate' => 0,
    'bolumTableObject' => 0,
    'bolumRow' => 0,
    'bolumKayitSay' => 0,
    'bolumOrder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f873c7d1e7e3')) {function content_4f873c7d1e7e3($_smarty_tpl) {?> <div class="container">
    <div class="page-header">
	   <h1>Bölüm Ekleme</h1>
    </div>
	<div class="alert alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['messageArr']->value['alert'])===null||$tmp==='' ? 'info' : $tmp);?>
">
    	 <a class="close" data-dismiss="alert">×</a>
    		 Mesaj : <?php echo $_smarty_tpl->tpl_vars['bolumResultMesaj']->value;?>
 - Record Result : <?php echo $_smarty_tpl->tpl_vars['recordResult']->value;?>

    </div>
      <?php echo $_smarty_tpl->tpl_vars['formpathBolumEkle']->value;?>

        <fieldset>
          <div class="control-group">
            <label class="control-label" for="kategoriID">Kategori Seç</label>
            <div class="controls">
             <select name="kategoriID" id="kategoriID">
				<?php  $_smarty_tpl->tpl_vars['kategoriRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategoriRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kategoriTableObject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategoriRow']->key => $_smarty_tpl->tpl_vars['kategoriRow']->value){
$_smarty_tpl->tpl_vars['kategoriRow']->_loop = true;
?>
            		<option value="<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
"><?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriAdi'];?>
</option>
                <?php } ?>
 			 </select>
           </div>
          </div>
          <div class="control-group">
             <label class="control-label" for="bolumAdi">Bölüm Adı :</label>
            <div class="controls">
              <input name="bolumAdi" type="text" id="bolumAdi" size="25" maxlength="20" class="xlarge"/>
            </div>
          </div>
          <div class="control-group">
       	     <label class="control-label" for="showStatus">Yayınla</label>
             <div class="controls">        
                    <input type="checkbox" value="1" name="showStatus"/>
            </div>
          </div>
          <div class="form-actions">
            <input name="bolumEkleChangeButton" type="submit" class="btn btn-primary" id="bolumEkleChangeButton" value="Bölüm Ekle"/>
            <input name="bolumEkleChangeReset" type="reset" class="btn" id="bolumEkleChangeReset" value="Formu Temizle"/>
          </div>         
     </fieldset>
     </form>
  <div class="page-header">
	 <h1>Bölüm Düzenleme</h1>
  </div>
  <div class="alert alert-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['messageArr']->value['alert'])===null||$tmp==='' ? 'info' : $tmp);?>
">
     <a class="close" data-dismiss="alert">×</a>
    	 <?php echo $_smarty_tpl->tpl_vars['formGetBolumMultiEditMesaj']->value;?>

  </div>
  <?php echo $_smarty_tpl->tpl_vars['formpathBolumUpdate']->value;?>

  <fieldset>
    <table class="table table-striped">
   		<thead>
    		<tr>
      		<th>Kategori Adı</th><th>Bölüm Adı</th><th>Sıra</th><th>Yayınla</th><th>Sil</th>
     	</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['bolumRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bolumRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bolumTableObject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bolumRow']->key => $_smarty_tpl->tpl_vars['bolumRow']->value){
$_smarty_tpl->tpl_vars['bolumRow']->_loop = true;
?>
        		<tr>
                  <td>
                    	<!--<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['sira'];?>
-->
                        <select name="newKategoriID<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" id="newKategoriID<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" class="span4">
							<?php  $_smarty_tpl->tpl_vars['kategoriRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategoriRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kategoriTableObject']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategoriRow']->key => $_smarty_tpl->tpl_vars['kategoriRow']->value){
$_smarty_tpl->tpl_vars['kategoriRow']->_loop = true;
?>
                            	<?php if ($_smarty_tpl->tpl_vars['bolumRow']->value['kategoriID']==$_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID']){?>
            							<option value="<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriAdi'];?>
</option>
                                	<?php }else{ ?>
                                		<option value="<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
"><?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriAdi'];?>
</option>
								 <?php }?>                               
                			<?php } ?>
						</select>
                  </td>
                  <td>
					<input name="bolumAdi<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" type="text" id="bolumAdi<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumAdi'];?>
" size="25" maxlength="20" class="span5"/>
                    </td>
					<td>
                    	<!--<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['sira'];?>
-->
                        
                        <select name="bolumOrder<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" id="bolumOrder<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" class="input-mini">
                          <?php  $_smarty_tpl->tpl_vars['bolumOrder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bolumOrder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bolumKayitSay']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bolumOrder']->key => $_smarty_tpl->tpl_vars['bolumOrder']->value){
$_smarty_tpl->tpl_vars['bolumOrder']->_loop = true;
?>
                          	<?php if ($_smarty_tpl->tpl_vars['bolumRow']->value['bolumOrder']==$_smarty_tpl->tpl_vars['bolumOrder']->value){?>
                            		<option selected="selected"><?php echo $_smarty_tpl->tpl_vars['bolumOrder']->value;?>
</option>
                         	 	<?php }else{ ?>
                                	<option><?php echo $_smarty_tpl->tpl_vars['bolumOrder']->value;?>
</option>
                             <?php }?>
                          <?php } ?>
                        </select>
                  </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['bolumRow']->value['showStatus']==1){?>
                   			<input type="checkbox" name="showStatus<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" checked="checked"  value="1" />
                    	<?php }else{ ?>
                    		<input type="checkbox" name="showStatus<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" value="1" />
                    <?php }?>
				</td>
                    <td>
                        <input type="radio" name="kayitSil<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" id="kayitSil<?php echo $_smarty_tpl->tpl_vars['bolumRow']->value['bolumID'];?>
" value="1" />
                    </td>
				</tr>
				<?php } ?>
			</tbody>
	</table>
		<div class="form-actions">
			<input name="bolumEditChangeButton" type="submit" class="btn btn-danger" id="bolumEditChangeButton" value="Değişiklikleri Kaydet"/>
            <input name="bolumEditReset" type="reset" class="btn" id="bolumEditReset" value="Formu Temizle"/>
		</div>         
  </fieldset> 
  </form><?php }} ?>