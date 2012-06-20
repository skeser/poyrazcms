<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lys_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}//close:construct
	/**********************************************************************************************************************/
	function loginCheck($unameFromUser,$passFromUser){
		$passFromUser =  md5("kullanic_oturum_" . md5($passFromUser) . "_ds785667f5e67w423yjgty");	
				
		$this->db->select('userID,uname,upass,logincount');
		$this->db->where('uname',$unameFromUser);
		$query = $this->db->get("lys_user");
				
		if ($query->num_rows() > 0){
			$row = $query->row();
	
			$userIDResultDB		=	$row ->	userID;
			$userResultDB	 	=  	$row -> uname;
			$passResultDB	 	= 	$row -> upass;
			$logincountResultDB =	$row ->	logincount;
		}else{	$userResultDB =  "null";
				$passResultDB =  "null";
		}
		
		if ($userResultDB==$unameFromUser and $passResultDB==$passFromUser ){
			//bilgiler dogru ise..
			$ticket['is_logged_in']	=	true;
			$ticket['userID'] 		= 	$userIDResultDB;
			$ticket['uname'] 		= 	$userResultDB;
			
			$updateArr['logincount']= $logincountResultDB + 1;
			$updateArr['logged_in'] = 1;
					
			$updateTableName	= 'lys_user';
			$primaryKey			= 'userID';
			$primarykeyValue	= $userIDResultDB;	
			
			$ticket['logged_inUpdate']	=	$this->standartdb_model->updateTable($updateTableName,$updateArr,$primaryKey,$primarykeyValue);
			
		}else{
				$ticket['is_logged_in']	=	false;
				
		}
		
		return $ticket;
	}//close:func:loginCheck
	/**********************************************************************************************************************/
	function mukerrer($mukerrerArr){
		//unameCheck
		$this->db->where('uname',$mukerrerArr['uname']);
		$query = $this->db->get("lys_user");
		if($query->num_rows() == 0){
			$mukerrerArrResult['uname'] = TRUE;
		}else{
			$mukerrerArrResult['uname'] = FALSE;
		}
		$this->db->where('email',$mukerrerArr['email']);
		$query = $this->db->get("lys_user");
		if($query->num_rows() == 0){
			$mukerrerArrResult['email'] = TRUE;
		}else{
			$mukerrerArrResult['email'] = FALSE;
		}
		return $mukerrerArrResult;
	}//close:func:mukerrer
	/**********************************************************************************************************************/
	function testRepeatEmail($data){
		//unameCheck
		$this->db->where('email',$data);
		$query = $this->db->get("lys_user");
		if($query->num_rows() == 0){
			$repeatResult = TRUE;
		}else{
			$repeatResult = FALSE;
		}
		return $repeatResult;
	}//close:func:mukerrer
	/**********************************************************************************************************************/
	function getUser($userID){
		$this->db->select('userID,ad,soyad,email,ceptel,uname,upass');
		$this->db->where('userID',$userID);
		$query = $this->db->get("lys_user");
		if($query->num_rows() == 1){
				$row = $query->row();
				$userObj['userID']	=	$row -> userID;
				$userObj['ad']		=	$row -> ad;
				$userObj['soyad']	=	$row ->	soyad;
				$userObj['email']	=	$row -> email;
				$userObj['ceptel']	=	$row -> ceptel;
				$userObj['uname']	=	$row -> uname;
				//$userObj['upass']	=	$row -> upass;
							
		}else{
				$userObj = array ();
		}
		
		return $userObj;
	}//close:func:getUser
		/**********************************************************************************************************************/
	function loginClose($userID){
		$updateTableName	= 'lys_user';
		$updateArr['logged_in']	= 0;
		$primaryKey			= 'userID';
		$primarykeyValue = $userID;
		$loginCloseResult	=	$this->standartdb_model->updateTable($updateTableName,$updateArr,$primaryKey,$primarykeyValue);
		return $loginCloseResult;
	}//close:func:loginClose
	/**********************************************************************************************************************/
	function get_log_lys(){
		$query = $this->db->get('log_lys');
		if ($query->num_rows() == 0){
				$loglysTableObj[$satir -> actID]['actID'] 		 = "";
				$loglysTableObj[$satir -> actID]['userID'] 		 = "";
				$loglysTableObj[$satir -> actID]['actName']		 = "";
				$loglysTableObj[$satir -> actID]['sessionID'] 	 = "";
				$loglysTableObj[$satir -> actID]['ip'] 			 = "";
				$loglysTableObj[$satir -> actID]['actDate'] 	 = "";
				$loglysTableObj[$satir -> actID]['actTime']		 = "";
				$loglysTableObj[$satir -> actID]['log_lys_data'] = "";
		}else{
				foreach($query->result() as $satir){
					$loglysTableObj[$satir -> actID]['actID']		= $satir -> actID;
					
					$tableName			=	"lys_user";
					$alanAdi			=	"uname";
					$primaryKeyName		=	"userID";
					$primaryKeyValue	=	$satir -> userID;
					
					$loglysTableObj[$satir -> actID]['uname']	=	$this->standartdb_model->selectTekAlan($tableName,$alanAdi,$primaryKeyName,$primaryKeyValue);
					
					//$loglysTableObj[$satir -> actID]['userID']		= $satir -> userID;
					$loglysTableObj[$satir -> actID]['actName']		= $satir -> actName;
					$loglysTableObj[$satir -> actID]['sessionID']	= $satir -> sessionID;
					$loglysTableObj[$satir -> actID]['ip'] 			= $satir -> ip; 
					$loglysTableObj[$satir -> actID]['actDate'] 	= $satir -> actDate;
					$loglysTableObj[$satir -> actID]['actTime'] 	= $satir -> actTime;
					$loglysTableObj[$satir -> actID]['log_lys_data'] = $satir -> log_lys_data;
				} 
		}		
		return $loglysTableObj;
		
	}//close:func:get_log_lys
	/**********************************************************************************************************************/

} //close:class:lys_model

/* End of file lys_model.php */
/* Location: ./application/models/lys_model.php */
?>