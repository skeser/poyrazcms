<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 16:15:33
         compiled from "application/views/templates/yonet/yonet_view_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19158738144f872d8894a416-49001314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cb62ad74c25da132287cf0cd4f762b32b744e13' => 
    array (
      0 => 'application/views/templates/yonet/yonet_view_top.tpl',
      1 => 1340198106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19158738144f872d8894a416-49001314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f872d88a2278',
  'variables' => 
  array (
    'pageInfoArr' => 0,
    'yonetMenu' => 0,
    'lysMenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f872d88a2278')) {function content_4f872d88a2278($_smarty_tpl) {?></head>
<body style="padding-top:50px;">
<!--<div class="container">-->
    <div id="navbar-yonet" class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container"  style="width: 1320px;">
          	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo $_smarty_tpl->tpl_vars['pageInfoArr']->value['projectName'];?>
</a>
          <div class="nav-collapse">  
            <ul class="nav">
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['YonetAnaSayfa'];?>
</li>
              <!--Start Dropdrown Menu-->
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Site Bilgileri <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['siteinfo'];?>
</li>
                  <li><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['firma'];?>
</li>
                </ul>
              </li>
              <!--Stop Dropdrown Menu-->
              <!--Start Dropdrown Menu-->
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori & Bölüm <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['kategori'];?>
</li>
                  <li><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['bolum'];?>
</li>
                </ul>
              </li>
              <!--Start Dropdrown Menu-->
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">İçerik İşlemleri <b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['icerikEkle'];?>
</li>
                 <li><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['icerikEdit'];?>
</li>
                </ul>
              </li>
              <!--Stop Dropdrown Menu-->
              <!--Start Dropdrown Menu-->
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ziyaretçi Defteri <b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['defter'];?>
</li>
                </ul>
              </li>
              <!--Stop Dropdrown Menu-->
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
              <li><?php echo $_smarty_tpl->tpl_vars['yonetMenu']->value['siteAnaSayfa'];?>
</li>            
            </ul>
            <ul class="nav pull-right">
              <li><?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['uname'];?>
</li>
              <li><?php echo $_smarty_tpl->tpl_vars['lysMenu']->value['logout'];?>
</li>
            </ul>
           </div>  <!--collapse-->
          </div> <!--container-->
        </div> <!--innet-->
      </div>
      <!-- /navbar-example --><?php }} ?>