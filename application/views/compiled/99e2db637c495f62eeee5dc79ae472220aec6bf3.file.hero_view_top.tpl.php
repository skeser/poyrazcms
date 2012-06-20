<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 15:51:47
         compiled from "application/views/templates/front/hero/hero_view_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:889663524fe1c0ccf17004-39242058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e2db637c495f62eeee5dc79ae472220aec6bf3' => 
    array (
      0 => 'application/views/templates/front/hero/hero_view_top.tpl',
      1 => 1340196689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889663524fe1c0ccf17004-39242058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe1c0cd00979',
  'variables' => 
  array (
    'baseURL' => 0,
    'siteInfoArr' => 0,
    'bolumCount' => 0,
    'durum1MenuArr' => 0,
    'menuItem' => 0,
    'durum2MenuArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe1c0cd00979')) {function content_4fe1c0cd00979($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteInfoArr']->value['siteAdi'];?>
</a>
          <div class="nav-collapse">
           <ul class="nav">
           	 
           	 <?php if ($_smarty_tpl->tpl_vars['bolumCount']->value==1){?>
             		<?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['durum1MenuArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
                      <li><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['menuItem'];?>
</li>
                    <?php } ?>
             	<?php }else{ ?>
                	<?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['durum2MenuArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
                                 <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['bolumAdi'];?>
<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <?php echo $_smarty_tpl->tpl_vars['menuItem']->value['itemLink'];?>

                                	   </ul>
                           		  </li>                           
                     <?php } ?>
             <?php }?>         
           </ul> <!-- /.ul -->
  
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div> <?php }} ?>