<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Yonet extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();	
		
		$this->smarty->assign('baseURL',base_url());
		
		$this->smarty->assign('lysMenu',lysMenu());
		$this->smarty->assign('yonetMenu',yonetMenu());
				
		$page = $this->uri->segment(3,0);
		$func = $this->uri->segment(2,0);
		$cont = $this->uri->segment(1,0);
		$title = "controller = $cont - function = $func - parametre = $page";
		
		
		$pageSelect = "yonet";
		$this->smarty->assign('pageInfoArr',pageInfo($pageSelect));	
		$this->smarty->assign('allSessionData',$this->session->all_userdata());

		$this->jquery_ext->add_script('$(".collapse").collapse()');
	}//close:construct
	/**********************************************************************************************************************/
	function index() {
		
		redirect('/yonet/siteinfo');	
		
	} //close:func:index
	/**********************************************************************************************************************/
	function siteinfo(){
		$islem = "first";
		$result		= NULL;
		$tableName 	= "siteinfo";
		$formSelect = $tableName;
		
		$siteInforecordResult = $this->standartdb_model->findTableCount($tableName);
				
		$attributes = array('class' => 'form-horizontal', 'id' => 'siteInfo');
		$this->smarty->assign("formpath",form_open('yonet/siteInfo',$attributes)); // butona basildiginda nereye gidecek ?
		
		$siteInfoButton = $this->input->post('siteInfoChange');
		if ($siteInforecordResult == 0){
			// veritabaninda kayit yok ise.
			if (!empty($siteInfoButton)){
				$islem		= "insert";
				$insertArr	= formGetPost($formSelect);
				$result 	= $this->standartdb_model->insertTable($tableName,$insertArr);
			}
		}else{
			// veritabaninda kayit var ise.
			$islem = "guncelle";
			if (!empty($siteInfoButton)){
				$islem		 =	"update";
				$updateArr	 = formGetPost($formSelect);
				$primaryKey  = "siteinfoID";
				$primarykeyValue = 0;
				$result = $this->standartdb_model->updateTable($tableName,$updateArr,$primaryKey,$primarykeyValue);
			}
		}
		$this->smarty->assign("recordResult",$this->standartdb_model->findTableCount($tableName));
		$this->smarty->assign('siteInfoArr',$this->yonet_model->getSiteInfo());
		$this->smarty->assign('messageArr',messagePacker($islem,$result,$tableName));
		
		$tempPath = "yonet/yonet_view_siteInfo.tpl";
		$this->template->yonetShow($tempPath);
	} //close:func:siteInfo
	/**********************************************************************************************************************/
	function firma(){
		$islem = "first";
		$result		= NULL;
		$tableName 	= "firma";
		$formSelect = $tableName;
		
		$firmaRecordResult = $this->standartdb_model->findTableCount($tableName);
		
		$attributes = array('class' => 'form-horizontal', 'id' => 'firma');
		$this->smarty->assign("formpath",form_open('yonet/firma',$attributes)); // butona basildiginda nereye gidecek ?
		
		$firmaChangeButton = $this->input->post('firmaChange');
		if ($firmaRecordResult == 0){
			// veritabaninda kayit yok ise.
			if (!empty($firmaChangeButton))
			{
				$islem		 = "insert";
				$insertArr 	 = formGetPost($formSelect);
				$result		 = $this->standartdb_model->insertTable($tableName,$insertArr);
			}	
		}else{
				// veritabaninda kayit var ise.
			$islem = "guncelle";
				if (!empty($firmaChangeButton))
				{
					$islem		 	 =	"update";
					$updateArr		 = formGetPost($formSelect);
					$primaryKey	 	 = "firmaID";
					$primarykeyValue = 0;
					$result			 = $this->standartdb_model->updateTable($tableName,$updateArr,$primaryKey,$primarykeyValue);
				}	
		}
		$this->smarty->assign("recordResult",$firmaRecordResult);		
		$this->smarty->assign('firmaArr',$this->yonet_model->getFirma());	
		
		$this->smarty->assign('messageArr',messagePacker($islem,$result,$tableName));
		
		$tempPath = "yonet/yonet_view_firma.tpl";
		$this->template->yonetShow($tempPath);
	} //close:func:firma
	/**********************************************************************************************************************/
	function kategori(){
		$islem = "first";
		$result		= NULL;
		$tableName 	= "kategori";
		$formSelect = $tableName;
		
		$kategoriRequest = $this->uri->segment(3,0);
		
		$attributes = array('class' => 'form-horizontal', 'id' => 'kategorinsert');
		$this->smarty->assign("formpathKategoriEkle",form_open('yonet/kategori/insert',$attributes)); // butona basildiginda nereye gidecek ?
		// kategori insert		
		$kategoriEkleChangeButton = $this->input->post('kategoriEkleChangeButton');
		if(!empty($kategoriEkleChangeButton) and $kategoriRequest == "insert"){
			$islem 		= "insert";
			$insertArr  = formGetPost($formSelect);
			$result		= $this->standartdb_model->insertTable($tableName,$insertArr);
		}
		
		// kategori update form
		$attributes = array('class' => 'form-horizontal', 'id' => 'kategoriedit');
		$this->smarty->assign("formpathKategoriUpdate",form_open('yonet/kategori/edit',$attributes)); // butona basildiginda nereye gidecek ?

		$kategoriUpdateRequest = $this->uri->segment(3,0);
		$kategoriEditChangeButton = $this->input->post('kategoriEditChangeButton');
		
		// select ile form dolduruluyor.u
			$kategoriTableAllResult = $this->yonet_model->getKategori();
			$this->smarty->assign('kategoriTableAllResult', $kategoriTableAllResult);
			
			$kategoriIDArr = $this->yonet_model->getKategoriID();			
			
		if(!empty($kategoriEditChangeButton) and $kategoriRequest == "edit"){
			// $kategoriEkleChangeButton basilmis ise, form --> db edit islemi yapiliyor.
			
			$this->smarty->assign('formGetKategoriMultiEditMesaj',formGetKategoriMultiEdit($kategoriIDArr));
			$this->smarty->assign('kategoriTableAllResult', $this->yonet_model->getKategori());
			
		}
		$kategoriRecordResult = $this->standartdb_model->findTableCount($tableName);
		$this->smarty->assign("recordResult",$kategoriRecordResult);
		$orderArr = "";
		for ($i=1; $i<=$kategoriRecordResult; $i++){
			$orderArr[$i] = $i;
		}
		$this->smarty->assign("orderArr",$orderArr);
		//$this->smarty->assign("userUpdateArr",$userUpdateArr);
		//$userArr = $this->yonet_model->getUser();
		
		
		
		$this->smarty->assign('messageArr',messagePacker($islem,$result,$tableName));
		
		$tempPath = "yonet/yonet_view_kategori.tpl";
		$this->template->yonetShow($tempPath);
		
	}	// kategori close
		function bolum(){
		/*
		*	bolum() fonksiyonu n e yapar ?
		*	yeni bolum ekleme işi
		*	-bolum ekle formunu doldur.
		*		-kategori bilgilerini  db --> kategori selectBox'ina doldur.
		*	-butona basildiginda form --> bolum tablosuna yaz.
		*	bolum duzenleme isi
		*	-bolumEdit formunu doldur.
		*/
		$tableName = "bolum";
		$formSelect = $tableName;
		
		$bolumResultMesaj = "Bu ekrani ilk defa aciyorsuz, aşağıdaki formu kullanarak kullanıcı işlemlerini yapabilirsiniz.";
		$this->smarty->assign('formGetBolumMultiEditMesaj',"Aşağıdaki formu kullanarak değişiklikleri yapıp butona tıklayın.");
		
		
		$page = $this->uri->segment(2,0);
		
		$attributes = array('class' => 'form-horizontal', 'id' => 'bolum');
		$this->smarty->assign("formpathBolumEkle",form_open('yonet/bolum',$attributes)); // butona basildiginda nereye gidecek ?
		
		// kategori tablosundan kategori select'i doluyor.
		$this->smarty->assign('kategoriTableObject',$this->yonet_model->getKategori());
		/***
		**	Bolum Insert
		***/
		$bolumEkleChangeButton = $this->input->post('bolumEkleChangeButton');
		if(!empty($bolumEkleChangeButton)){
			$insertArr = formGetPost($formSelect);
			$bolumResultMesaj = $this->standartdb_model->insertTable($tableName,$insertArr);
		}
		
		// bolum update form
		$attributes = array('class' => 'form-horizontal', 'id' => 'bolumEdit');
		$this->smarty->assign("formpathBolumUpdate",form_open('yonet/bolum/bolumEdit',$attributes)); // butona basildiginda nereye gidecek ?
		
		$bolumUpdateStatus = $this->uri->segment(3,0);
		$bolumEditChangeButton = $this->input->post('bolumEditChangeButton');
		
		
		// select ile form dolduruluyor.
			$bolumTableObject = $this->yonet_model->getBolum();
			$this->smarty->assign('bolumTableObject', $bolumTableObject);
			
			$bolumIDArr = $this->yonet_model->getbolumID();			
			
		if(!empty($bolumEditChangeButton) and $bolumUpdateStatus == "bolumEdit"){
			// $bolumEkleChangeButton basilmis ise, form --> db edit islemi yapiliyor.
			
			$this->smarty->assign('formGetBolumMultiEditMesaj',formGetBolumMultiEdit($bolumIDArr));
			// guncelleme sonrasi bolumEdit alani tekrar dolduruluyor.
			$this->smarty->assign('bolumTableObject', $bolumTableObject = $this->yonet_model->getBolum());
			
		}
		$bolumRecordResult = $this->standartdb_model->findTableCount($tableName);
		$this->smarty->assign("recordResult",$bolumRecordResult);
		$bolumKayitSay = "";
		for ($i=1; $i<=$bolumRecordResult; $i++){
			$bolumKayitSay[$i] = $i;
		}
		$this->smarty->assign("bolumKayitSay",$bolumKayitSay);
				
		$this->smarty->assign('bolumResultMesaj', $bolumResultMesaj);
		
		$tempPath = "yonet/yonet_view_bolum.tpl";
		$this->template->yonetShow($tempPath);
		
	}	// bolum close
	function icerikEkle(){
		/*
		*	icerikEkle() fonksiyonu ne yapar ?
		*	yeni icerik eklme isi
		*	-icerikEkle ekle formunu doldur.
		*		-kategori bilgilerini  db --> kategori selectBox'ina doldur. *ikinci asamada yapilacak
		*		-secilen kategoriID'sine gore bolum bilgilerini  db --> bolum selectBox'ina doldur.
		*	-butona basildiginda form --> icerik tablosuna yaz.
		*/
		$tableName = "icerik";
		$formSelect = "icerikEkle";
		
		$icerikEkleResultMesaj = "Bu ekrani ilk defa aciyorsuz, aşağıdaki formu kullanarak kullanıcı işlemlerini yapabilirsiniz.";
		
		$tempPath = "icerikEkle";
		$page = $this->uri->segment(2,0);
		
		$attributes = array('class' => 'form-horizontal', 'id' => 'icerikEkle');
		$this->smarty->assign("icerikEkleFormPath",form_open('yonet/icerikEkle',$attributes)); // butona basildiginda nereye gidecek ?

		// bolum tablosundan bolum select'i doluyor.
		$this->smarty->assign('bolumTableObject',$this->yonet_model->getBolum());
		/***
		**	Bolum Insert
		***/
		$icerikEkleChangeButton = $this->input->post('icerikEkleChangeButton');
		if(!empty($icerikEkleChangeButton)){
			$insertArr = formGetPost($formSelect);
			$icerikEkleResultMesaj = $this->standartdb_model->insertTable($tableName,$insertArr);
		}		
		$icerikRecordResult = $this->standartdb_model->findTableCount($tableName);
		$this->smarty->assign("recordResult",$icerikRecordResult);
		$this->smarty->assign('icerikEkleResultMesaj', $icerikEkleResultMesaj);
		
		$tempPath = "yonet/yonet_view_icerikEkle.tpl";
		$this->template->yonetShow($tempPath);
	}//close:  icerikEkle()
	function icerikEdit(){
		/*
		*	icerikEdit() fonksiyonu ne yapar ?
		*	***Duzenleme isi
		*	-Bolum bilgisi degistirilebilir.
		*	-İçerik adi degistirilebiliri.
		*	-icerigin bolum bazida sire bilgisi degistirilebilir.
		*	-yayin durumu degistirilebilir.
		*	***Silme islemi
		*	-secilen icerik silinebilir.
		*	*****************************
		*	Algoritma
		*	*****************************						
		*	***icerikEdit formunu doldur.
		*	-db --> from ; kategori,bolum ve icerik tablolarindan order by , kategoriID, bolumID, icerikID degerleri baz alinarak form dolduruluyor.		
		*	-kategori Adi , Bolum Adlari icerik adi sira bilgisi yayin bilgisi ve sil bilgisi..
		*	***butona basildiğinda form --> icerik tablosuna yaz.
		*/
		$tableName = "icerik";
		$formSelect = "icerikEdit";
		
		$icerikEditResultMesaj = "Bu ekrani ilk defa aciyorsuz, aşağıdaki formu kullanarak kullanıcı işlemlerini yapabilirsiniz.";
		
		$tempPath = "yonet/yonet_view_icerikEdit.tpl";
		
		$page = $this->uri->segment(2,0);
		$textEditRequesticerikID = $this->uri->segment(3,0);
		/************* icerikTextEditRequest Check **************************************************************/
		if (!empty($textEditRequesticerikID)){
				// icerikTextEditRequest var ise..
				$tempPath = "icerikTextEdit";
				// form
				//-> form hazirlaniyor.
				$attributes = array('class' => 'form-horizontal', 'id' => 'icerikEdit');
				$this->smarty->assign("icerikTextEditFormPath",form_open('yonet/icerikEdit',$attributes)); // butona basildiginda nereye gidecek ?
				
				$this->smarty->assign('bolumTableObject',$this->yonet_model->getBolum());
				//form doldu.
				$this->smarty->assign('icerikTextArr',$this->yonet_model->getIcerikText($textEditRequesticerikID));
				$this->smarty->assign('icerikTextEditResultMesaj',"Değişiklik yaptıktan sonra İşlem Yap butonuna tıklayın.");		
				
				$tempPath = "yonet/yonet_view_icerikTextEdit.tpl";
				//$this->smarty->display('yonet/yonet_view_'.$tempPath.'.tpl');
				
		}else{
				// icerikTextEditRequest yok ise..
				// once icerikTextEditChangeButton bakiliyor, var ise; form --> db islemi yapiliyor.
				$icerikTextEditChangeButton = $this->input->post('icerikTextEditChangeButton');
				if (!empty($icerikTextEditChangeButton)){
					// icerikTextEditChangeButton basilmissa
					/*********************************
					1-formdan gelen verileri al.
					2-db'ye bas, 
					3-db'den oku,
					4-forma geri doldur.
					**********************************/

					$tempPath = "yonet/yonet_view_icerikTextEdit.tpl";
					$formSelect = "icerikTextEdit";
					
					$updateArr = formGetPost($formSelect);
					$primaryKey = "icerikID";
					$primarykeyValue = $updateArr['icerikID'];
					
					$this->smarty->assign('icerikTextEditResultMesaj',$this->standartdb_model->updateTable($tableName,$updateArr,$primaryKey,$primarykeyValue));
					
					$attributes = array('class' => 'form-horizontal', 'id' => 'icerikEdit');
					$this->smarty->assign("icerikTextEditFormPath",form_open('yonet/icerikEdit',$attributes)); // butona basildiginda nereye gidecek ?
					
					$this->smarty->assign('bolumTableObject',$this->yonet_model->getBolum());
					
					$this->smarty->assign('icerikTextArr',$this->yonet_model->getIcerikText($primarykeyValue));

					$tempPath = "yonet/yonet_view_icerikTextEdit.tpl";

				}else{
					// icerikTextEditChangeButton basilmamissa			
						$attributes = array('class' => 'form-horizontal', 'id' => 'icerikEdit');
						$this->smarty->assign("icerikEditFormPath",form_open('yonet/icerikEdit',$attributes)); // butona basildiginda nereye gidecek ?
						// bolum tablosundan bolum select'i doluyor.
						$this->smarty->assign('bolumTableObject',$this->yonet_model->getBolum());
						$this->smarty->assign('icerikTableObjectMultiTable',$this->yonet_model->getIcerikMultiTable());
						/***
						**	icerik Sirala
						***/
						$icerikEditChangeButton = $this->input->post('icerikEditChangeButton');
						if(!empty($icerikEditChangeButton)){
							// $icerikEkleChangeButton basilmis ise, form --> db edit islemi yapiliyor.
							$icerikIDArr = $this->yonet_model->geticerikID();
							$this->smarty->assign('formGeticerikMultiEditMesaj',formGeticerikMultiEdit($icerikIDArr));
							// guncelleme sonrasi icerikEdit alani tekrar dolduruluyor.
							$this->smarty->assign('bolumTableObject',$this->yonet_model->getBolum());
							$this->smarty->assign('icerikTableObjectMultiTable',$this->yonet_model->getIcerikMultiTable());
						}		
						$icerikRecordResult = $this->standartdb_model->findTableCount($tableName);
						$this->smarty->assign("recordResult",$icerikRecordResult);
							$icerikKayitSay = "";
							for ($i=1; $i<=$icerikRecordResult; $i++){
								$icerikKayitSay[$i] = $i;
							}
						$this->smarty->assign("icerikKayitSay",$icerikKayitSay);
						
						$this->smarty->assign("recordResult",$icerikRecordResult);
						$this->smarty->assign('icerikEditResultMesaj', $icerikEditResultMesaj);
						
						//$this->smarty->display('yonet/yonet_view_'.$tempPath.'.tpl');
				} //icerikTextEditChangeButton kapa
			
		} // // icerikTextEditRequest kapa.
		$this->template->yonetShow($tempPath);
		//$this->smarty->display('yonet/yonet_view_Footer.tpl');
	}//close:  icerikEdit()
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');//Burada oturumdan is_logged_in değerini çekiyoruz. Eğer true dönerse bir kullanıcı giriş yapmış demektir.
 
		if(!isset($is_logged_in) || $is_logged_in != true)//is_logged_in set edilmiş mi ve set edildi ise değeri true mu? Cevabımız evet ise bu fonksiyon bir problem çıkarmıyor ve yolumuza devam edip sayfamıza erişiyoruz.
		{
			//echo 'Bu sayfaya erisim yetkiniz yok !! Olimcak isler bunlar buyrun burdan --> <a href="login">Giris</a>';//Aksi halde erişim yok uyarısı verip,
			$panelLink = anchor('login', 'Yonetim Paneli', 'title="Yonetim Paneli / Oturum Ac"');
			$this->smarty->assign('panelLink',$panelLink);
			$this->smarty->display('lys/logout.tpl');
			die();//işlemi durduruyoruz.
		}
	}//close:is_logged_in
	
} //Yonet class close

/* End of file yonet.php */
/* Location: ./application/controllers/yonet.php */
?>