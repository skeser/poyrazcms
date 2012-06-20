<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lys extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();	
	
		$this->smarty->assign('baseURL',base_url());
		$this->smarty->assign('lysMenu',lysMenu());
		$this->smarty->assign('yonetMenu',yonetMenu());
		
		$pageSelect = "user";
		$this->smarty->assign('pageInfoArr',pageInfo($pageSelect));	
		$this->smarty->assign('allSessionData',$this->session->all_userdata());
	}//close:construct
	/**********************************************************************************************************************/
	function index() {
		
		echo "Page:lys";
		
	} // func: index close
	/**********************************************************************************************************************/
	function userAdd(){
		$attributes = array('class' => 'form-horizontal', 'id' => 'userAdd');
		$this->smarty->assign("userAddFormPath",form_open('lys/userAdd',$attributes));
		$this->smarty->assign("mukerrerStatus","false");
		$resultMessage	= "";
		$loginRules = array(
            array(
                'field' => 'ad',
                'label' => 'Ad',
                'rules' => 'trim|required|min_length[3]|max_length[30]|alpha_numeric|xss_clean'
            ),
            array(
                'field' => 'soyad',
                'label' => 'Soyad',
                'rules' => 'trim|required|min_length[4]|max_length[30]|alpha_numeric|xss_clean'
            ),
			array(
                'field' => 'email',
                'label' => 'Kullanici adi',
                'rules' => 'trim|required|min_length[3]|max_length[50]|valid_email|xss_clean'
            ),
			array(
                'field' => 'uname',
                'label' => 'Kullanici adi',
                'rules' => 'trim|required|min_length[3]|max_length[20]|xss_clean'
            ),
			array(
                'field' => 'upass',
                'label' => 'Kullanici adi',
                'rules' => 'trim|required|min_length[3]|max_length[20]|xss_clean|matches[upassCheck]'
            ),
			array(
                'field' => 'upassCheck',
                'label' => 'Kullanici adi',
                'rules' => 'trim|required|min_length[3]|max_length[12]|xss_clean'
            )
        );
		$this->form_validation->set_rules($loginRules);
		$this->form_validation->set_message('required', 'zorunlu alanlar girilmemiş.');
		$this->form_validation->set_message('matches', 'Parolalar eşleşmiyor.');
        $this->form_validation->set_message('valid_email', 'Geçerli email adresi giriniz.');
			
		if ($this->form_validation->run() == FALSE)
		{
			$this->smarty->assign("validation_errors",validation_errors());
		}
		else{
				//uname-email check
				$mukerrerArr['uname'] = $this->input->post('uname');
				$mukerrerArr['email'] = $this->input->post('email');
				$mukerrerArrResult = $this->lys_model->mukerrer($mukerrerArr);
				if($mukerrerArrResult['uname'] == FALSE or $mukerrerArrResult['email'] == FALSE){
					if ($mukerrerArrResult['uname'] == FALSE) {	$mukerrerResult['uname'] = $mukerrerArr['uname']."--daha once kullanilmiş.Farkı bir tane deneyin."; }
					if ($mukerrerArrResult['email'] == FALSE) {	$mukerrerResult['email'] = $mukerrerArr['email']."--daha once kullanilmiş.Farkı bir tane deneyin."; }
					$this->smarty->assign("mukerrerStatus","true");
					$this->smarty->assign("mukerrerResult",$mukerrerResult);
					$resultMessage	= "girdiğiniz bilgiler daha önce kullanilmiş..";
									
				}else{
					$insertTableName = "lys_user";
					$formSelect = "userAdd";
					$userInsertArr = lysFormPost($formSelect);
					$message['islem']	=	"userAdd";
					$message['result']  = $this->standartdb_model->insertTable($insertTableName,$userInsertArr);
					$resultMessage =	lysMessage($message);
					$this->smarty->assign("validation_errors",validation_errors());
					/***********************************************
					*	Log -> actName : useradd
					***********************************************/
					$insertTableName = "log_lys";
					
					$insertArr['userID'] = $this->session->userdata('userID');
					$insertArr['sessionID'] = $this->session->userdata('session_id');
					$insertArr['ip'] 		=$this->session->userdata('ip_address');
					$insertArr['actName'] 	= "userAdd";
									
					$insertArr['actDate'] 	= mdate("%Y-%m-%d",time());
					$insertArr['actTime'] 	= mdate("%H:%i:%s",time());
					$log_lys_data['userAddID']	=	$this->db->insert_id('lys_user');
						
					$insertArr['log_lys_data'] 	= serialize($log_lys_data);
					
					$logResult	= $this->standartdb_model->insertTable($insertTableName,$insertArr);
					if($logResult == FALSE){
						echo "loginFailure kaydi yapilamiyor.";
					}
					/****stop log codes****/
				}//check:close mukerrer
		}//check:close form_validation
		$this->smarty->assign("resultMessage",$resultMessage);
		$bodyContent = "lys/lys.userAddForm_view.tpl";
		$this->template->lysShow($bodyContent);
	}//close:func:userAdd
	/**********************************************************************************************************************/
	function userEdit() {
		
		$activeUserID	 =	$this->session->userdata('userID');
		$userID			 =  $this->uri->segment(3,0);
		
		if($userID != $activeUserID){
			$message['islem']	=	"userEdit";
			$message['result']	= 	$this->standartdb_model->updateTable($updateTableName,$updateArr,$primaryKey,$primarykeyValue);
		}else{	
				$attributes = array('class' => 'form-horizontal', 'id' => 'userEdit');
				$this->smarty->assign("userAddFormPath",form_open('lys/userEdit/'.$userID.'',$attributes));
				$this->smarty->assign("mukerrerStatus","false");
				// db den userID degerine gore, kaydi getir.
				//
				$resultMessage	= "";
				$this->smarty->assign("userObj",$this->lys_model->getUser($userID));
				$loginRules = array(
					array(
						'field' => 'ad',
						'label' => 'Ad',
						'rules' => 'trim|required|min_length[3]|max_length[30]|alpha_numeric|xss_clean'
					),
					array(
						'field' => 'soyad',
						'label' => 'Soyad',
						'rules' => 'trim|required|min_length[4]|max_length[30]|alpha_numeric|xss_clean'
					),
					array(
						'field' => 'email',
						'label' => 'Kullanici adi',
						'rules' => 'trim|required|min_length[3]|max_length[50]|valid_email|xss_clean'
					),
					array(
						'field' => 'upass',
						'label' => 'Kullanici adi',
						'rules' => 'trim|required|min_length[3]|max_length[20]|xss_clean|matches[upassCheck]'
					),
					array(
						'field' => 'upassCheck',
						'label' => 'Kullanici adi',
						'rules' => 'trim|required|min_length[3]|max_length[12]|xss_clean'
					)
				);
		
				$this->form_validation->set_rules($loginRules);
				$this->form_validation->set_message('required', 'zorunlu alanlar girilmemiş.');
				$this->form_validation->set_message('matches', 'Parolalar eşleşmiyor.');
				$this->form_validation->set_message('valid_email', 'Geçerli email adresi giriniz.');
					
				if ($this->form_validation->run() == FALSE)
					{	$this->smarty->assign("validation_errors",validation_errors());
				}
				else{
						//uname-email check
						
							$updateTableName = "lys_user";
							$formSelect 	 = "userEdit";
							$updateArr 		 = lysFormPost($formSelect);
							$primaryKey 	 = "userID";
							$primarykeyValue = $this->input->post('userID');
							
							$message['islem']	=	"userEdit";
							$message['result']	= 	$this->standartdb_model->updateTable($updateTableName,$updateArr,$primaryKey,$primarykeyValue);
							$resultMessage =	lysMessage($message);
							
							$this->smarty->assign("validation_errors",validation_errors());
							
							$this->smarty->assign("userObj",$this->lys_model->getUser($userID));
							/***********************************************
							*	Log -> actName : userEdit
							***********************************************/
							$insertTableName = "log_lys";
							
							$insertArr['userID']	 = $this->session->userdata('userID');
							$insertArr['sessionID']  = $this->session->userdata('session_id');
							$insertArr['ip'] 		 = $this->session->userdata('ip_address');
							$insertArr['actName'] 	 = "userEdit";
											
							$insertArr['actDate'] 	 = mdate("%Y-%m-%d",time());
							$insertArr['actTime'] 	 = mdate("%H:%i:%s",time());
							$log_lys_data['userEditID']	= $primarykeyValue;
								
							$insertArr['log_lys_data'] 	= serialize($log_lys_data);
							
							$logResult	= $this->standartdb_model->insertTable($insertTableName,$insertArr);
							if($logResult == FALSE){
								echo "loginFailure kaydi yapilamiyor.";
							}
							/****stop log codes****/
							
							
				}//check:close form_validation
		}
		$this->jquery_ext->add_script($this->js("testRepeat"));
		
		
		$this->smarty->assign("resultMessage",$resultMessage);
			
		$bodyContent = "lys/lys.userEditForm_view.tpl";
		$this->template->lysShow($bodyContent);
	}//close:func:userEdit
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
  
		case "testRepeat":
			$script = '$("#email").change(function(){
						   			var testRepeat = $("input#email").val();
					 		$.ajax({
									type:"POST",
									url:"'.base_url().'index.php/user/testRepeatEmail",
									data:"testRepeat="+testRepeat,
									success:function (msg){
										$("#repeadTestResult").html("");
										$("#repeadTestResult").html(msg);
								}
								})						
					})';
		break;
		}
	return $script;			
	}
	/********************************************************************************************************************************************/	
	function logLYS(){
		$this->smarty->assign("loglysTableObj",$this->lys_model->get_log_lys());	//log_lys tablosunu print ediyor..
		
		$bodyContent = "log/log_lys_view_body.tpl";
		$this->template->lysShow($bodyContent);
	}//close:func:log_lys
	/********************************************************************************************************************************************/
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');//Burada oturumdan is_logged_in değerini çekiyoruz. Eğer true dönerse bir kullanıcı giriş yapmış demektir.
 
		if(!isset($is_logged_in) || $is_logged_in != true)//is_logged_in set edilmiş mi ve set edildi ise değeri true mu? Cevabımız evet ise bu fonksiyon bir problem çıkarmıyor ve yolumuza devam edip sayfamıza erişiyoruz.
		{
			//echo 'Bu sayfaya erisim yetkiniz yok !! Olimcak isler bunlar buyrun burdan --> <a href="login">Giris</a>';//Aksi halde erişim yok uyarısı verip,
			$panelLink = anchor('/login', 'Yonetim Paneli', 'title="Yonetim Paneli / Oturum Ac"');
			$this->smarty->assign('panelLink',$panelLink);
			$this->smarty->display('lys/logout.tpl');
			die();//işlemi durduruyoruz.
		}
	}//close:is_logged_in

} //close:class:lys

/* End of file lys.php */
/* Location: ./application/controllers/lys.php */
?>