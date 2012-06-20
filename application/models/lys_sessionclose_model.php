<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/////////////////////////////////////////////////////////////////////////////
// 	buradaki isler cron tarafindan yapilacak. ki yapiliyor.
// 	/etc/crontab bilgisi;
//	#skeser , myci lys_user - lys_sessions / logged_in - is_logged_in senkranizasyonu..
//	#
//	* * * * * arge php5 /home/arge/public_html/myci/application/controllers/cronJobClose_lys_user.php >> /home/arge/public_html/myci/application/logs/cron.txt
//  
/////////////////////////////////////////////////////////////////////////////
class Lys_sessionclose_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	//SELECT * FROM lys_sessions WHERE user_data REGEXP '.*"userID";s:[0-9]+:"1".*'
	function getSessionsTimeOut(){
		$time = time(); //simdiki zamani bul.
		$sess_exp_time = time() - (10*60); // oturum sonlanma zamani dk*sn 10*60
		
		$this->db->where('last_activity <',$sess_exp_time);
		$query = $this->db->get('lys_sessions');
		if ($query->num_rows() == 0){
					$getSessionsTimeOut['session_id'] = "";
					$getSessionsTimeOut['ip_address'] = "";
					$getSessionsTimeOut['user_agent'] = "";
					$getSessionsTimeOut['last_activity'] = "";
					$getSessionsTimeOut['user_data'] = "";
		}else{
				foreach($query->result() as $satir){
					$getSessionsTimeOut[$satir-> session_id]['session_id']		 = $satir-> session_id;
					$getSessionsTimeOut[$satir-> session_id]['ip_address']		 = $satir-> ip_address;
					$getSessionsTimeOut[$satir-> session_id]['user_agent']		 = $satir-> user_agent;
					$getSessionsTimeOut[$satir-> session_id]['last_activity']		 = date("d-m-Y H:i:s",$satir-> last_activity);
					$user_dataArr = unserialize($satir-> user_data);
					$getSessionsTimeOut[$satir-> session_id]['user_name']		 = $user_dataArr['user_name'];    
				} 
		}		
		return $getSessionsTimeOut;
		
	}//func:close:checkTimeOut
	
	function loginStatusCheck(){
		$this->db->where('user_data !=',""); // don't include half-open conn. !!
		$query = $this->db->get('lys_sessions');
		if ($query->num_rows() == 0){
					$liveUsersIDArr = array();
		}else{
				foreach($query->result() as $satir){
					$user_dataArr = unserialize($satir-> user_data);
					$liveUsersIDArr[] = $user_dataArr['userID'];
				} 
		}
		return $liveUsersIDArr;			
	}//close:func:loginStatusCheck
	
	function loginStatusSenkron(){
		$query = $this->db->get('lys_user');
		if ($query->num_rows() == 0){
					$userIDArr = array();
		}else{
				$liveUsersIDArr	 =	$this->loginStatusCheck();
				$updateTableName	= 'lys_user';
				$primaryKey			= 'userID';
				foreach($query->result() as $satir){
					$userIDArr[$satir->userID]	=	$satir->userID;
					$oldloggedin[$satir->userID]	= 	$satir->logged_in;
					if (in_array($satir->userID,$liveUsersIDArr)){
						$updateArr['logged_in'] = 1;
					}else{
						$updateArr['logged_in'] = 0;		
					}
					$primarykeyValue	= $satir->userID;
					$loginStatusSenkronResult[$satir->userID]	=	$this->standartdb_model->updateTable($updateTableName,$updateArr,$primaryKey,$primarykeyValue);
					$loginStatusSenkronResult[$satir->userID]	= 	$loginStatusSenkronResult[$satir->userID]."----".$satir->userID."--".$updateArr['logged_in']."-->".$oldloggedin[$satir->userID];
				}//foreach
		}
		return 		$loginStatusSenkronResult;			
	}//close:func:loginStatusCheck
	
	//////////////
	function getSessionsTable(){
		//$this->db->where('user_data !=',"");
		$query = $this->db->get('lys_sessions');
		if ($query->num_rows() == 0){
					$sessionsTableObj['session_id'] = "";
					$sessionsTableObj['ip_address'] = "";
					$sessionsTableObj['user_agent'] = "";
					$sessionsTableObj['last_activity'] = "";
					$sessionsTableObj['user_data'] = "";
		}else{
				foreach($query->result() as $satir){
					$sessionsTableObj[$satir-> session_id]['session_id']		 = $satir-> session_id;
					$sessionsTableObj[$satir-> session_id]['ip_address']		 = $satir-> ip_address;
					$sessionsTableObj[$satir-> session_id]['user_agent']		 = $satir-> user_agent;
					$sessionsTableObj[$satir-> session_id]['last_activity']		 = date("d-m-Y H:i:s",$satir-> last_activity);
					$user_dataArr = unserialize($satir-> user_data);
					$sessionsTableObj[$satir-> session_id]['user_name']		 = $user_dataArr['user_name'];    
					
				} 
		}		
		return $sessionsTableObj;	
	}//close:func: getSessionsTable
	
	function halfOpenConnCount(){
		$this->db->where('user_data',"");
		$query = $this->db->get('lys_sessions');
		
		return $query->num_rows();	
	}//close:func: halfOpenConnCount
	
	function getOnlineUsers(){
		$this->db->where('user_data !=',"");
		$query = $this->db->get('lys_sessions');
		if ($query->num_rows() == 0){
					$onlineUsersTableObj['session_id'] = "";
					$onlineUsersTableObj['ip_address'] = "";
					$onlineUsersTableObj['last_activity'] = "";
					$onlineUsersTableObj['user_name'] = "";
		}else{
				foreach($query->result() as $satir){
					$onlineUsersTableObj[$satir-> session_id]['session_id']		 = $satir-> session_id;
					$onlineUsersTableObj[$satir-> session_id]['ip_address']		 = $satir-> ip_address;
					//$onlineUsersTableObj[$satir-> session_id]['user_agent']		 = $satir-> user_agent;
					$onlineUsersTableObj[$satir-> session_id]['last_activity']	 = $satir-> last_activity;
					$user_dataArr = unserialize($satir-> user_data);
					$onlineUsersTableObj[$satir-> session_id]['user_name']		 = $user_dataArr['user_name'];
					
				} 
		}		
		return $onlineUsersTableObj;	
	}//close:func: getSessionsTable
	function findConnCount($connType){
		if ($connType == "halfOpen"){
			$this->db->where('user_data',"");
		}
		if ($connType == "established"){
			$this->db->where('user_data !=',"");
		}
		if ($connType == "all"){
		}
		
		$query = $this->db->get('lys_sessions');
		
		return $query->num_rows();	
	}//close:func: halfOpenConnCount
	
	
	
}//close:class:Lys_model
?>