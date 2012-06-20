<?php /* Smarty version Smarty-3.1.7, created on 2012-04-12 22:37:06
         compiled from "application/views/templates/main/main_view_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18759349324f6f75f6a431a6-13984649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '430a13be208beda1794ac0065f0c7989e72818f8' => 
    array (
      0 => 'application/views/templates/main/main_view_top.tpl',
      1 => 1334259423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18759349324f6f75f6a431a6-13984649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f6f75f6a8598',
  'variables' => 
  array (
    'pageInfoArr' => 0,
    'lysMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f75f6a8598')) {function content_4f6f75f6a8598($_smarty_tpl) {?></head>
<body>
		<div class="container">
        <div id="navbar-example" class="navbar navbar-static">
            <div class="navbar-inner">
              <div class="container" style="width: auto;">
                <a class="brand" href="#"><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['projectName'];?>
</a>
                <ul class="nav">
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['AnaSayfa'];?>
</li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kullanıcı İşlemleri <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                   	  <li><?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['userEdit'];?>
</li>
                      <li><?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['userAdd'];?>
</li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistem Bilgisi <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['sysInfo'];?>
</li>
                      <li><?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['sysLogs'];?>
</li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                </ul>
                 <p class="pull-right"> <font color="#FFFFFF">Hoşgeldin :<?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['uname'];?>
</font>|||||<?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['logout'];?>
</p>
              </div>
            </div>
          </div>
          <!-- /navbar-example --><?php }} ?>