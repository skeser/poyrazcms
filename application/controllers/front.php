<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**********************************************************************************************************************
*
*	Page Info	:	Poyraz CMS Front Page
*	Author 		: 	Sevket Keser (sevketkeser@gmail.com)
*	Date 		: 	14.04.2012
*
**********************************************************************************************************************/
class Front extends CI_Controller {

	function __construct(){
		parent::__construct();
			
		$this->smarty->assign('baseURL',base_url());
		// siteInfo geliyor.
		$this->smarty->assign('siteInfoArr',$this->yonet_model->getSiteInfo());
		// firma bilgileri geliyor.
		$this->smarty->assign('firmaArr',$this->yonet_model->getFirma());
		//durum1 icin menu basiliyor ..
		//$this->smarty->assign('durum1MenuArr',$this->front_model->durum1CreateMenu());
		$this->jquery_ext->add_script('$(".collapse").collapse()');
		$this->jquery_ext->add_script('$(".carousel").carousel({    interval: 3000    })');
		
		/*****************************************************************************************/
		// counts
		$tableName = "kategori";
		$katCount	=	$this->getCounts($tableName);
		$this->smarty->assign('katCount',$katCount);
		
		$tableName	= "bolum";
		$bolumCount	=	$this->getCounts($tableName);
		$this->smarty->assign('bolumCount',$bolumCount);
		
		$tableName		= "icerik";
		$icerikCount	=	$this->getCounts($tableName);
		$this->smarty->assign('icerikCount',$icerikCount);
		/*****************************************************************************************/		
		
	}//close:construct
	/**********************************************************************************************************************/
	function index() {
		

		$tableName	= "bolum";
		$bolumCount	=	$this->getCounts($tableName);
				
		// menu basiliyor..
		if ($bolumCount == 1){	$this->smarty->assign('durum1MenuArr',$this->front_model->durum1CreateMenu());	}
		if ($bolumCount > 1){	$this->smarty->assign('durum2MenuArr',$this->front_model->durum2CreateMenu());	}
		
		// Front Page Content
		$tableName		= "icerik";
		$icerikCount	=	$this->getCounts($tableName);
		
		$activeIcerikIDsArr = $this->front_model->getFrontItems();
		foreach($activeIcerikIDsArr as $icerikID){
			$frontItems[] = $this->front_model->getIcerikText($icerikID);
		}
		
			
			//$this->smarty->assign('frontContent2',$this->front_model->getIcerikText($activeIcerikIDsArr[$randIcerikID]));
			//$this->smarty->assign('frontContent3',$this->front_model->getIcerikText($activeIcerikIDsArr[$randIcerikID]));
		
		$this->smarty->assign('frontItems',$frontItems);

		
		$menuContent = "front/hero/hero_view_top.tpl";
		$bodyContent = "front/hero/hero_view_body.tpl";
		$this->template->frontShow($menuContent,$bodyContent);
		
		
	} //close:func:index
	/**********************************************************************************************************************/
	function showItem($itemID){
		
		$tableName	= "bolum";
		$bolumCount	=	$this->getCounts($tableName);
				
		// menu basiliyor..
		if ($bolumCount == 1){	$this->smarty->assign('durum1MenuArr',$this->front_model->durum1CreateMenu());	}
		if ($bolumCount > 1){	$this->smarty->assign('durum2MenuArr',$this->front_model->durum2CreateMenu());	}
		
		$cont 	= $this->uri->segment(1,0);
		$func 	= $this->uri->segment(2,0);
		$itemID = $this->uri->segment(3,0);
		if($itemID != "defter"){
			$this->smarty->assign('itemArr',$this->front_model->getIcerikText($itemID));
		}else{
			$this->smarty->assign('itemArr',"defter ok");
		}
		
		

		$menuContent = "front/hero/hero_view_top.tpl";
		$bodyContent = "front/hero/hero_view_item.tpl";
		$this->template->frontShow($menuContent,$bodyContent);
		
	
		
	}//close:func:index
	/**********************************************************************************************************************/
	function defter(){
		
		$tableName	= "bolum";
		$bolumCount	=	$this->getCounts($tableName);
				
		// menu basiliyor..
		if ($bolumCount == 1){	$this->smarty->assign('durum1MenuArr',$this->front_model->durum1CreateMenu());	}
		if ($bolumCount > 1){	$this->smarty->assign('durum2MenuArr',$this->front_model->durum2CreateMenu());	}
		
		$cont 	= $this->uri->segment(1,0);
		$func 	= $this->uri->segment(2,0);
		$itemID = $this->uri->segment(3,0);
		
		$this->smarty->assign('itemArr',$this->front_model->getIcerikText($itemID));
		

		$menuContent = "front/hero/hero_view_top.tpl";
		$bodyContent = "front/hero/hero_view_item.tpl";
		$this->template->frontShow($menuContent,$bodyContent);
		
	
		
	}//close:func:index
	/**********************************************************************************************************************/
	function getCounts($tableName){
		return $this->standartdb_model->findTableCount($tableName);
	}//close:func:index
	
} //close:class:front
/* End of file front.php */
/* Location: ./application/controllers/front.php */
?>