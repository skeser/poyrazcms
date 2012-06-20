<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="{$baseURL}">{$siteInfoArr.siteAdi}</a>
          <div class="nav-collapse">
           <ul class="nav">
           	 
           	 {if $bolumCount == 1}
             		{foreach from = $durum1MenuArr item = menuItem}
                      <li>{$menuItem.menuItem}</li>
                    {/foreach}
             	{else}
                	{foreach from = $durum2MenuArr item = menuItem}
                                 <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$menuItem.bolumAdi}<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            {$menuItem.itemLink}
                                	   </ul>
                           		  </li>                           
                     {/foreach}
             {/if}         
           </ul> <!-- /.ul -->
  
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div> 