<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sysinfo extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();	
		$this->smarty->assign('baseURL',base_url());				

		$this->smarty->assign('lysMenu',lysMenu());
		$this->smarty->assign('yonetMenu',yonetMenu());

		
		$page = $this->uri->segment(3,0);
		$func = $this->uri->segment(2,0);
		$cont = $this->uri->segment(1,0);
				
		$pageSelect = "sysinfo";
		$this->smarty->assign('pageInfoArr',pageinfo($pageSelect));
		
		$this->smarty->assign('allSessionData',$this->session->all_userdata());
		$lastAct = $this->session->all_userdata();
		
		$this->smarty->assign('lastAct2',$lastAct['last_activity']);
		
		$lastAct = date("d-m-Y H:i:s",$lastAct['last_activity']);
		$this->smarty->assign('lastAct',$lastAct);
	}//close:construct
	/**********************************************************************************************************************/
	function index(){
		redirect('/sysinfo/test');
		
	}//close:func:index
	/**********************************************************************************************************************/
	function test(){
		$this->smarty->assign('mesaj','MyCi  ');
		$CIversion = $this->CIget_version();
		$this->smarty->assign('CI_version',$CIversion);
		
		$this->smarty->assign('baseURL',base_url());
		for ($i = 0; $i<10; $i++){
			$dizi[$i] = $i;
		}
		$this->smarty->assign('dizi',$dizi);
		
		//js:add
		$this->jquery_ext->add_script($this->js("btn"));
		$this->jquery_ext->add_script($this->js("dialog"));
		$this->jquery_ext->add_script($this->js("goster"));
		$this->jquery_ext->add_script($this->js("ajaxput"));		// Json Ajax Script
		$this->jquery_ext->add_script($this->js("json"));
		$this->jquery_ext->add_script($this->js("textout"));
		$this->jquery_ext->add_script($this->js("jsontextout"));
		$this->jquery_ext->add_script($this->js("testRepeat"));
		

		
		
		
		
		//$this->jquery_ext->output();
		//$this->smarty->assign('ajaxResult','bos');		
		//$this->jquery_ext->output();
		
				// 1- Oturum acmis kullancilar 2- yari acik oturumlar..
//		$this->smarty->assign("yariAcik",$this->lys_sessionclose_model->;
		$this->smarty->assign("sessionsTableObjResult",$this->lys_sessionclose_model->getSessionsTable());
		//$this->smarty->assign("halfOpenConnCount",$this->lys_sessionclose_model->halfOpenConnCount());
		$this->smarty->assign("onlineUsers",$this->lys_sessionclose_model->getOnlineUsers());
		
		//tum oturum sayisi
		$connType = "all";
		$this->smarty->assign("allConnCount",$this->lys_sessionclose_model->findConnCount($connType));
		
		//yari acik oturum saiyisi
		$connType = "halfOpen";
		$this->smarty->assign("halfOpenConnCount",$this->lys_sessionclose_model->findConnCount($connType));
		//established oturum sayisi
		$connType = "established";
		$this->smarty->assign("establishedConnCount",$this->lys_sessionclose_model->findConnCount($connType));
		//sess_expiration degerini asmis session table records
				
		$this->smarty->assign("timeOutRecords",$this->lys_sessionclose_model->getSessionsTimeOut());
		
		//$this->smarty->assign("loginStatusSenkronResult",$this->lys_sessionclose_model->loginStatusSenkron());
		

		$bodyContent = "sysinfo/sysinfo_test_view_body.tpl";
		$this->template->lysShow($bodyContent);
		
		
	}//close:func:test
	/**********************************************************************************************************************/	
	function CIget_version() {
   
		return CI_VERSION; // echoes something like 1.7.1

	}//close:func
	/**********************************************************************************************************************/
	function ajaxDo() {
		
		$gelen = $this->input->post('data');
		$giden2 = "Girdiğiniz Değer-->".$gelen;
		echo $giden2;
	
	}
	/**********************************************************************************************************************/
	function jsonDo(){
		
		$jsongelen = $this->input->post('json');
		
		$jsonResult = "$jsongelen--İnput Verisi Bana Ulaştı";
		$jsonResult = json_encode($jsonResult);
		echo $jsonResult;
		
	}
	/**********************************************************************************************************************/
	function textoutDo(){
		$textoutgelen 	= 	$this->input->post('textout');
		$textoutResult 	=	"textout->".$textoutgelen;
		echo $textoutResult;
	}
	/**********************************************************************************************************************/
	function jsontextoutDo(){
		$jsontextoutgelen	=	$this->input->post('jsontextout');
		$jsontextoutResult	=	"jsontextout-->".$jsontextoutgelen;
		$jsontextoutResult	=	json_encode($jsontextoutResult);
		echo $jsontextoutResult;
	}
	/**********************************************************************************************************************/
	function testRepeatEmail(){
		$testData	=	$this->input->post('testRepeat');
		$testRepeatResult = $this->lys_model->testRepeatEmail($testData);
		if ($testRepeatResult == TRUE){
			echo $testData."----uygun,tekrar etmiyor..";
		}else{
			echo $testData."----uygun değil, tekrar ediyor, baska bi tane dene";
		}
	}
	/**********************************************************************************************************************/
	function js($jskey){
		$script = 'null';
		switch ($jskey) {
    case "btn":
       $script = '$.extend({
					uyari: function(mesaj){
						alert(mesaj);
					}
				});
				$("#btn").click(function(){$.uyari("Merhaba");})';
        break;
    case "dialog":
	$script = '$("#dialog").dialog({
                       title: "Jquery Ext Demo",
                       modal: true,
                       buttons: {
                           Ok: function() {
                               $( this ).dialog( "close" );
                           },
                       },
                       width: 600,
                       height: 300
              })';
         break;
    case "goster":
        $script ='$("#goster").click(function(){
						$("#resim").fadeIn(3000); 
					});
				$("#kapa").click(function(){
						$("#resim").hide();				
					});
				$("#fadeOut").click(function(){
						$("#resim2").fadeOut(3000);				
					});
				$("#fadeToggle").click(function(){ 	
						$("#resim3").fadeToggle("slow",0);
						});
				$("#fadeTo").click(function(){ 	
						$("#resim4").fadeTo("slow",0.30);
						});
				$("#fadeToBack").click(function(){ 	
						$("#resim4").fadeTo("slow",1);
						})';
        break;
	case "ajaxput":
			$script = '$("#ajaxput").click(function(){
						   			var text = $("input#ajaxText").val();
					 		$.ajax({
									type:"POST",
									url:"'.base_url().'index.php/sysinfo/ajaxDo",
									data:"data="+text,
									success:function (msg){
										$("#ajaxprint").html("");
										$("#ajaxprint").html(msg);
								}
								})						
					})';
	break;
	case "json":
			$script = '$("#jsonbutton").click(function(){
							var jsontext = $("input#jsontext").val();
							$.ajax({ 
									type:"POST",
									url:"'.base_url().'index.php/sysinfo/jsonDo",
									data:"json="+jsontext,
									dataType:"json",
									success:function(msg2){
										$("#jsonprint").html("");
										$("#jsonprint").html(msg2);
									}
								})
			})
		';
		break;
	case "textout":
			$script = '$("#textout").keyup(function(){
						   			var text = $("input#textout").val();
					 		$.ajax({
									type:"POST",
									url:"'.base_url().'index.php/sysinfo/textoutDo",
									data:"textout="+text,
									success:function (msg){
										$("#textoutprint").html("");
										$("#textoutprint").html(msg);
								}
								})						
					})';
	break;
	case "jsontextout":
			$script = '$("#jsontextout").keyup(function(){
							var jsontextout = $("input#jsontextout").val();
							$.ajax({ 
									type:"POST",
									url:"'.base_url().'index.php/sysinfo/jsontextoutDo",
									data:"jsontextout="+jsontextout,
									dataType:"json",
									success:function(msg2){
										$("#jsontextoutprint").html("");
										$("#jsontextoutprint").html(msg2);
									}
								})
			})
		';
		break;
	case "testRepeat":
			$script = '$("#testRepeat").blur(function(){
						   			var testRepeat = $("input#testRepeat").val();
					 		$.ajax({
									type:"POST",
									url:"'.base_url().'index.php/sysinfo/testRepeatEmail",
									data:"testRepeat="+testRepeat,
									success:function (msg){
										$("#testRepeatPrint").html("");
										$("#testRepeatPrint").html(msg);
								}
								})						
					})';
	break;
	}
	return $script;		
		
	}//close:func:js
	/**********************************************************************************************************************/
	function is_logged_in(){
		
		$is_logged_in = $this->session->userdata('is_logged_in');//Burada oturumdan is_logged_in değerini çekiyoruz. Eğer true dönerse bir kullanıcı giriş yapmış demektir.
 
		if(!isset($is_logged_in) || $is_logged_in != true)//is_logged_in set edilmiş mi ve set edildi ise değeri true mu? Cevabımız evet ise bu fonksiyon bir problem çıkarmıyor ve yolumuza devam edip sayfamıza erişiyoruz.
		{
			//echo 'Bu sayfaya erisim yetkiniz yok !! Olimcak isler bunlar buyrun burdan --> <a href="login">Giris</a>';//Aksi halde erişim yok uyarısı verip,
			$panelLink = anchor('login', 'Yonetim Paneli', 'title="Yonetim Paneli / Oturum Ac"');
			$this->smarty->assign('panelLink',$panelLink);
			$this->smarty->display('lys/logout.tpl');
			die();//işlemi durduruyoruz.
		}
	}//close:is_logged_in

} //close:class:sysinfo

/* End of file sysinfo.php */
/* Location: ./application/controllers/sysinfo.php */
?>