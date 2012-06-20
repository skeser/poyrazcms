<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbfunc_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	/*
	*	Verilen tablodaki kayit sayini bulur
	*/
	function findTableCount ($tableName) {
		return $this->db->count_all_results($tableName);	
	}
	
	
} //Dbfunc_model class close
/* End of file Dbfunc_model.php */
/* Location: ./application/models/Dbfunc_model.php */
?>