<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->smarty->assign('baseURL',base_url());
		
		$pageSelect = "login";
		$this->smarty->assign('pageInfoArr',pageInfo($pageSelect));
		
		$pageName = "MYCI - LYS - LOG - Yetki";
			$this->smarty->assign('pageName',$pageName);
		$pageFooter = "MYCI &copy; - Poyraz Teknoloji - 2012";
			$this->smarty->assign('pageFooter',$pageFooter);
	}//close:construct
	/**********************************************************************************************************************/
	function index()
	{
		$this->smarty->assign("formpath",form_open('login'));
		$loginRules = array(
            array(
                'field' => 'unameFromUser',
                'label' => 'Kullanici adi',
                'rules' => 'trim|required|min_length[3]|max_length[12]|alpha_numeric|xss_clean'
            ),
            array(
                'field' => 'passFromUser',
                'label' => 'Sifre',
                'rules' => 'trim|required|min_length[4]|max_length[12]|alpha_numeric|xss_clean'
            )
        );
		$this->form_validation->set_rules($loginRules);
		$this->form_validation->set_message('required', 'Kullanıcı Adı yada sifre girilmemis');
		$this->smarty->assign("validation_errors",validation_errors());
		
		if ($this->form_validation->run() == FALSE){
			$this->smarty->assign("validation_errors",validation_errors());
			$this->smarty->assign("SiteTitle","LYS");
			$this->smarty->assign("PageTitle","Login Sayfasi");
			
			$this->template->lysLoginShow();
		}else{
				$unameFromUser = $this->input->post('unameFromUser'); 
				$passFromUser = $this->input->post('passFromUser');
				
				
				$ticket = $this->lys_model->loginCheck($unameFromUser,$passFromUser);
				
				if ($ticket['is_logged_in'] === true)
				{
					$this->session->set_userdata('is_logged_in',$ticket['is_logged_in']);

					$this->session->set_userdata('userID',$ticket['userID']);
					$this->session->set_userdata('user_name',$ticket['uname']);
					/***********************************************
					*	Log -> actName : loginsucces
					***********************************************/
					$insertTableName = "log_lys";
					$insertArr['userID'] 	= $ticket['userID'];
					$insertArr['sessionID'] = "null";
					$insertArr['actName'] 	= "loginSuccess";
					$insertArr['ip'] 		= $_SERVER['REMOTE_ADDR']; 
					$insertArr['actDate'] 	= mdate("%Y-%m-%d",time());
					$insertArr['actTime'] 	= mdate("%H:%i:%s",time());
					$insertArr['log_lys_data'] 	= "";
					$logResult	= $this->standartdb_model->insertTable($insertTableName,$insertArr);
					if($logResult == FALSE){
						echo "loginSuccess kaydi yapilamiyor.";
					}
					/****stop log codes****/
				
					redirect('/yonet');	
				}else{
					// giris sayfasina yönlendir..
					
					$this->smarty->assign("loginResultMesaj","yanlış kullanıcı adı / şifre");
					$this->smarty->assign("SiteTitle","LYS");
					$this->smarty->assign("PageTitle","Login Sayfasi");
					
					$this->template->lysLoginShow();
					/***********************************************
					*	Log -> actName : loginfail
					***********************************************/
					$insertTableName = "log_lys";
					$insertArr['userID'] 	= "0";
					$insertArr['sessionID'] = "null";
					$insertArr['actName'] 	= "loginFailure";
					$insertArr['ip'] 		= $_SERVER['REMOTE_ADDR']; 
					$insertArr['actDate'] 	= mdate("%Y-%m-%d",time());
					$insertArr['actTime'] 	= mdate("%H:%i:%s",time());
					$insertArr['log_lys_data'] 	= "";
					$logResult	= $this->standartdb_model->insertTable($insertTableName,$insertArr);
					if($logResult == FALSE){
						echo "loginFailure kaydi yapilamiyor.";
					}
					/****stop log codes****/
				}			
		}
	}//close:func:index
	/**********************************************************************************************************************/
	function logout(){
		$userID	= $this->session->userdata('userID');
		$loginCloseResult	= 	$this->lys_model->loginClose($userID);
		if ($loginCloseResult){
			$this->session->sess_destroy();
			/***********************************************
			*	Log -> actName : logOut
			***********************************************/
			$insertTableName = "log_lys";
			
			$insertArr['userID']	 = $this->session->userdata('userID');
			$insertArr['sessionID']  = $this->session->userdata('session_id');
			$insertArr['ip'] 		 = $this->session->userdata('ip_address');
			$insertArr['actName'] 	 = "logOut";
							
			$insertArr['actDate'] 	 = mdate("%Y-%m-%d",time());
			$insertArr['actTime'] 	 = mdate("%H:%i:%s",time());

			
			$logResult	= $this->standartdb_model->insertTable($insertTableName,$insertArr);
			if($logResult == FALSE){
				echo $insertArr['actName']."hata !";
			}
			/****stop log codes****/
			redirect('/login');
		}else{
			echo "oturum kapatilamadi.";
		}
		
	}//close:func:logout
	/********************************************************************************************************************************************/
}//close:class:login

/* End of file login.php */
/* Location: ./application/controllers/login.php */
?>