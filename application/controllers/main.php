<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->is_logged_in();	// login check !
		
		$this->smarty->assign('lysMenu',lysMenu());
		$this->smarty->assign('baseURL',base_url());

		$func = $this->uri->segment(2,0);
		$cont = $this->uri->segment(1,0);
		
		$pageSelect = "sysInfo";
		$this->smarty->assign('pageInfoArr',pageInfo($pageSelect));
		
		$this->smarty->assign('allSessionData',$this->session->all_userdata());
	}//close:construct
	/**********************************************************************************************************************/
	function index() {
		
		redirect('/sysInfo');

	} //close:func:index
	/**********************************************************************************************************************/
	function is_logged_in(){
		
		$is_logged_in = $this->session->userdata('is_logged_in');//Burada oturumdan is_logged_in değerini çekiyoruz. Eğer true dönerse bir kullanıcı giriş yapmış demektir.
 
		if(!isset($is_logged_in) || $is_logged_in != true)//is_logged_in set edilmiş mi ve set edildi ise değeri true mu? Cevabımız evet ise bu fonksiyon bir problem çıkarmıyor ve yolumuza devam edip sayfamıza erişiyoruz.
		{
			//echo 'Bu sayfaya erisim yetkiniz yok !! Olimcak isler bunlar buyrun burdan --> <a href="login">Giris</a>';//Aksi halde erişim yok uyarısı verip,
			$panelLink = anchor('login', 'Login', 'title="Oturum Ac"');
			$this->smarty->assign('panelLink',$panelLink);
			$this->smarty->display('lys/logout.tpl');
			die();//işlemi durduruyoruz.
		}
	}//close:func:is_logged_in
	/**********************************************************************************************************************/
		
} //close:main:class

/* End of file yonet.php */
/* Location: ./application/controllers/yonet.php */
?>