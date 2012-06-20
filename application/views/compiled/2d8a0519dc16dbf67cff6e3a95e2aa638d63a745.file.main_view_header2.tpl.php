<?php /* Smarty version Smarty-3.1.7, created on 2012-04-10 22:44:05
         compiled from "application/views/templates/main/main_view_header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15762342074f6f8d90b71e23-41440278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8a0519dc16dbf67cff6e3a95e2aa638d63a745' => 
    array (
      0 => 'application/views/templates/main/main_view_header2.tpl',
      1 => 1334087042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15762342074f6f8d90b71e23-41440278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f6f8d90b7d83',
  'variables' => 
  array (
    'pageInfoArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f8d90b7d83')) {function content_4f6f8d90b7d83($_smarty_tpl) {?><!--Third Party Js Include-->
<script src="<?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['jsBootstrapDropDown'];?>
"></script>
<title><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['title'];?>
</title>
<?php }} ?>