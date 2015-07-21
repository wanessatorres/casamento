
<header class="header fixed-top clearfix" style = "height:105px">
<!--logo start-->
    <div class="brand">

        <a href="/home">
			<img src = "images/noivos/1/home/foto_home.jpg">      
        </a>
        <!--<div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>-->
    </div>
<!--logo end-->

<div class="nav notify-row" id="top_menu" style = "margin-left:0px;margin-top:0px">
    <!--  notification start -->
    <ul class="nav top-menu">
		<?php
			foreach($menu as $men){ ?>
		<li class = "menu_superior">
		
			<i class = "fa fa-diamond" style = "font-size:45px"></i>
		</li>
		<?php }?>
		
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
            <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <!--<img alt="" src="0" style = "width:45px;height:45px">-->
                <span class="username">Teste</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="home.php?pagina_externa=configuracoes"><i class="fa fa-cog"></i> Configurações</a></li>
                    <li><a href="home.php?pagina_externa=noivos"><i class = "fa fa-heart"></i>Noivos</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Sair</a></li>
            </ul>
        </li>
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
         
      
            
                
            
        </li>
        
        <!-- user login dropdown end -->
        
    </ul>
    <!--search & user info end-->
</div>
</header>