<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 14:38:52
         compiled from "application/views/templates/yonet/yonet_view_kategori.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5859960074f873c76e83c11-84630436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c015d18feccf33e05299c264be4d1e687e4176cc' => 
    array (
      0 => 'application/views/templates/yonet/yonet_view_kategori.tpl',
      1 => 1339255458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5859960074f873c76e83c11-84630436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f873c77024ed',
  'variables' => 
  array (
    'messageArr' => 0,
    'recordResult' => 0,
    'formpathKategoriEkle' => 0,
    'formpathKategoriUpdate' => 0,
    'kategoriTableAllResult' => 0,
    'kategoriRow' => 0,
    'orderArr' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f873c77024ed')) {function content_4f873c77024ed($_smarty_tpl) {?> <div class="container">
	<div class="page-header">
	   <h1>Kategori  Ekle</h1>
    </div>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['messageArr']->value['alert'];?>
">
    	 <a class="close" data-dismiss="alert">×</a>
    		<?php echo $_smarty_tpl->tpl_vars['messageArr']->value['fullText'];?>
 Record Result : <?php echo $_smarty_tpl->tpl_vars['recordResult']->value;?>

    </div>   
      <?php echo $_smarty_tpl->tpl_vars['formpathKategoriEkle']->value;?>

        <fieldset>
          <div class="control-group">
             <label class="control-label" for="kategoriAdi">Kategori Adı :</label>
             <div class="controls">
              <input name="kategoriAdi" type="text" id="kategoriAdi" size="25" maxlength="20" class="span6"/>
            </div>
          </div>
          <div class="control-group">
       	    <label class="control-label" for="showStatus">Yayınla</label>
            <div class="controls">      
              <input type="checkbox" value="1" name="showStatus"/>
            </div>
          </div>
          <div class="form-actions">
            <input name="kategoriEkleChangeButton" type="submit" class="btn btn-primary" id="kategoriEkleChangeButton" value="Kategori Ekle"/>
            <input name="userChangeReset" type="reset" class="btn" id="userChangeReset" value="Formu Temizle"/>
          </div>         
     </fieldset>
     </form>
	<div class="page-header">
	   <h1>Kategori Düzenleme</h1>
    </div>
  <?php echo $_smarty_tpl->tpl_vars['formpathKategoriUpdate']->value;?>

  <fieldset>
    <table class="table table-striped">
   		<thead>
    		<tr>
      		<th>Kategori Adı</th><th>Yayınla</th><th>Sıra</th><th>Sil</th>
     	</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['kategoriRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kategoriRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kategoriTableAllResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kategoriRow']->key => $_smarty_tpl->tpl_vars['kategoriRow']->value){
$_smarty_tpl->tpl_vars['kategoriRow']->_loop = true;
?>
        		<tr>
                    <td>
						<input name="kategoriAdi<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" type="text" id="kategoriAdi<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriAdi'];?>
" size="25" maxlength="20" class="span6"/>
                    </td>
					<td>
                        <?php if ($_smarty_tpl->tpl_vars['kategoriRow']->value['showStatus']==1){?>
                            <input type="checkbox" name="showStatus<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" checked="checked"  value="1" />
                        <?php }else{ ?>
                            <input type="checkbox" name="showStatus<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" value="1" />
						<?php }?>
					</td>
					<td>
                    	<!--<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['sira'];?>
-->
                        <select name="order<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" id="order<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" class="input-mini">
                          <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                          	<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['kategoriRow']->value['sira']==$_tmp1){?>
                            		<option selected="selected"><?php echo $_smarty_tpl->tpl_vars['order']->value;?>
</option>
                         	 	<?php }else{ ?>
                                	<option><?php echo $_smarty_tpl->tpl_vars['order']->value;?>
</option>
                             <?php }?>
                          <?php } ?>
                        </select>
                  </td>
                    <td>
                        <input type="radio" name="kayitSil<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" id="kayitSil<?php echo $_smarty_tpl->tpl_vars['kategoriRow']->value['kategoriID'];?>
" value="1" />
                    </td>
				</tr>
				<?php } ?>
			</tbody>
	</table>
		<div class="form-actions">
			<input name="kategoriEditChangeButton" type="submit" class="btn btn-danger" id="kategoriEditChangeButton" value="Değişiklikleri Kaydet"/>
            <input name="kategoriEditReset" type="reset" class="btn" id="kategoriEditReset" value="Formu Temizle"/>
		</div>         
  </fieldset> 
  </form><?php }} ?>