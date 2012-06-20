<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Yonet_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	// Get Site Info 
	function getSiteInfo(){
		$query = $this->db->get('siteinfo');
		if ($query->num_rows() == 0){
			$siteInfo['siteAdi'] = "";
			$siteInfo['slogan'] = "";
			$siteInfo['title'] = "";
			$siteInfo['description'] = "";
			$siteInfo['keywords'] = "";
			$siteInfo['copyright'] = "";
			$siteInfo['author'] = "";
			$siteInfo['downMessage'] = "";
			$siteInfo['templateName'] = "";
		}else{
		foreach($query->result() as $satir){
			$siteInfo['siteAdi'] = $satir->siteAdi;
			$siteInfo['slogan'] = $satir->slogan;
			$siteInfo['title'] = $satir->title;
			$siteInfo['description'] = $satir->description;
			$siteInfo['keywords'] = $satir->keywords;
			$siteInfo['copyright'] = $satir->copyright;
			$siteInfo['author'] = $satir->author;
			$siteInfo['downMessage'] = $satir->downMessage;
			$siteInfo['templateName'] = $satir->templateName;
			$siteInfo['footer']			=	"Poyraz CMS - v0.5";
			$siteInfo['loginLink']		=	anchor('/login', 'Yönetim Paneli', 'title="Yönetim Paneli Giriş"');
			}
			return $siteInfo;
		}
	}
	// getFirma
	function getFirma(){
		$query = $this->db->get('firma');
		if ($query->num_rows() == 0){
				$firmaArr['firmaAdi'] = "";
				$firmaArr['unvan'] = "";
				$firmaArr['kisaAd'] = "";
				$firmaArr['adres'] = "";
				$firmaArr['tel'] = "";
				$firmaArr['fax'] = "";
				$firmaArr['email'] = "";
				$firmaArr['website'] = "";
			
		}else{
			foreach($query->result() as $satir){
				$firmaArr['firmaAdi'] = $satir->firmaAdi;
				$firmaArr['unvan'] = $satir->unvan;
				$firmaArr['kisaAd'] = $satir->kisaAd;
				$firmaArr['adres'] = $satir->adres;
				$firmaArr['tel'] = $satir->tel;
				$firmaArr['fax'] = $satir->fax;
				$firmaArr['email'] = $satir->email;
				$firmaArr['website'] = $satir->website;
			}
		}
		return $firmaArr;
	}//close: getFirma
	// getUser
	function getUser(){
		$query = $this->db->get('user');
		//return $query->result();
		if ($query->num_rows() == 0){
				$userArr[0]['userName'] = "";
				$userArr[0]['userPass'] = "";
				$userArr[0]['userAd'] = "";
				$userArr[0]['userSoyad'] = "";
				$userArr[0]['updateLinks'] = "";
		}else{
				foreach ($query->result() as $row)
					{
						//$userArr[$row-> userID]['userID'] = $row-> userID;
						$userArr[$row-> userID]['userName'] = $row-> userName;
						$userArr[$row-> userID]['userPass'] = $row-> userPass;
						$userArr[$row-> userID]['userAd'] = $row-> userAd;
						$userArr[$row-> userID]['userSoyad'] = $row-> userSoyad;
						$userArr[$row-> userID]['updateLinks'] = anchor('yonet/user/'.$row-> userID.'', 'Düzenle', 'title="Kullanıcı Düzenle"');
					}
				}
			return $userArr;
	}//close: user
	// getKategori
	function getKategori(){
		$query = $this->db->get('kategori');
		//return $query->result();
		if ($query->num_rows() == 0){
						$kategoriArr[0]['kategoriID'] = "";
						$kategoriArr[0]['kategoriAdi'] = "";
						$kategoriArr[0]['sira'] = "";
						$kategoriArr[0]['showStatus'] = "";
			
		}else{
				foreach ($query->result() as $row)
					{
						$kategoriArr[$row-> kategoriID]['kategoriID'] = $row-> kategoriID;
						$kategoriArr[$row-> kategoriID]['kategoriAdi'] = $row-> kategoriAdi;
						$kategoriArr[$row-> kategoriID]['sira'] = $row -> order;
						$kategoriArr[$row-> kategoriID]['showStatus'] = $row-> showStatus;
					}
					return $kategoriArr;
		}
	}//close: getKategori
	function getKategoriID(){
		$query = $this->db->get('kategori');
		//return $query->result();
		if ($query->num_rows() == 0){
			$kategoriIDArr[0] = "";
		}else{
			foreach ($query->result() as $row)
			{
				$kategoriIDArr[$row-> kategoriID] = $row-> kategoriID;
			}
			return $kategoriIDArr;
		}
	}//close: getKategoriID
	/**********************************************************************/
	function getBolum(){
		$this->db->order_by("kategoriID", "asc"); 
		$query = $this->db->get('bolum');
		//return $query->result();
		if ($query->num_rows() == 0){
				$bolumArr[0]['bolumID'] = "";
				$bolumArr[0]['kategoriID'] = "";
				$bolumArr[0]['bolumAdi'] = "";
				$bolumArr[0]['bolumOrder'] = "";
				$bolumArr[0]['showStatus'] = "";
		}else{
			foreach ($query->result() as $row)
			{
				$bolumArr[$row-> bolumID]['bolumID'] = $row-> bolumID;
				$bolumArr[$row-> bolumID]['kategoriID'] = $row-> kategoriID;
				$bolumArr[$row-> bolumID]['bolumAdi'] = $row-> bolumAdi;
				$bolumArr[$row-> bolumID]['bolumOrder'] = $row -> bolumOrder;
				$bolumArr[$row-> bolumID]['showStatus'] = $row-> showStatus;
			}
			return $bolumArr;
		}


	}//close: getBolum
	function getBolumID(){
		$query = $this->db->get('bolum');
		//return $query->result();
		if ($query->num_rows() == 0){
				$bolumIDArr[0] = "";
		}else{
				foreach ($query->result() as $row)
					{
						$bolumIDArr[$row-> bolumID] = $row-> bolumID;
					}
					return $bolumIDArr;
		}
	}//close: getBolumID
	function getIcerikMultiTable(){
		$this->db->select('kategori.kategoriID,kategori.kategoriAdi,bolum.bolumID,bolum.bolumAdi,icerik.icerikID,icerik.icerikAdi,icerik.icerikOrder,icerik.showStatus,icerik.frontShow');
		$this->db->from('icerik');
		$this->db->join('bolum', 'bolum.bolumID = icerik.bolumID','left');
		$this->db->join('kategori', 'kategori.kategoriID = bolum.kategoriID','left');
		$this->db->order_by("bolum.bolumID", "asc");
		$query = $this->db->get();
		//return $query->result();
		if ($query->num_rows() == 0){
					$icerikTableObjectMultiTable[0]['kategoriID'] = "";
					$icerikTableObjectMultiTable[0]['kategoriAdi'] = "";
					
					$icerikTableObjectMultiTable[0]['bolumID'] =  "";
					$icerikTableObjectMultiTable[0]['bolumAdi'] =  "";
					
					$icerikTableObjectMultiTable[0]['icerikID'] =  "";
					$icerikTableObjectMultiTable[0]['icerikAdi'] =  "";						
					$icerikTableObjectMultiTable[0]['icerikOrder'] = "";
					$icerikTableObjectMultiTable[0]['showStatus'] =  "";
					$icerikTableObjectMultiTable[0]['frontShow'] =  "";
					$icerikTableObjectMultiTable[0]['icerikUpdateLink'] = "";
	}else{
			foreach ($query->result() as $row)
				{
					$icerikTableObjectMultiTable[$row-> icerikID]['kategoriID'] = $row -> kategoriID;
					$icerikTableObjectMultiTable[$row-> icerikID]['kategoriAdi'] = $row ->  kategoriAdi;
					
					$icerikTableObjectMultiTable[$row-> icerikID]['bolumID'] =  $row-> bolumID;
					$icerikTableObjectMultiTable[$row-> icerikID]['bolumAdi'] =  $row-> bolumAdi;
					
					$icerikTableObjectMultiTable[$row-> icerikID]['icerikID'] =  $row-> icerikID;	
					$icerikTableObjectMultiTable[$row-> icerikID]['icerikAdi'] =  $row-> icerikAdi;						
					$icerikTableObjectMultiTable[$row-> icerikID]['icerikOrder'] =  $row-> icerikOrder;
					$icerikTableObjectMultiTable[$row-> icerikID]['showStatus'] =  $row-> showStatus;
					$icerikTableObjectMultiTable[$row-> icerikID]['frontShow'] =  $row-> frontShow;
					$icerikTableObjectMultiTable[$row-> icerikID]['icerikUpdateLink'] = anchor('yonet/icerikEdit/'.$row-> icerikID.'', 'Değiştir', 'title="Değiştir"');
				}
				return $icerikTableObjectMultiTable;
	}
}//close: getBolum
	function getIcerikText($icerikID){
			 $this->db->select('kategori.kategoriID,
								kategori.kategoriAdi,
								bolum.bolumID,
								bolum.bolumAdi,
								icerik.icerikID,
								icerik.icerikAdi,
								icerik.icerikOzet,
								icerik.icerikText,
								icerik.tarih,
								icerik.saat,
								icerik.icerikOrder,
								icerik.showStatus,
								icerik.frontShow');
			$this->db->from('icerik');
			$this->db->join('bolum', 'bolum.bolumID = icerik.bolumID','left');
			$this->db->join('kategori', 'kategori.kategoriID = bolum.kategoriID','left');
			$this->db->where('icerik.icerikID',$icerikID);
			//$this->db->order_by("bolum.bolumID", "asc");
			$query = $this->db->get();
			//return $query->result();
				foreach ($query->result() as $row)
					{
						$icerikTextArr['kategoriID'] = $row -> kategoriID;
						$icerikTextArr['kategoriAdi'] = $row ->  kategoriAdi;
						
						$icerikTextArr['bolumID'] =  $row-> bolumID;
						$icerikTextArr['bolumAdi'] =  $row-> bolumAdi;
						
						$icerikTextArr['icerikID'] =  $row-> icerikID;	
						$icerikTextArr['icerikAdi'] =  $row-> icerikAdi;

						$icerikTextArr['icerikOzet'] =  $row-> icerikOzet;	
						$icerikTextArr['icerikText'] =  $row-> icerikText;						
						$icerikTextArr['icerikTarih'] =  $row-> tarih;	
						$icerikTextArr['icerikSaat'] =  $row-> saat;	
						
						$icerikTextArr['icerikOrder'] =  $row-> icerikOrder;
						$icerikTextArr['showStatus'] =  $row-> showStatus;
						$icerikTextArr['frontShow'] =  $row-> frontShow;
						//$icerikTextArr['icerikUpdateLink'] = anchor('yonet/icerikEdit/'.$row-> icerikID.'', 'Değiştir', 'title="Değiştir"');
					}
					return $icerikTextArr;
	}//close: getBolum
		function geticerikID(){
		$query = $this->db->get('icerik');
		//return $query->result();
		foreach ($query->result() as $row)
			{
				$icerikIDArr[$row-> icerikID] = $row-> icerikID;
			}
			return $icerikIDArr;
	}//close: geticerikID
	
} //SiteInfo_model class close
/* End of file siteInfo_model.php */
/* Location: ./application/models/siteInfo_model.php */
?>