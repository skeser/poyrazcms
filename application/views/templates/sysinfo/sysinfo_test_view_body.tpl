<style>
#ajaxprint { color:red; }
#jsonprint { color:blue; }
</style>
</head>
<body>
<div class="container">
  <div class="page-header">
    	<h1>{$pageInfoArr.projectName}<small>{$pageInfoArr.version} -- {$pageInfoArr.projectSlogan}</small></h1>
  	 </div>
            <table width="803">
              <tr>
                <th width="419" scope="col">Veri</th>
                <th width="372" scope="col">Değer</th>
              </tr>
              <tr>
                <td>CI Version : </td>
                <td><b>{$CI_version}</b></td>
              </tr>
              <tr>
                <td>Smarty Version 	:</td>
                <td><b>{$smarty.version}</b></td>
              </tr>
              <tr>
                <td>Template Name 	: </td>
                <td><b>{$smarty.template}</b></td>
              </tr>
              <tr>
                <td>Smarty ile Zaman :</td>
                <td><b>{$smarty.now|date_format:"%d/%m/%Y - %H:%M:%S"}</b></td>
              </tr>
              <tr>
                <td>The value of global assigned variable $SCRIPT_NAME: </td>
                <td><b>{$SCRIPT_NAME}</b></td>
              </tr>
              <tr>
                <td>Example of accessing server environment variable SERVER_NAME: </td>
                <td><b>{$smarty.server.SERVER_NAME}</b></td>
              </tr>
              <tr>
                <td>Base URL :</td>
                <td><b>{$baseURL}</b></td>
              </tr>
            </table>
  <div class="page-header">
    <h2>Oturum Bilgileri</h2>
  </div>
      lastAct: {$lastAct}<p>
      lastAct2: {$lastAct2}<p>
      {foreach key = keys item = data from = $allSessionData}
                    <b>{$keys}</b>:{$data}<br />
      {/foreach}
  <div class="page-header">
    <h2>Session tablosu temelli Oturum Bilgileri</h2>
  </div>
       Su anda  <b>{$allConnCount}</b> adet oturum talebi var.Bunlardan <b>{$halfOpenConnCount}</b> tanesi yari acik. <b>{$establishedConnCount}</b> adedi acık. <br />
               Online Kullanicisayisi  :{$establishedConnCount}<br />
               Online Kullanicilar :
               {foreach from = $onlineUsers item = onlineUsersRows}
                        <span>{$onlineUsersRows.user_name}-</span>
                {/foreach}
                <br />
               Session tablosu:<br />
                 <table>
                    <thead>
                        <tr>
                            <th>session_id</th>
                            <th>ipadress</th>
                            <th>user_agent</th>
                            <th>last_activity</th>
                            <th>user_name</th>
                        </tr>
                    </thead>
                        <tbody>
                            {foreach from = $sessionsTableObjResult item = sessionRows}
                                     <tr>
                                          {foreach from = $sessionRows item = sessionRowsItems }
                                                <td>{$sessionRowsItems}</td>
                                          {/foreach}
                                    </tr>
                            {/foreach}
                        </tbody>
                </table>
  <div class="page-header">
    <h2>sess_expiration degerini asmis session table records</h2>
  </div>
  <table>
                    <thead>
                        <tr>
                            <th>session_id</th>
                            <th>ipadress</th>
                            <th>user_agent</th>
                            <th>last_activity</th>
                            <th>user_name</th>
                        </tr>
                    </thead>
                        <tbody>
                            {foreach from = $timeOutRecords item = timeOutRecordsRows}
                                     <tr>
                                          {foreach from = $timeOutRecordsRows item = timeOutRecordsRowsItems }
                                                <td>{$timeOutRecordsRowsItems}</td>
                                          {/foreach}
                                    </tr>
                            {/foreach}
                        </tbody>
                </table> 
  <div class="page-header">
    <h2>lys_session - lys_user user logged_in senkronizasyon</h2> 
  </div> 
  bu cron ile yapiliyor. 
  <div class="page-header">
    <h2>Resim Eklemek</h2>
  </div>
    
    	<img src="{$baseURL}images/linux.jpg" width="100" height="118">
  <h4>Smarty ile diziler - foreach ile.</h4>
        {foreach name = dizi_print key = i item = data from = $dizi}
            {$i}.Eleman : {$data}<br>
        {/foreach}
  <h4>Smarty ile diziler - section ile </h4>
        {section name = rakam loop = $dizi}
            {$dizi[rakam]}<br>
        {/section}
  <h4>Jquery</h4>
  <button id="btn" class="btn primary">Tıkla</button>
  <h2>Sönme Efektleri - .fadeIn()</h2>
  <hr />
        Butonlara  basin..<br />
        <input type="button" id="goster" name="btn" value="Goster - fadeIn()" />
        <input type="button" id="kapa" name="btn2" value="Gizle" />
        <br>        
        <img id="resim" src="{$baseURL}images/linux.jpg" ><br />
        <input type="button" id="fadeOut" name="btn3" value="Gizle - fadeOut()" /><br />
        <img id="resim2" src="{$baseURL}images/linux.jpg" ><br />
        <input type="button" id="fadeToggle" name="btn4" value="Gizle - Göster fadeToggle()" /><br />
        <img id="resim3" src="{$baseURL}images/linux.jpg" ><br />
        <input type="button" id="fadeTo" name="btn4" value="Seffaf yap -  fadeTo()" />
        <input type="button" id="fadeToBack" name="btn4" value="Geri Al -  fadeTo()" /><br />
      <img id="resim4" src="{$baseURL}images/linux.jpg" ><br />
  <h2>Standart Ajax uygulamasi</h2>
  <p>
    <label for="ajaxText"></label>
          <input type="text" name="ajaxText" id="ajaxText">
          <input type="submit" name="ajaxput" id="ajaxput" value="Ajax Gonder">
  Sonuç : <span id="ajaxprint"></span>
  <h2>JSON - Ajax Uygulamasi</h2>
        <input type="text" name="jsontext" id="jsontext">
        <input type="submit" name="jsonbutton" id="jsonbutton" value="JSon Gönder">
        Sonuç:<span id="jsonprint">...</span>
  <h2>Ajax - Textbox'dan cikildiğinda veri gonderme</h2>
        <input type="text" name="textout" id="textout">
        Sonuç:<span id="textoutprint">...</span>
   <h2>JSON - Textbox'dan cikildiğinda veri gonderme</h2>
        <input type="text" name="jsontextout" id="jsontextout">
        Sonuç:<span id="jsontextoutprint">...</span>
  <h2>Ajax - girilen deger icin db den repeated kontrolu</h2>
        <input type="text" name="testRepeat" id="testRepeat">
        Sonuç:<span id="testRepeatPrint">...</span>
  <h2>siradaki ?</h2>
  
