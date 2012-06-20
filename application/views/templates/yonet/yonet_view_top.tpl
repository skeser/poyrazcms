</head>
<body style="padding-top:50px;">
<!--<div class="container">-->
    <div id="navbar-yonet" class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container"  style="width: 1320px;">
          	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">{$pageInfoArr.projectName}</a>
          <div class="nav-collapse">  
            <ul class="nav">
            <li class="active">{$yonetMenu.YonetAnaSayfa}</li>
              <!--Start Dropdrown Menu-->
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Site Bilgileri <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>{$yonetMenu.siteinfo}</li>
                  <li>{$yonetMenu.firma}</li>
                </ul>
              </li>
              <!--Stop Dropdrown Menu-->
              <!--Start Dropdrown Menu-->
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori & Bölüm <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>{$yonetMenu.kategori}</li>
                  <li>{$yonetMenu.bolum}</li>
                </ul>
              </li>
              <!--Start Dropdrown Menu-->
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">İçerik İşlemleri <b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li>{$yonetMenu.icerikEkle}</li>
                 <li>{$yonetMenu.icerikEdit}</li>
                </ul>
              </li>
              <!--Stop Dropdrown Menu-->
              <!--Start Dropdrown Menu-->
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ziyaretçi Defteri <b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li>{$yonetMenu.defter}</li>
                </ul>
              </li>
              <!--Stop Dropdrown Menu-->
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
              <li>{$yonetMenu.siteAnaSayfa}</li>            
            </ul>
            <ul class="nav pull-right">
              <li>{$lysMenu.uname}</li>
              <li>{$lysMenu.logout}</li>
            </ul>
           </div>  <!--collapse-->
          </div> <!--container-->
        </div> <!--innet-->
      </div>
      <!-- /navbar-example -->