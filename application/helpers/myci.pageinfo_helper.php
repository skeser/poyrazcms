<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/*
	*	Controller temelli, sayfa bilgileri
	*/
	function pageInfo($pageSelect){
		$myci =& get_instance();

		$pageInfoArr['companyName']		=	"Poyraz Teknoloji";
		$pageInfoArr['projectName']		=	"Poyraz CMS";
		$pageInfoArr['title']			=	$pageInfoArr['projectName'];
		$pageInfoArr['version']			=	"v0.6-Demo";
		$pageInfoArr['pageName']		=	"pageName_null";
		$pageInfoArr['projectSlogan']	=	"Poyraz İçerik Yönetim Sistemi";
		$pageInfoArr['footer']			=	$pageInfoArr['projectName']."-".$pageInfoArr['version']."&copy;-".$pageInfoArr['companyName'];

		
		$pageInfoArr['cssFullPath']		=	base_url()."css/bootstrap/v2.0.2/css/bootstrap.css";
		$pageInfoArr['jsBootstrapDropDown']	=	base_url()."css/bootstrap/v2.0.2/js/bootstrap-dropdown.js";
		$pageInfoArr['jsBootstrapCollapse']	=	base_url()."css/bootstrap/v2.0.2/js/bootstrap-collapse.js";
		$pageInfoArr['jsBootstrapAlert']	=	base_url()."css/bootstrap/v2.0.2/js/bootstrap-alert.js";

		if($pageSelect == "login"){
			$pageInfoArr['pageName']		=	"Giriş Sayfası";
			$pageInfoArr['title']			=	$pageInfoArr['projectName']."-Giriş Sayfası";
		}//close:if:login
		
		if($pageSelect == "main"){
			$pageInfoArr['pageName']		=	"Ana Sayfa";
			$pageInfoArr['title']			=	$pageInfoArr['projectName']."-Ana Sayfa";
		}//close:if:main

		if($pageSelect == "sysInfo"){
			$pageInfoArr['pageName']		=	"System Info";
			$pageInfoArr['title']			=	$pageInfoArr['projectName']."-System Info";
		}//close:if:sysInfo

		if($pageSelect == "user"){
			$pageInfoArr['pageName']		=	"Kullanıcı İşlemleri";
			$pageInfoArr['title']			=	$pageInfoArr['projectName']."-Kullanıcı İşlemleri";
		}//close:if:sysInfo
		
		if($pageSelect == "yonet"){
			$pageInfoArr['pageName']		=	"Yönetim Paneli";
			$pageInfoArr['title']			=	$pageInfoArr['projectName']."- Yönetim Paneli";
		}//close:if:login
		return $pageInfoArr;
	} // formGetPost close
?>