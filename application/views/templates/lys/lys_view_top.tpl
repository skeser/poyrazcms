</head>
<body>
		<div class="container">
        <div id="navbar-example" class="navbar navbar-fixed-top">
            <div class="navbar-inner">
              <div class="container" style="width: auto;">
                <a class="brand" href="#">{$pageInfoArr.projectName}</a>
                <ul class="nav">
                <li class="active">{$lysMenu.AnaSayfa}</li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kullanıcı İşlemleri <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                   	  <li>{$lysMenu.userEdit}</li>
                      <li>{$lysMenu.userAdd}</li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistem Bilgisi <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li>{$lysMenu.sysInfo}</li>
                      <li>{$lysMenu.sysLogs}</li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </li>
                </ul>
                 <p class="pull-right"> <font color="#FFFFFF">Hoşgeldin :{$lysMenu.uname}</font>|||||{$lysMenu.logout}</p>
              </div>
            </div>
          </div>
          <!-- /navbar-example -->