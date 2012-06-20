<?php /* Smarty version Smarty-3.1.7, created on 2012-03-25 22:46:50
         compiled from "application/views/templates/sysInfo/test_view_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13176282654f6f75f6a8d628-30827779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830fd90f04006d3e29c33ede76d7c9fe9c29e409' => 
    array (
      0 => 'application/views/templates/sysInfo/test_view_body.tpl',
      1 => 1332704807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13176282654f6f75f6a8d628-30827779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f6f75f6b3d32',
  'variables' => 
  array (
    'pageHeader' => 0,
    'mesaj' => 0,
    'CI_version' => 0,
    'SCRIPT_NAME' => 0,
    'baseURL' => 0,
    'lastAct' => 0,
    'lastAct2' => 0,
    'allSessionData' => 0,
    'keys' => 0,
    'data' => 0,
    'allConnCount' => 0,
    'halfOpenConnCount' => 0,
    'establishedConnCount' => 0,
    'onlineUsers' => 0,
    'onlineUsersRows' => 0,
    'sessionsTableObjResult' => 0,
    'sessionRows' => 0,
    'sessionRowsItems' => 0,
    'dizi' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f75f6b3d32')) {function content_4f6f75f6b3d32($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><style>
#ajaxprint { color:red; }
#jsonprint { color:blue; }
</style>
</head>
<body>
<div class="container">
  <div class="page-header">
    	<h1><?php echo $_smarty_tpl->tpl_vars['pageHeader']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['mesaj']->value;?>
<small>Integration of Codeigniter & Smarty & jQuery & Bootstrap</small></h1>
  	 </div>
            <table width="803">
              <tr>
                <th width="419" scope="col">Veri</th>
                <th width="372" scope="col">Değer</th>
              </tr>
              <tr>
                <td>CI Version : </td>
                <td><b><?php echo $_smarty_tpl->tpl_vars['CI_version']->value;?>
</b></td>
              </tr>
              <tr>
                <td>Smarty Version 	:</td>
                <td><b><?php echo 'Smarty-3.1.7';?>
</b></td>
              </tr>
              <tr>
                <td>Template Name 	: </td>
                <td><b><?php echo basename($_smarty_tpl->source->filepath);?>
</b></td>
              </tr>
              <tr>
                <td>Smarty ile Zaman :</td>
                <td><b><?php echo smarty_modifier_date_format(time(),"%d/%m/%Y - %H:%M:%S");?>
</b></td>
              </tr>
              <tr>
                <td>The value of global assigned variable $SCRIPT_NAME: </td>
                <td><b><?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
</b></td>
              </tr>
              <tr>
                <td>Example of accessing server environment variable SERVER_NAME: </td>
                <td><b><?php echo $_SERVER['SERVER_NAME'];?>
</b></td>
              </tr>
              <tr>
                <td>Base URL :</td>
                <td><b><?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
</b></td>
              </tr>
            </table>
  <div class="page-header">
    <h2>Oturum Bilgileri</h2>
  </div>
      lastAct: <?php echo $_smarty_tpl->tpl_vars['lastAct']->value;?>
<p>
      lastAct2: <?php echo $_smarty_tpl->tpl_vars['lastAct2']->value;?>
<p>
      <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allSessionData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
                    <b><?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
</b>:<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<br />
      <?php } ?>
  <div class="page-header">
    <h2>Session tablosu temelli Oturum Bilgileri</h2>
  </div>
       Su anda  <b><?php echo $_smarty_tpl->tpl_vars['allConnCount']->value;?>
</b> adet oturum talebi var.Bunlardan <b><?php echo $_smarty_tpl->tpl_vars['halfOpenConnCount']->value;?>
</b> tanesi yari acik. <b><?php echo $_smarty_tpl->tpl_vars['establishedConnCount']->value;?>
</b> adedi acık. <br />
               Online Kullanicisayisi  :<?php echo $_smarty_tpl->tpl_vars['establishedConnCount']->value;?>
<br />
               Online Kullanicilar :
               <?php  $_smarty_tpl->tpl_vars['onlineUsersRows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['onlineUsersRows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['onlineUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['onlineUsersRows']->key => $_smarty_tpl->tpl_vars['onlineUsersRows']->value){
$_smarty_tpl->tpl_vars['onlineUsersRows']->_loop = true;
?>
                        <span><?php echo $_smarty_tpl->tpl_vars['onlineUsersRows']->value['user_name'];?>
-</span>
                <?php } ?>
                <br />
               Session tablosu:<br />
                 <table>
                    <thead>
                        <tr>
                            <th>session_id</th>
                            <th>ipadress</th>
                            <th>user_agent</th>
                            <th>last_activity</th>
                            <th>user_name</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php  $_smarty_tpl->tpl_vars['sessionRows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sessionRows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sessionsTableObjResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sessionRows']->key => $_smarty_tpl->tpl_vars['sessionRows']->value){
$_smarty_tpl->tpl_vars['sessionRows']->_loop = true;
?>
                                     <tr>
                                          <?php  $_smarty_tpl->tpl_vars['sessionRowsItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sessionRowsItems']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sessionRows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sessionRowsItems']->key => $_smarty_tpl->tpl_vars['sessionRowsItems']->value){
$_smarty_tpl->tpl_vars['sessionRowsItems']->_loop = true;
?>
                                                <td><?php echo $_smarty_tpl->tpl_vars['sessionRowsItems']->value;?>
</td>
                                          <?php } ?>
                                    </tr>
                            <?php } ?>
                        </tbody>
                </table>
  <div class="page-header">
    <h2>Resim Eklemek</h2>
  </div>
    
    	<img src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
images/linux.jpg" width="100" height="118">
  <h4>Smarty ile diziler - foreach ile.</h4>
        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dizi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
            <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.Eleman : <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<br>
        <?php } ?>
  <h4>Smarty ile diziler - section ile </h4>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rakam'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['name'] = 'rakam';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dizi']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rakam']['total']);
?>
            <?php echo $_smarty_tpl->tpl_vars['dizi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rakam']['index']];?>
<br>
        <?php endfor; endif; ?>
  <h4>Jquery</h4>
  <button id="btn" class="btn primary">Tıkla</button>
  <h2>Sönme Efektleri - .fadeIn()</h2>
  <hr />
        Butonlara  basin..<br />
        <input type="button" id="goster" name="btn" value="Goster - fadeIn()" />
        <input type="button" id="kapa" name="btn2" value="Gizle" />
        <br>        
        <img id="resim" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
images/linux.jpg" ><br />
        <input type="button" id="fadeOut" name="btn3" value="Gizle - fadeOut()" /><br />
        <img id="resim2" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
images/linux.jpg" ><br />
        <input type="button" id="fadeToggle" name="btn4" value="Gizle - Göster fadeToggle()" /><br />
        <img id="resim3" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
images/linux.jpg" ><br />
        <input type="button" id="fadeTo" name="btn4" value="Seffaf yap -  fadeTo()" />
        <input type="button" id="fadeToBack" name="btn4" value="Geri Al -  fadeTo()" /><br />
      <img id="resim4" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
images/linux.jpg" ><br />
  <h2>Standart Ajax uygulamasi</h2>
  <p>
    <label for="ajaxText"></label>
          <input type="text" name="ajaxText" id="ajaxText">
          <input type="submit" name="ajaxput" id="ajaxput" value="Ajax Gonder">
  Sonuç : <div id="ajaxprint"></div>
  <h2>JSON - Ajax Uygulamasi</h2>
        <input type="text" name="jsontext" id="jsontext">
        <input type="submit" name="jsonbutton" id="jsonbutton" value="JSon Gönder">
        Sonuç:<div id="jsonprint"></div>
  <h2>siradaki ?</h2>
  
</div><!--close:container--><?php }} ?>