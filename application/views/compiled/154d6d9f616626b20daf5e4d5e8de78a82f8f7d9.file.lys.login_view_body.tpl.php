<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 15:52:09
         compiled from "application/views/templates/lys/lys.login_view_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14061018584fe1c138c53532-06487479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154d6d9f616626b20daf5e4d5e8de78a82f8f7d9' => 
    array (
      0 => 'application/views/templates/lys/lys.login_view_body.tpl',
      1 => 1340196668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14061018584fe1c138c53532-06487479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe1c138c79c3',
  'variables' => 
  array (
    'pageInfoArr' => 0,
    'validation_errors' => 0,
    'data' => 0,
    'loginResultMesaj' => 0,
    'formpath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe1c138c79c3')) {function content_4fe1c138c79c3($_smarty_tpl) {?>  <body>
    <div class="container">

      <div class="content">
     	<div class="page-header">
          <h1><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['projectName'];?>
<small>		ViewSİS  MsSQL-MySQL</small></h1>
        </div>
        <div class="row">
          <div class="span16">
          	<div class="alert-message block-message info">
	          	<h2><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['pageName'];?>
</h2>
    		</div>        
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['validation_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
   				<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

			<?php } ?>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['loginResultMesaj']->value)===null||$tmp==='' ? '&nbsp;' : $tmp);?>

            <?php echo $_smarty_tpl->tpl_vars['formpath']->value;?>

            <div class="row">
           		<span class="span3"><strong>Kullanıcı Adı :</strong></span>
            		<input type="text" name="unameFromUser" value="" size="50" />
            </div>
            <div class="row">
          		<span class="span3"><strong>Şifre :</strong></span>
                  <input type="password" name="passFromUser" value="" size="50" />
           </div>
           <div class="row">
           <br />
           <div class="span3">.</div>
           		<button type="submit" id="login" 	  class="btn btn-primary">Gönder</button>
          		<button type="reset"  id="loginReset" class="btn"			 >Temizle</button>
    		</div>
                
			</form>


          </div>
          
        </div>
      </div>
      <!-- /container footer'de kapaniyor.--><?php }} ?>