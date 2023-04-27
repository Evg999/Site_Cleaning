<style>
/* demo background */
body{
background: white;

}
.nav-item{
    color: black;
}

.navbar-brand {
    font-size: 12px;
}
/* demo menu */
nav.navbar.bootsnav{
border: none;
background: none;
margin: 25px 0px;
z-index: 3 !important;
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: 25px;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

nav.navbar.bootsnav ul.nav > li{
margin-right: 0px;
}
nav.navbar.bootsnav ul.nav > li:before{
content: attr(alt);
padding: 15px;
font-size: 14px;
font-weight: 600;
color: black;
opacity: 0;
overflow: hidden;
position: absolute;

left: 0;
transform: scale(1.2);
transition: all 0.3s ease 0s;
}
nav.navbar.bootsnav ul.nav > li:hover:before{
transform: scale(1);
opacity: 1;
}
nav.navbar.bootsnav ul.nav > li > a{
padding: 15px;
margin: 0;
color: #787b95;
text-transform: uppercase;
z-index: 1;
transition: all 0.5s ease 0s;
}
nav.navbar.bootsnav ul.nav > li.dropdown > a{
padding: 15px 30px 15px 15px;
}
nav.navbar.bootsnav ul.nav > li > a:hover,
nav.navbar.bootsnav ul.nav > li.on > a{ color: black; }
nav.navbar.bootsnav ul.nav > li.dropdown > a.dropdown-toggle:after{
position: absolute;
margin: 0 0 0 7px;
}
nav.navbar.bootsnav ul.nav > li.dropdown > ul{
top: 120%;
transition: all 0.8s ease 0s;
}
nav.navbar.bootsnav ul.nav > li.dropdown.on > ul{
top: 100%;
}
.dropdown-menu.multi-dropdown{
position: absolute;
left: -100% !important;
}
nav.navbar.bootsnav li.dropdown ul.dropdown-menu{
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
border: none;

}
@media only screen and (max-width:990px){
.dropdown-menu.multi-dropdown{ left: 0 !important; }
nav.navbar.bootsnav .navbar-toggle{
background: none;
color: black;
}
nav.navbar.bootsnav ul.nav > li{
margin-right: 0;
}
nav.navbar.bootsnav ul.nav > li:before{
width: 100%;
font-weight: normal;
color: #555;
}
nav.navbar.bootsnav ul.nav > li > a{
color: #333 !important;
border-top: none;
}
nav.navbar.bootsnav ul.nav > li > a:hover{
color: #333;
}
nav.navbar.bootsnav ul.nav > li.dropdown > ul{ top: 100%; }
}
nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover,
    nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li a:hover{
        background-color: #0e0f0f59;
    }
</style>



 <nav class=" navbar navbar-default navbar-mobile bootsnav  align-items-center" style="z-index: 3;">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo "https://gosclean.ru";?>">
            <img class="br" src="/img/logo.png" width="200" height="50" alt="ГОСКЛИН" loading="lazy">
        </a>
        <a class="navbar-brand part" href="/index.php">Клининговая компания</a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                <!-- <li alt="HOME"><a href="#">Home</a></li>-->
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page=="home") {echo "active"; }?>" href="<?php echo "https://gosclean.ru";?>">Главная</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if ($current_page=="catalog") {echo "active"; }?>" href="<?php echo "https://gosclean.ru";?>/catalog">Каталог</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Услуги и цены</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="<?php echo "https://gosclean.ru";?>/uborka_kvartir" class="dropdown-toggle" data-toggle="dropdown" >Уборка квартир</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo "https://gosclean.ru";?>/podderzhivayushchaya_uborka_kvartir">Поддерживающая уборка квартир</a></li>
                                <li><a href="<?php echo "https://gosclean.ru";?>/generalnaya_uborka_kvartir">Генеральная уборка квартир</a></li>
                                <li><a href="<?php echo "https://gosclean.ru";?>/uborka_kvartir_posle_remonta">Уборка квартир после ремонта</a></li>
                                <li><a href="<?php echo "https://gosclean.ru";?>/kompleksnaya_uborka_kvartir">Комплексная уборка квартир</a></li>
                                <li><a href="<?php echo "https://gosclean.ru";?>/uborka_odnokomnatnoj_kvartiry">Уборка однокомнотной квартиры</a></li>
                                <li><a href="<?php echo "https://gosclean.ru";?>/uborka_dvuhkomnatnoj_kvartiry">Уборка двухкомнотной квартиры</a></li>
                                <li><a href="<?php echo "https://gosclean.ru";?>/uborka_trekhkomnatnoj_kvartiry">Уборка трехкомнатной квартиры</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="<?php echo "https://gosclean.ru";?>/uborka_kottedzhej_i_domov" class="dropdown-toggle" data-toggle="dropdown" >Уборка коттеджей и Домов</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo "https://gosclean.ru";?>/generalnaya_uborka_kottedzhej">Генеральная уборка коттеджей</a></li>
                                
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="<?php echo "https://gosclean.ru";?>/uborka_posle_remonta" class="dropdown-toggle" data-toggle="dropdown" >Уборка после ремонта</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo "https://gosclean.ru";?>/uborka_kvartir_posle_remonta">Уборка квартир после ремонта</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                    <ul class="dropdown-menu multi-dropdown">
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Custom Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo "https://gosclean.ru";?>/uborka_ofisov">Уборка офисов</a></li>
                        <li><a href="<?php echo "https://gosclean.ru";?>/mojka_okon_i_lodzhiij">Мойка окон и лоджий</a></li>
                        <li><a href="<?php echo "https://gosclean.ru";?>/uborka_pomeshcheni">Уборка помещений</a></li>
                        <li><a href="<?php echo "https://gosclean.ru";?>/himchistka">Химчистка</a></li>
                        
                        <li class="dropdown">
                            <a href="<?php echo "https://gosclean.ru";?>/kompleksnaya_uborka" class="dropdown-toggle" data-toggle="dropdown" >Комплексная уборка</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo "https://gosclean.ru";?>/kompleksnaya_uborka_kvartir">Комплексная уборка квартир</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo "https://gosclean.ru";?>/podderzhivayushchaya_uborka" class="dropdown-toggle" data-toggle="dropdown" >Поддерживающая уборка</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo "https://gosclean.ru";?>/podderzhivayushchaya_uborka_kvartir">Поддерживающая уборка квартир</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo "https://gosclean.ru";?>/generalnaya_uborka" class="dropdown-toggle" data-toggle="dropdown" >Генеральная уборка</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo "https://gosclean.ru";?>/generalnaya_uborka_kvartir">Генеральная уборка квартир</a></li>
                                <li><a href="<?php echo "https://gosclean.ru";?>/generalnaya_uborka_kottedzhej">Генеральная уборка коттеджей</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </li>
                <!--<li class="dropdown" alt="PAGES">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Custom Menu</a></li>
                                <li><a href="#">Custom Menu</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                                    <ul class="dropdown-menu multi-dropdown">
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                        <li><a href="#">Custom Menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Custom Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                    </ul>
                </li>-->
                <!--<li alt="PORTFOLIO"><a href="#">Portfolio</a></li>-->
                <li class="nav-item ">
                    <a class="nav-link <?php if ($current_page=="about") {echo "active"; }?>" href="<?php echo "https://gosclean.ru";?>/about">Контакты</a>
                </li>
                <div class="flex-box header-user">
                    <div class="flex-box align-items-center margin-left-30 ">
                        <div class="header-account header-icon"></div>
                        <!-- удалил прежний код от личного кабинета  -->

                        <a class="tel right-10"  href="tel:89777133452" style=""><strong>8(495) 378-12-73</strong></a>
                        <a class="tel ones" href="tel:89777133452" style=""><strong>8(977) 713-34-52</strong></a>

                    </div>
                </div>
            </ul>
        </div>
        <div class="buton butonm perehod">Заказать уборку
            <span class="flare"></span>
        </div>
    </div>
 </nav>
