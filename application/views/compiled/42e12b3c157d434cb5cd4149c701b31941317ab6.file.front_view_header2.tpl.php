<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 15:54:04
         compiled from "application/views/templates/yonet/front_view_header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8141307574fe1c142075188-26316039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e12b3c157d434cb5cd4149c701b31941317ab6' => 
    array (
      0 => 'application/views/templates/yonet/front_view_header2.tpl',
      1 => 1340196669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8141307574fe1c142075188-26316039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe1c14208bde',
  'variables' => 
  array (
    'pageInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe1c14208bde')) {function content_4fe1c14208bde($_smarty_tpl) {?><!--Third Party Js Include-->
<script src="<?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['jsBootstrapDropDown'];?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['jsBootstrapCollapse'];?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['jsBootstrapAlert'];?>
"></script>
<title><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['title'];?>
</title>
<?php }} ?>