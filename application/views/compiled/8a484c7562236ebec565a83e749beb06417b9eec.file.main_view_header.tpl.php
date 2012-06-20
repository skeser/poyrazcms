<?php /* Smarty version Smarty-3.1.7, created on 2012-03-25 22:48:57
         compiled from "application/views/templates/main/main_view_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10269179244f6f75f69df480-15805908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a484c7562236ebec565a83e749beb06417b9eec' => 
    array (
      0 => 'application/views/templates/main/main_view_header.tpl',
      1 => 1332704932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10269179244f6f75f69df480-15805908',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f6f75f6a3b63',
  'variables' => 
  array (
    'baseURL' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f75f6a3b63')) {function content_4f6f75f6a3b63($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
css/bootstrap/v1.4.0/bootstrap.css">
<!--JQuery Include-->
<script src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
js/jQuery/jquery-1.7.1.min"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
js/jQuery/jquery.dataTables.min.js"></script>
<!--Third Party Js Include-->
<script src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
css/bootstrap/v1.4.0/js/bootstrap-dropdown.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php }} ?>