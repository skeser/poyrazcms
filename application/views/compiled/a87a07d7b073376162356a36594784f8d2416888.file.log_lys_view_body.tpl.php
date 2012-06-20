<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 16:27:26
         compiled from "application/views/templates/log/log_lys_view_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9175436494f81e92685f579-58415438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a87a07d7b073376162356a36594784f8d2416888' => 
    array (
      0 => 'application/views/templates/log/log_lys_view_body.tpl',
      1 => 1340196667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9175436494f81e92685f579-58415438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f81e9268c33d',
  'variables' => 
  array (
    'pageInfoArr' => 0,
    'loglysTableObj' => 0,
    'loglysTableObjRows' => 0,
    'loglysTableObjRowsItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f81e9268c33d')) {function content_4f81e9268c33d($_smarty_tpl) {?></head>
<body>
<div class="container">
  <div class="page-header">
    	<h1><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['projectName'];?>
<small><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['version'];?>
 -- <?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['projectSlogan'];?>
</small></h1>
  </div>
   <div class="page-header">
    	<h2>Log_LYS-Login Yonetim Sistemi Log Bilgileri</h2>
  </div>
	<table>
          <thead>
              <tr>
                  <th>actID</th>
                  <th>User Name</th>
                  <th>Action Name</th>
                  <th>Session</th>
                  <th>ip address</th>
                  <th>Tarih</th>
                  <th>Saat</th>
                  <th>log_lys_data</th>
              </tr>
          </thead>
              <tbody>
                  <?php  $_smarty_tpl->tpl_vars['loglysTableObjRows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loglysTableObjRows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loglysTableObj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loglysTableObjRows']->key => $_smarty_tpl->tpl_vars['loglysTableObjRows']->value){
$_smarty_tpl->tpl_vars['loglysTableObjRows']->_loop = true;
?>
                           <tr>
                                <?php  $_smarty_tpl->tpl_vars['loglysTableObjRowsItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loglysTableObjRowsItems']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loglysTableObjRows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loglysTableObjRowsItems']->key => $_smarty_tpl->tpl_vars['loglysTableObjRowsItems']->value){
$_smarty_tpl->tpl_vars['loglysTableObjRowsItems']->_loop = true;
?>
                                      <td><?php echo $_smarty_tpl->tpl_vars['loglysTableObjRowsItems']->value;?>
</td>
                                <?php } ?>
                          </tr>
                  <?php } ?>
              </tbody>
      </table> 
          
  
<?php }} ?>