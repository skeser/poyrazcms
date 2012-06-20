<?
//cron test
/*
Ne yapar ?
1- Terkedilmis oturumlari kapatir. kapatma zaman araligi --> deleteSessRows fonksiyonuna bakin.
2- Terkedilmis oturumlari kapatirken , kimin oturumunu kapattiysa bunu log_lys tablosuna yazar.
3- Her calistiginda, calisma bilgilerini "$BASEURL/application/logs/cron.txt" dosyasina yazar
Calismasi icin ; /etc/crontab' a asagidaki satirlar eklenmelidir.
##############
#skeser , pcms - lys_user - lys_sessions / logged_in - is_logged_in senkranizasyonu..
#
* * * * * arge php5 /home/arge/public_html/pcms/application/controllers/cron/cronJobClose_lys_user.php >> /home/arge/public_html/pcms/application/logs/cron.txt

*/
$servername	= "localhost";
$dbuser		= "pcms";
$dbpass		= "poyraz45";

$dbname 	= "pcms";

$time 	= date('d-m-Y  H:i:s',time());
$ad		= "sevketkeser";
$soyad 	= "zaman:".$time;
echo "$time--";
$mysqlConnector = 	mysql_connect("$servername","$dbuser","$dbpass") or die("veritabanına  bağlanılamıyor.."); //servername,dbuser,dbpass degiskelerinde problem var mysqle bağlanamıyorsunuz
$mysql_select	=	mysql_select_db("$dbname") or die("veritabanı seçilemiyor"); //veri tabanınızda böle bir veritabanı oluşturulmadığından veritabanı seçilemiyor

if($mysqlConnector){
	echo "db connection ok ! -- ";
if($mysql_select){
	echo "db select ok ! -- ";
	function deleteSessExpRows(){
		$time = time(); //simdiki zamani bul.
		$sess_exp_time = time() - (10*60); // oturum sonlanma zamani dk*sn 10*60
		
		$delSql		= 	"DELETE FROM lys_sessions where last_activity < '".$sess_exp_time."'";
		if(mysql_query($delSql)){
			$deleteSessExpRows	= TRUE;
		}else{
			$deleteSessExpRows	= FALSE;
		}
		return 	$deleteSessExpRows;
	}//close:func:deleteSessExpRows
	///////////////////////////////////////////////////////////////////////	///
	function loginStatusCheck(){
		$sql = "select user_data from lys_sessions where `user_data` != ''";
		$checkExResult		=	mysql_query($sql);
		$checkExResultCount =	mysql_num_rows ($checkExResult);
	   echo "lys_sessions count : $checkExResultCount --";
		if ($checkExResultCount == 0){
			$liveUsersIDArr = array();
		}else{
			$i = 0;
			//echo "lys_session kayit say: $checkExResultCount--$i";
			while ($i < $checkExResultCount)
			  { // ac - while 
			 	 $user_data = mysql_result($checkExResult,$i,"user_data");
				 
				 $user_dataArr = unserialize($user_data);
				 $liveUsersIDArr[] = $user_dataArr['userID'];		//echo "\n1-loginStatusCheck sorgu ok ! kayit say : ".$i;
				 $i++;												//echo "<h1>while</h1>";				
			  }//close:while
		}//close:countCheck
		return $liveUsersIDArr;
	}//close:func:loginStatusCheck
	///////////////////////////////////////////////////////////////////////
	/******************************************************************************************/
	// terkedilmis oturumlari corn'dan kapatan kod'un fonksiyonu
	/******************************************************************************************/
	 function logLYS($insertTableName,$insertArr){
	 //$logResult	= $this->standartdb_model->insertTable($insertTableName,$insertArr);
	 $logInsertSql	= "insert into log_lys 			(
	 												
													 userID,
													 sessionID,
													 actName,
													 ip,
													 actDate,
													 actTime,
													 log_lys_data
													) 
											 values 
													(
													 '".$insertArr['userID']."',
													 '".$insertArr['sessionID']."',
													 '".$insertArr['actName']."',
													 '".$insertArr['ip']."',
													 '".$insertArr['actDate']."',
													 '".$insertArr['actTime']."',
													 '".$insertArr['log_lys_data']."'
													)";
			$logInsertSqlExR = mysql_query($logInsertSql);
	 		return 	 $logInsertSqlExR;
		}//close:func:logLYS	
					
	// once sess_exp degerini asmis oturumlari temizliyoruz.
		$deleteResult =	deleteSessExpRows();
		if ($deleteResult){
			echo "over sess_exp rows delete ok ! -- ";			
		}else{
			echo "over sess_exp rows delete not ! --";			
		}
		
		$sql = "select userID,logged_in from lys_user";
		$checkExResult		=	mysql_query($sql);
		$checkExResultCount =	mysql_num_rows ($checkExResult);
		if ($checkExResultCount == 0){
			$userIDArr = array();
		}else{
			$liveUsersIDArr		=  loginStatusCheck();	//echo "\nloginStatusCheckReturn : $liveUsersIDArr\n";
			$updateTableName	= 'lys_user';
			$primaryKey			= 'userID';
			//$updateResult = "lys_user count : $checkExResultCount updated. -- ";
			$i = 0;
			$updatedCount = 0;
			$cronCount = 0;
			while ($i < $checkExResultCount)
			  { // ac - while 
			 	 $userID	 = mysql_result($checkExResult,$i,"userID");
				 $logged_in	 = mysql_result($checkExResult,$i,"logged_in");
				 if ($logged_in == 1 and !in_array($userID,$liveUsersIDArr)){
				 //if (in_array($userID,$liveUsersIDArr)){
//					 // kayit var ise
//					 $newlogged_in 	=	1;
//				 }else{
					 //kayit yok ise
					 $newlogged_in 	=	0;
					  //db update islemi.
						$updateSql		= "update lys_user SET logged_in = '".$newlogged_in."'where userID ='".$userID."'";
				 		$updateSqlExR 	= mysql_query($updateSql);
					   if ($updateSqlExR == false){
							$updateResult =  "update Err ! \n"."update '".$updateTableName."' SET logged_in = '".$newlogged_in."'where userID ='".$userID."'\n";
					   }
  					 $updatedCount++;			
					/******************************************************************************************/
					//	start -- terk edilmis oturumlar cron'dan kapatiliyor..
					/******************************************************************************************/
					
						  /*************************************************************************/ 
						   $insertTableName = "log_lys";
						   $insertArr['userID'] 		= $userID;
						   $insertArr['sessionID'] 		= "cron";
						   $insertArr['actName'] 		= "logOut";
						   $insertArr['ip'] 			= "127.0.0.1";
						   //$insertArr['ip'] 			= $_SERVER['REMOTE_ADDR']; 
						   $insertArr['actDate'] 		= date("Y-m-d",time());
						   $insertArr['actTime'] 		= date("H:i:s",time());
						   $insertArr['log_lys_data'] 	= "";
						   
							$logInsertSqlExR = logLYS($insertTableName,$insertArr);
							if($logInsertSqlExR == FALSE){
								 echo "logOut cron didn't work--";
							 }else{
								 //echo "logOut cron worked--";
								 $cronCount++;
							 }
					/******************************************************************************************/
					//	stop -- terk edilmis oturumlar cron'dan kapatiliyor..
					/******************************************************************************************/
				
				  }//close:if
			  	$i++;	//echo "\nlys_user table sorgu ok ! kayit say : ".$i;
			  }//close:while
			  $updateResult = "lys_user updated count :".$updatedCount."--"."cron work count :".$cronCount."--";
			  echo $updateResult;
		}//close:countCheck
////////////////////////////////////////////////////////////////////////////////
// test
///////////////////////////////////////////////////////////////////////////////
	
		$sql = "insert into test (ad,soyad) values ('".$ad."','".$soyad."')";
		$result = mysql_query($sql);
		if ($result){
			echo "db insert ok !";
		}else{
			echo "db insert not !";
		}
	}else{
			echo "db select not !";
	}
}else{
		echo "db connection not !";
}
echo "\n";
mysql_close($mysqlConnector);
?>