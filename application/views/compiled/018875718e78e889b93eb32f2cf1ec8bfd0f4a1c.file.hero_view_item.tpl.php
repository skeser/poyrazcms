<?php /* Smarty version Smarty-3.1.7, created on 2012-06-09 19:58:22
         compiled from "application/views/templates/front/hero/hero_view_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10388220014f89ed89599dc1-61820834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '018875718e78e889b93eb32f2cf1ec8bfd0f4a1c' => 
    array (
      0 => 'application/views/templates/front/hero/hero_view_item.tpl',
      1 => 1339255759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10388220014f89ed89599dc1-61820834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f89ed8963579',
  'variables' => 
  array (
    'itemArr' => 0,
    'item' => 0,
    'bolumTableObject' => 0,
    'icerikTextArr' => 0,
    'bolumRow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f89ed8963579')) {function content_4f89ed8963579($_smarty_tpl) {?> <div class="container">
 
 <!--<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
 	<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br />
 <?php } ?>
 <?php echo $_smarty_tpl->tpl_vars['itemArr']->value['kategoriID'];?>

 <?php echo $_smarty_tpl->tpl_vars['itemArr']->value['kategoriAdi'];?>

	
<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['bolumID'];?>

<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['bolumAdi'];?>


<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikID'];?>

<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikAdi'];?>


<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikOzet'];?>

<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikText'];?>

<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikTarih'];?>

<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikSaat'];?>


<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikOrder'];?>

<?php echo $_smarty_tpl->tpl_vars['itemArr']->value['showStatus'];?>
-->
	 
	<div class="page-header">
	   <h1><?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikAdi'];?>
</h1>
    </div>
   
    
    <div class="span12">
        <blockquote>
			<p><?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikOzet'];?>
</p>
    	</blockquote>
    </div>

    <hr />    

    <div class="span12">
    	<blockquote>
			<p><?php echo $_smarty_tpl->tpl_vars['itemArr']->value['icerikText'];?>
</p>
    	</blockquote>
    </div>
    


    
</div>
 <!--
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
 </form>--><?php }} ?>