<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 15:51:47
         compiled from "application/views/templates/front/front_view_header1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17464228954fe1c0cce9dd90-70649230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7141e2eda03051bfb165d073ef82d8a550fd2e' => 
    array (
      0 => 'application/views/templates/front/front_view_header1.tpl',
      1 => 1340196666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17464228954fe1c0cce9dd90-70649230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe1c0cceda10',
  'variables' => 
  array (
    'siteInfoArr' => 0,
    'baseURL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe1c0cceda10')) {function content_4fe1c0cceda10($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Site Info-->
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['description'];?>
" /> 
    <meta name="keywords"	 content="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['keywords'];?>
" />
    <meta name="copyright"	 content="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['copyright'];?>
"	/> 
    <meta name="author" 	 content="<?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['author'];?>
"	/>
    <meta name="date"  		 content=""	/> <!--last update : siteInfo tablosuna eklenecek.--> 
<!--/Site Info--> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
css/bootstrap/v2.0.2/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
css/bootstrap/v2.0.2/css/bootstrap-responsive.css">
<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
<!--JQuery Include--><?php }} ?>