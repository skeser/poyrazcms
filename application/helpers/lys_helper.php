<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function lysMenu(){
			$myci =& get_instance();
			$menu['AnaSayfa']	= anchor('main/', 'Ana Sayfa', 'title="Ana Sayfa"');
			
			$userID	=	$myci->session->userdata('userID');
			$uname	=	$myci->session->userdata('user_name');
			
			$menu['userEdit']	= anchor('/lys/userEdit/'.$userID.'', 'Hesabım', 'title="Hesabım Düzenle"');		
			$menu['userAdd']	= anchor('/lys/userAdd', 'Kullanıcı Ekle', 'title="Kullanıcı Ekle"');
			
			$menu['sysInfo']	= anchor('sysinfo/test', 'System info', 'title="System info"');
			$menu['sysLogs']	= anchor('lys/logLYS', 'Loglar', 'title="Loglar"');
			
			$menu['uname']		= anchor('/lys/userEdit/'.$userID.'', ''.$uname.'', 'title="Hesabımı Düzenle"');	
			$menu['logout']		= anchor('login/logout', 'Çıkış', 'title="Çıkış / Oturumu Kapat"');
			
			
			return $menu;
		}

function lysFormPost($formSelect){
			$myci =& get_instance();
	// formdan bilgiler aliniyor..
		if($formSelect == "userAdd"){
			$formArr['ad'] = $myci->input->post('ad');
			$formArr['soyad'] = $myci->input->post('soyad');
			$formArr['email'] = $myci->input->post('email');
			$formArr['ceptel'] = $myci->input->post('ceptel');
				$time = time();
			$formArr['tarih'] = mdate("%Y-%m-%d",time());
			$formArr['saat'] = mdate("%H:%i:%s",time());
//			$formArr['registerIp'] = $_SERVER['REMOTE_ADDR']; 
//			$formArr['registerHost'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$formArr['registerIp'] = 00; 
			$formArr['registerHost'] = 00;
			$formArr['uname'] = $myci->input->post('uname');
			$upass = $myci->input->post('upass');
			$formArr['upass'] = md5("kullanic_oturum_" . md5($upass) . "_ds785667f5e67w423yjgty");
		}
		if($formSelect == "userEdit"){
			$formArr['ad'] 		= $myci->input->post('ad');
			$formArr['soyad'] 	= $myci->input->post('soyad');
			$formArr['email'] 	= $myci->input->post('email');
			$formArr['ceptel'] 	= $myci->input->post('ceptel');
			$upass 				= $myci->input->post('upass');
			$formArr['upass'] 	= md5("kullanic_oturum_" . md5($upass) . "_ds785667f5e67w423yjgty");
		}
		return $formArr;
	} // formGetPost close
	
	function log_lys($actName){
	$myci =& get_instance();
	if($actName == "loginSuccess"){
		/***********************************************
		*	Log -> actName : loginsucces
		***********************************************/
		//$insertArr['userID'] 	= $myci->login->$ticket['userID'];
		$insertArr['sessionID'] = "null";
		$insertArr['actName'] 	= $actName;
		$insertArr['ip'] 		= $_SERVER['REMOTE_ADDR']; 
		$insertArr['actDate'] 	= mdate("%Y-%m-%d",time());
		$insertArr['actTime'] 	= mdate("%H:%i:%s",time());
		$insertArr['log_lys_data'] 	= "";
	}
	return $insertArr;

	}
	
	function lysMessage($message){
				$myci =& get_instance();
		// formdan bilgiler aliniyor..
				if($message['islem'] == "userAdd"){
					if($message['result'] == true){
						$messageArr = "hesap ekleme islemi başarılı";
					 }else{
						$messageArr = "hesap ekleme islemi başarısız !!";
					 }
			 }//close:if:userEdit
			if($message['islem'] == "userEdit"){
				if($message['result'] == true){
					$messageArr = "kullanici bilgileriniz basariyla güncellendi";
				}else{
					$messageArr = "kullanici bilgileriniz guncellenemedi problem var !";
				}
			}//close:if:userEdit
			return $messageArr;
		} // formGetPost close
?>