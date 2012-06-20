<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function yonetMenu(){
			$yonetMenu['YonetAnaSayfa'] 	= anchor('yonet/', 'Yonet', 'title="Yönetim Ana Sayfa"');
			$yonetMenu['siteinfo'] 			= anchor('yonet/siteinfo', 'Site Bilgileri', 'title="Site Bilgileri Sayfası"');
			$yonetMenu['firma'] 			= anchor('yonet/firma', 'Firma Bilgileri', 'title="Firma Bilgileri Sayfası"');
			$yonetMenu['user'] 				= anchor('yonet/user', 'Kullanıcı İşlemleri', 'title="Kullanıcı İşlemleri Sayfası"');
			$yonetMenu['kategori'] 			= anchor('yonet/kategori', 'Kategori İşlemleri', 'title="Kategori İşlemleri Sayfası"');
			$yonetMenu['bolum'] 			= anchor('yonet/bolum', 'Bölüm İşlemleri', 'title="Bölüm İşlemleri Sayfası"');
			$yonetMenu['icerikEkle'] 		= anchor('yonet/icerikEkle', 'İçerik Ekle', 'title="İçerik Ekleme Sayfası"');
			$yonetMenu['icerikEdit'] 		= anchor('yonet/icerikEdit', 'İçerik Düzenle', 'title="İçerik Düzenleme/Sıralama/Silme Sayfası"');
			$yonetMenu['defter']			= anchor('yonet/index/7', 'Mesajları Oku', 'title="Ziyaretçi Defteri Mesajlarını Oku"');
			
			$yonetMenu['siteAnaSayfa'] 		= anchor('', 'Front', 'title="Site Ana Sayfa"');
			return $yonetMenu;
		}

function formGetPost($formSelect){
			$myci =& get_instance();
	// formdan bilgiler aliniyor..
		if($formSelect == "siteinfo"){
			$formArr['siteAdi'] = $myci->input->post('siteAdi');
			$formArr['slogan'] = $myci->input->post('slogan');
			$formArr['title'] = $myci->input->post('title');
			$formArr['description'] = $myci->input->post('description');
			$formArr['keywords'] = $myci->input->post('keywords');
			$formArr['copyright'] = $myci->input->post('copyright');
			$formArr['author'] = $myci->input->post('author');
			$formArr['downMessage'] = $myci->input->post('downMessage');
			$formArr['templateName'] = $myci->input->post('templateName');
		}
		if($formSelect == "firma"){
			$formArr['firmaAdi'] = $myci->input->post('firmaAdi');
			$formArr['unvan'] = $myci->input->post('unvan');
			$formArr['kisaAd'] = $myci->input->post('kisaAd');
			$formArr['adres'] = $myci->input->post('adres');
			$formArr['tel'] = $myci->input->post('tel');
			$formArr['fax'] = $myci->input->post('fax');
			$formArr['email'] = $myci->input->post('email');
			$formArr['website'] = $myci->input->post('website');
		}
		if($formSelect == "user"){
			$formArr['userName'] = $myci->input->post('userName');
			//$formArr['userPass1'] = $myci->input->post('userPass1');
			//$formArr['userPass2'] = $myci->input->post('userPass2');
			$formArr['userAd'] = $myci->input->post('userAd');
			$formArr['userSoyad'] = $myci->input->post('userSoyad');
			
			$formArr['userPass'] = $myci->input->post('userPass1');
		}
		if($formSelect == "kategori"){
			$formArr['kategoriAdi'] = $myci->input->post('kategoriAdi');
			$formArr['showStatus'] = $myci->input->post('showStatus');
		}
		if($formSelect == "bolum"){
			$formArr['bolumAdi'] = $myci->input->post('bolumAdi');
			$formArr['kategoriID'] = $myci->input->post('kategoriID');
			$formArr['showStatus'] = $myci->input->post('showStatus');
		}
		if($formSelect == "icerikEkle"){
			$formArr['bolumID'] = $myci->input->post('bolumID');
			$formArr['icerikAdi'] = $myci->input->post('icerikAdi');
			$formArr['icerikOzet'] = $myci->input->post('icerikOzet');
			$formArr['icerikText'] = $myci->input->post('icerikText');
			$time = time();
			$formArr['tarih'] = mdate("%Y-%m-%d",time());
			$formArr['saat'] = mdate("%H:%i:%s",time());
		}
		if($formSelect == "icerikTextEdit"){
			$formArr['bolumID'] = $myci->input->post('newbolumID');
			$formArr['icerikID'] = $myci->input->post('icerikID'); // hidden 
			$formArr['icerikAdi'] = $myci->input->post('icerikAdi');
			$formArr['icerikOzet'] = $myci->input->post('icerikOzet');
			$formArr['icerikText'] = $myci->input->post('icerikText');
		}
		return $formArr;
	} // formGetPost close
	/**********************************************************************************************************************************************/
	// 2 boyutlu dizi ile formGet işlemi
	
	function formGetKategoriMultiEdit($kategoriIDArr){
		foreach ($kategoriIDArr as $kategoriID){
			$myci =& get_instance();
			//update verileri
			$kategoriAdi	= "kategoriAdi".$kategoriID;
			$order 			= "order".$kategoriID;
			$showStatus 	= "showStatus".$kategoriID;
			$kategoriUpdateObject['kategoriAdi']	= $myci->input->post($kategoriAdi);
			$kategoriUpdateObject['order']			= $myci->input->post($order);
			$kategoriUpdateObject['showStatus']		= $myci->input->post($showStatus);
			//sil verileri
			$kayitSil = "kayitSil".$kategoriID;
			$kategoriDeleteRow['kayitSil'] = $myci->input->post($kayitSil);
			// islem blogu: tablonun degistirilmek istenen satiri; silinecekse silinecek , silinmeyecekse, satir update yapilacak.
			$tableName = "kategori";
			$primaryKey = "kategoriID";
			$primarykeyValue = $kategoriID;
			if($kategoriDeleteRow['kayitSil'] == 1){
				//silme islemi
				$formGetKategoriMultiEditMesaj = $myci->standartdb_model->deleteRow($tableName,$primaryKey,$primarykeyValue);
			}else{
				//update islemi
				$formGetKategoriMultiEditMesaj = $myci->standartdb_model->updateTable($tableName,$kategoriUpdateObject,$primaryKey,$primarykeyValue);
			}
		}
		return $formGetKategoriMultiEditMesaj;
	}//close : formGetMulti
		function formGetBolumMultiEdit($bolumIDArr){
			$myci =& get_instance();
			foreach ($bolumIDArr as $bolumID){
				//update verileri
				$bolumAdi = "bolumAdi".$bolumID;
				$newKategoriID = "newKategoriID".$bolumID;
				$bolumOrder = "bolumOrder".$bolumID;
				$showStatus = "showStatus".$bolumID;
				$bolumUpdateArr['bolumAdi'] = $myci->input->post($bolumAdi);
				$bolumUpdateArr['kategoriID'] = $myci->input->post($newKategoriID);
				$bolumUpdateArr['bolumOrder'] = $myci->input->post($bolumOrder);
				$bolumUpdateArr['showStatus'] = $myci->input->post($showStatus);
				//sil verileri
				$kayitSil = "kayitSil".$bolumID;
				$bolumDeleteRow['kayitSil'] = $myci->input->post($kayitSil);
				// islem blogu: tablonun degistirilmek istenen satiri; silinecekse silinecek , silinmeyecekse, satir update yapilacak.
				$tableName = "bolum";
				$primaryKey = "bolumID";
				$primarykeyValue = $bolumID;
				if($bolumDeleteRow['kayitSil'] == 1){
					//silme islemi
					$formGetBolumMultiEditMesaj = $myci->standartdb_model->deleteRow($tableName,$primaryKey,$primarykeyValue);
				}else{
					//update islemi
					$formGetBolumMultiEditMesaj = $myci->standartdb_model->updateTable($tableName,$bolumUpdateArr,$primaryKey,$primarykeyValue);
				}
			}
		return $formGetBolumMultiEditMesaj;
	}//close : formGetKategoriMultiEdit
		function formGeticerikMultiEdit($icerikIDArr){
				$myci =& get_instance();
			foreach ($icerikIDArr as $icerikID){
				//update verileri
				$newBolumID 	= "newBolumID".$icerikID;
				$icerikAdi 		= "icerikAdi".$icerikID;
				$icerikOrder 	= "icerikOrder".$icerikID;
				$frontShow		= "frontShow".$icerikID;
				$showStatus 	= "showStatus".$icerikID;
				
				$icerikUpdateArr['bolumID'] 	= $myci->input->post($newBolumID);
				$icerikUpdateArr['icerikAdi'] 	= $myci->input->post($icerikAdi);
				$icerikUpdateArr['icerikOrder'] = $myci->input->post($icerikOrder);
				$icerikUpdateArr['frontShow'] 	= $myci->input->post($frontShow);
				$icerikUpdateArr['showStatus'] 	= $myci->input->post($showStatus);
				//sil verileri
				$kayitSil = "kayitSil".$icerikID;
				$icerikDeleteRow['kayitSil'] = $myci->input->post($kayitSil);
				// islem blogu: tablonun degistirilmek istenen satiri; silinecekse silinecek , silinmeyecekse, satir update yapilacak.
				$tableName = "icerik";
				$primaryKey = "icerikID";
				$primarykeyValue = $icerikID;
				if($icerikDeleteRow['kayitSil'] == 1){
					//silme islemi
					$formGeticerikMultiEditMesaj = $myci->standartdb_model->deleteRow($tableName,$primaryKey,$primarykeyValue);
				}else{
					//update islemi
					$formGeticerikMultiEditMesaj = $myci->standartdb_model->updateTable($tableName,$icerikUpdateArr,$primaryKey,$primarykeyValue);
				}
			}
		return $formGeticerikMultiEditMesaj;
	}//close : formGetKategoriMultiEdit
	/**********************************************************************************************************************************************/
?>