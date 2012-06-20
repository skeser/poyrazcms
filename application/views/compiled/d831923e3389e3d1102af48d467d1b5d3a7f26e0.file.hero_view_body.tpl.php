<?php /* Smarty version Smarty-3.1.7, created on 2012-06-20 15:51:47
         compiled from "application/views/templates/front/hero/hero_view_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1415558564fe1c0cd0126a7-97234626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd831923e3389e3d1102af48d467d1b5d3a7f26e0' => 
    array (
      0 => 'application/views/templates/front/hero/hero_view_body.tpl',
      1 => 1340196689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1415558564fe1c0cd0126a7-97234626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fe1c0cd028b8',
  'variables' => 
  array (
    'frontItems' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe1c0cd028b8')) {function content_4fe1c0cd028b8($_smarty_tpl) {?><div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
     <div id="myCarousel" class="carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 1</h4>
                  <p>Text - 1</p>
                </div>
          </div>
          <div class="item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 2</h4>
                  <p>Text - 2</p>
                </div>
          </div>
          <div class="item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 3</h4>
                  <p>Text - 3</p>
                </div>
          </div>
          <div class="item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 4</h4>
                  <p>Text - 4</p>
                </div>
          </div>
          <div class="item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 5</h4>
                  <p>Text - 5</p>
                </div>
          </div>
        </div>  
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    <!--  <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>-->
	
      <hr />
      <!-- Example row of columns -->
      <div class="row">
       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="span4">
          <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['icerikAdi'];?>
</h2>
           <p><?php echo $_smarty_tpl->tpl_vars['item']->value['icerikOzet'];?>
</p>
          <p>Devamı : <?php echo $_smarty_tpl->tpl_vars['item']->value['icerikLink'];?>
</p>
        </div>
 	    <?php } ?>       
      </div>
      <hr>

     <?php }} ?>