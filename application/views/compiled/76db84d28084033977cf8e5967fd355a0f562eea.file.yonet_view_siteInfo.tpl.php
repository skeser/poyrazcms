<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 16:15:33
         compiled from "application/views/templates/yonet/yonet_view_siteInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15299209344f8732d6569553-37246127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76db84d28084033977cf8e5967fd355a0f562eea' => 
    array (
      0 => 'application/views/templates/yonet/yonet_view_siteInfo.tpl',
      1 => 1340196670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15299209344f8732d6569553-37246127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f8732d6654d2',
  'variables' => 
  array (
    'messageArr' => 0,
    'recordResult' => 0,
    'formpath' => 0,
    'siteInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8732d6654d2')) {function content_4f8732d6654d2($_smarty_tpl) {?> <div class="container">
	<div class="page-header">
	   <h1>Site Bilgileri Giriş/Düzenleme Ekranı</h1>
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
            <label class="control-label" for="siteAdi">Site Adı :</label>
            <div class="controls">
              <input name="siteAdi" type="text" id="siteAdi" size="40" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['siteAdi'];?>
" class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="slogan">Slogan :</label>
            <div class="controls">
              <input name="slogan" type="text" id="slogan" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['slogan'];?>
"  class="span6" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="title">Title :</label>
           <div class="controls">
           		<input name="title" type="text" id="title" size="40" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['title'];?>
"  class="span6"/>
           </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="description">Description:</label>
            <div class="controls">
             <textarea name="description" id="description" cols="200" rows="5"  class="span6"><?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['description'];?>
</textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="keywords">Keywords:</label>
            <div class="controls">
             <textarea name="keywords" id="keywords" cols="500" rows="5"  class="span6"><?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['keywords'];?>
</textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="copyright">Copyright:</label>
            <div class="controls">
             <input name="copyright" type="text" id="copyright" size="40" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['copyright'];?>
"  class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="author">Author:</label>
            <div class="controls">
             <input name="author" type="text" id="author" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['author'];?>
"  class="span6"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="downMessage">Site Down Mesaj:</label>
            <div class="controls">
              <textarea name="downMessage" id="downMessage" cols="500" rows="5"  class="span6"><?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['downMessage'];?>
</textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="templateName">Template Name:</label>
            <div class="controls">
               <input name="templateName" type="text" id="templateName" size="40" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['templateName'];?>
" class="input-xlarge"/>
            </div>
          </div>
          <div class="form-actions">
           <input type="submit" name="siteInfoChange"		id="siteInfoChange"			class="btn btn-primary" value="Kaydet">
           <input type="reset"  name="siteInfoChangeReset"	id="siteInfoChangeReset"	class="btn"			 	value="Fromu Temizle">
          </div>         
     </fieldset>
     </form><?php }} ?>