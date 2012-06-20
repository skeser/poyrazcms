<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 15:51:47
         compiled from "application/views/templates/front/front_view_header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20800259304fe1c0ccee61e3-65609321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e060fb4355d6a24db7344dffc74940b0f20705' => 
    array (
      0 => 'application/views/templates/front/front_view_header2.tpl',
      1 => 1340196666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20800259304fe1c0ccee61e3-65609321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe1c0ccf0d3c',
  'variables' => 
  array (
    'baseURL' => 0,
    'siteInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe1c0ccf0d3c')) {function content_4fe1c0ccf0d3c($_smarty_tpl) {?><!--Third Party Js Include-->

<script src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
css/bootstrap/v2.0.2/js/bootstrap.js"></script> <!--alttakilerin hepsi burada var.-->
<!--<script src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
css/bootstrap/v2.0.2/js/bootstrap-collapse.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
css/bootstrap/v2.0.2/js/bootstrap-dropdown.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
css/bootstrap/v2.0.2/js/bootstrap-alert.js"></script>-->
<title><?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['slogan'];?>
</title>
<?php }} ?>