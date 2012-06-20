<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class template {
	private $myci;
	function __construct(){
		$this->myci =& get_instance();
	} // construct close
	/**********************************************************************************
	*	lys Print
	**********************************************************************************/
	public function lysLoginShow(){
		
		$this->myci->smarty->display("lys/lys.login_view_header.tpl");
		
		$this->myci->smarty->display("lys/lys.login_view_body.tpl");
		$this->myci->smarty->display("lys/lys.login_view_footer.tpl");
	}
	/**********************************************************************************
	*	main Print
	**********************************************************************************/
	public function lysShow($bodyContent){
		
		$this->myci->smarty->display("yonet/front_view_header1.tpl");
		//js print
		$this->myci->jquery_ext->output();
		$this->myci->smarty->display("yonet/front_view_header2.tpl");
		
		$this->myci->smarty->display("yonet/yonet_view_top.tpl");
		$this->myci->smarty->display($bodyContent);
		$this->myci->smarty->display("yonet/front_view_footer.tpl");
	}
	/**********************************************************************************
	*	yonet Print
	**********************************************************************************/
	public function yonetShow($bodyContent){
		
		$this->myci->smarty->display("yonet/front_view_header1.tpl");
		//js print
		$this->myci->jquery_ext->output();
		$this->myci->smarty->display("yonet/front_view_header2.tpl");
		
		$this->myci->smarty->display("yonet/yonet_view_top.tpl");
		$this->myci->smarty->display($bodyContent);
		$this->myci->smarty->display("yonet/front_view_footer.tpl");
	}
	/**********************************************************************************
	*	front Print
	**********************************************************************************/
	public function frontShow($menuContent,$bodyContent){
		
		$this->myci->smarty->display("front/front_view_header1.tpl");
		//js print
		$this->myci->jquery_ext->output();
		$this->myci->smarty->display("front/front_view_header2.tpl");
		
		$this->myci->smarty->display($menuContent);
		$this->myci->smarty->display($bodyContent);
		$this->myci->smarty->display("front/front_view_footer.tpl");
	}
	
} //close:template

/* End of file template.php */
/* Location: ./application/libraries/template.php */
?>