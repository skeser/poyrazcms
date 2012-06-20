</head>
<body>
<div class="container">
  <div class="page-header">
    	<h1>{$pageInfoArr.projectName}<small>{$pageInfoArr.version} -- {$pageInfoArr.projectSlogan}</small></h1>
  </div>
   <div class="page-header">
    	<h2>Log_LYS-Login Yonetim Sistemi Log Bilgileri</h2>
  </div>
	<table>
          <thead>
              <tr>
                  <th>actID</th>
                  <th>User Name</th>
                  <th>Action Name</th>
                  <th>Session</th>
                  <th>ip address</th>
                  <th>Tarih</th>
                  <th>Saat</th>
                  <th>log_lys_data</th>
              </tr>
          </thead>
              <tbody>
                  {foreach from = $loglysTableObj item = loglysTableObjRows}
                           <tr>
                                {foreach from = $loglysTableObjRows item = loglysTableObjRowsItems }
                                      <td>{$loglysTableObjRowsItems}</td>
                                {/foreach}
                          </tr>
                  {/foreach}
              </tbody>
      </table> 
          
  
