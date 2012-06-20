<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function messagePacker($islem,$result,$tableName){
	$myci =& get_instance();
	unset($messageArr);
	if ($result == TRUE){
		$messageArr['status'] 		= TRUE;
		$messageArr['statusText']   = "başarılı";	
		$messageArr['alert']		= "success";	
	}
	if ($result == FALSE){
		$messageArr['status'] = FALSE;
		$messageArr['statusText'] = "başarısız !!";
		$messageArr['alert']		= "error";
	}
	if ($result == NULL){
		$messageArr['status']		 = NULL;
		$messageArr['statusText']	 = "";
		$messageArr['alert']	     = "info";
	}

	if($islem == 'insert'){
		$messageArr['islem'] = "Kayıt ekleme işlemi";
	}
	if($islem == 'select'){
		$messageArr['islem'] = "Arama işlemi";
	}
	if($islem == 'delete'){
		$messageArr['islem'] = "Kayit silme işlemi";
	}
	if($islem == 'update'){
		$messageArr['islem'] = "Bilgi güncelleme işlemi";
	}
	if($islem == 'first'){
		$messageArr['islem'] = "Formu doldurup kaydet butonuna basin.";
	}
	if($islem == 'guncelle'){
		$messageArr['islem'] = "Formu güncelleyip kaydet butonuna basin.";
	}
	
	$messageArr['tableName']	= $tableName;
	$messageArr['fullText'] 	= $messageArr['islem']." ".$messageArr['statusText']." "."(Tablo Adı:".$messageArr['tableName'].")";

	//$messageArr -- status/statusText/islem/tableName/fullText
	return $messageArr;
} // formGetPost close
	
?>