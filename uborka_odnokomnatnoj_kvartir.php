<?php
     
    // задаём название для формы отправки скрытоо поля
    $current_page = 'uborka_odnokomnatnoj_kvartiry';
    $type_id =  '1';
   
    // КАРТОЧКА
  // подключаемся(набор настроек) к БД с помощью $_SERVER['DOCUMENT_ROOT']. уневерсальные метод для поиска
  include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
  // автоподключение всех класов
  include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');

  include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');
?>
<head>
    <title>Уборка квартир в Москве и МО</title>
    <link rel="canonical" href="https://gosclean.ru/uborka_odnokomnatnoj_kvartiry">
    
     <meta name="description" content="Генеральная уборка однокомнотной квартиры, уборка однокомнотной квартиры после ремонта, или поддерживающая уборка однокомнотной квартир – одни из наиболее востребованных клининговых услуг. Заказав уборку квартиры в клининговой компании Вы можете освободить свое время от ненужных забот, клинеры все сделают за Вас!">
</head>
<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/components/header/index.php');


   // подключаемся проверяем название страницы и выводим данные из бд
    $connect = new Connect();
    $result = mysqli_query($connect->getConnection(), "SELECT* FROM `core_goods` WHERE `current_page`='$current_page' ");
    $info = mysqli_fetch_array($result);

//    подключаемся и передаём перелинковку c условием реализация в link/index.php
    $results = (new Link())->getElements();
    $res = mysqli_query($connect->getConnection(), "SELECT* FROM `core_goods` WHERE `type_id`='$type_id' ");
  
    

// // узнаём категорию
//         $category = new Category($good->getField('category_id'));// подключаем Category Класс  прокидываем ГЕТ
//         $cat_name = $category->getField('title'); //и такое же будем имя по тайтлу Мужчина Детям или Женщинам
// // узнаём тип
//         $type =  new Type($good->getField('type_id'));
//         $type_name = $type->getField('title');

?>

<!-- ХЛЕБНЫЕ КРОШКИ  удалены-->




   


<div class="wrapper1">
    

    <div class="flex-box">
        <div class="card ">
            <img  class="item-photo-card " src="<?= $info ['photo'];?>" alt="">
            <div class="abso title center-block">

                <h1 class="title-center m-8">
                   
                    <?= $info ['title'];?> <!-- автаматически из бд -->
                </h1>
              
                
                <p class="title-suptitle"><?= $info ['description'];?></p><!-- автаматически из бд -->
                <a class="link perehod" href="#">Заказать уборку</a>
            </div>
        </div>
    </div>
    <div class="main wrapper-900 text-align-center">
    
        <h2 class="text-i padding-10 "><?= $info ['title2'];?></h2><!-- автаматически из бд -->
        <div class="padding-10 pb-20">
            <p>
                <a href="">Генеральная уборка квартир</a>,<a href="">уборка квартиры после ремонта </a>или<a href="https://gosclean.ru/podderzhivayushchaya_uborka"> поддерживающая 
                уборка квартир</a> – одни из наиболее востребованных клининговых услуг. 
                Заказав уборку квартиры в клининговой компании, 
                Вы можете освободить свое время от ненужных забот, клинеры все сделают за Вас!
            </p>
            <p>
                Наша клининговая компания Госклин, выполняет уборку помещений, квартир, домов,
                коттеджей в Москве и Московской области, качественно и по доступным ценам. На нашем счету уже более 250 000 уборок!
            </p>
            <p>
                Профессиональная и качественная уборка квартир, выполняется благодаря нашим опытным клинерам, 
                профессиональному оборудованию и специально подобранным профессиональным моющим средствам.
            </p>
        </div>
        <p class="price tit">Наши цены</p>
        <div class="containera">
            <table class="box735" style="width: 900px; border=0; align=center;">
            
                
                <!-- <colgroup span="3" style="background-color: darkseagreen;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="3" style="background-color: #f5ff00;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="2" style="background-color: #25e2b6;border: 2px solid #08892f;"></colgroup> -->
                
                <tr>
                    <td rowspan="2" class="f"> Уборка квартиры </td>
                    <td rowspan="2" class="f">Поддерживающая уборка</td>
                    <td rowspan="2" class="f">Генеральная уборка</td>
                    <td rowspan="2" class="f">Комплексная уборка</td>
                    <th colspan="2" class="f first">Уборка после ремонта</th>
                    
                </tr>
                <tr>
                    <td class="first">Без мебели</td>
                    <td class="first">С мебелью</td>
                </tr>
                <tr>
                    <td>1-комнатная квартира<br>( до 40 м2)</td>
                    <td>2450 руб.</td>
                    <td>4100 руб.</td>
                    <td>8600 руб.</td>
                    <td>5300 руб.</td>
                    <td>7300 руб.</td>
                </tr>
                
            </table>
        </div>
        <div class="attention">
            <p>В стоимость уборки входит уборка 1 санузла, каждый дополнительный от 1 200 руб.</p>
            <p>
                Мойка окон не входит в уборку и рассчитывается отдельно. 
                Для этого выберите дополнительную услугу <a href="https://gosclean.ru/mojka_okon_i_lodzhiij">мойка окон и лоджий.</a>
            </p>
            <p>
                Доставка оборудования в пределах МКАД 1 000р, за МКАД 1 500р. 
                Доставка оборудования входит в <a href="https://gosclean.ru/kompleksnaya_uborka">комплексную уборку.</a> 
            </p>
            <p>
                Стоимость уборки применима к помещениям c средней степенью загрязнённости. 
                При сильной степени загрязненности стоимость может увеличиться.
            </p>
            <p>
                Минимальная сумма заказа с выездом за пределы Москвы 4 000 руб.
            </p>
        </div>
        
        <!-- корзина,    реализуем кнопку получим айди запишим ID выбранного товара и отправляем его фаел(обработчик) который будет класть его в карзину-->
        <!-- onclick = "toBasket()" вешиваем -->
        <!-- <div onclick="toBasket()" class="margin-40 btn-10-30-orange">добавить в корзину</div> -->
        <div class="flex-box">
            <div class="margin-40 btn-10-30-orange perehod">Заказать уборку</div>
            <div id="mainhead" class="mainhead margin-40 btn-10-30-orange ">Что входит в услугу</div>
        </div>
        <div class="texts">
            <p class="price tit">Перечень работ</p>
            <div class="containera">
                <table class="box736" style="width: 100%; border=0; align=center">
                    <tbody>
                        <tr>
                            <td class="f">Общие работы:</td>
                            <td style="text-align: center;"class="f">Поддерживающая уборка</td>
                            <td style="text-align: center;"class="f">Генеральная уборка</td>
                            <td style="text-align: center;"class="f">Комплексная уборка</td>
                            <td style="text-align: center;"class="f">Уборка после ремонта</td>
                        </tr>
                        <tr>
                            <td><span>Удаление пыли и грязи со всех доступных мест(полки, подоконники, радиаторы…)</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Удаление пыли с бытовой техники ( телевизоры, компьютеры…)</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Cухая уборка пылесосом</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Влажная уборка полов и плинтусов</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытьё зеркал и стеклянных поверхностей</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Удаление пыли с осветительных приборов ( кроме габаритных, хрустальных люстр)</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Обеспыливание стен и потолков</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Стирка, глажка и навеска штор</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"></td>
                        </tr>
                        <tr>
                            <td><span>Стирка, глажка и навеска штор</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"></td>
                        </tr>
                        <tr>
                            <td><span>Замена постельного белья</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"></td>
                        </tr>
                        <tr>
                            <td><span>Мытье дверных блоков, включая фурнитуру</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Удаление пыли с розеток и выключателей</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td class="f">Кухня:</td>
                            <td style="text-align: center;"class="f">Поддерживающая уборка</td>
                            <td style="text-align: center;"class="f">Генеральная уборка</td>
                            <td style="text-align: center;"class="f">Комплексная уборка</td>
                            <td style="text-align: center;"class="f">Уборка после ремонта</td>
                        </tr>
                        <tr>
                            <td><span>Мытьё кухонной плиты, удаление следов жира</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Очистка кухонных рабочих поверхностей</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытьё стеновой панели (фартук), кухонного гарнитура, удаление следов жира</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Чистка и дезинфекция сантехники</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Удаление пыли с антресолей кухонного гарнитура</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытьё холодильника, духовой и микроволновой печи снаружи</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытье внутренних поверхностей кухонного гарнитура (шкафчики, ящики и т.д., если они освобождены)</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытьё духовой и микроволновой печи внутри</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытье мусорных корзин</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Вынос мусора, замена полиэтиленовых пакетов в мусорных корзинах ( мусор не габаритный)</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытьё холодильника внутри, размораживание</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытье грязной посуды (1 раковина)</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td class="f">Санузел:</td>
                            <td style="text-align: center;"class="f">Поддерживающая уборка</td>
                            <td style="text-align: center;" class="f">Генеральная уборка</td>
                            <td style="text-align: center;" class="f">Комплексная уборка</td>
                            <td style="text-align: center;" class="f">Уборка после ремонта</td>
                        </tr>
                        <tr>
                            <td><span>Чистка и дезинфекция сантехники (смесители, раковины, унитазы, биде)</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытьё кафельной плитки локально (где имеются загрязнения)</span></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытьё кафельной плитки от потолка до пола</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Мытьё душевых кабин и ванн</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Удаление пыли с антресолей кухонного гарнитура</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"></td>
                        </tr>
                        <tr>
                            <td><span>Удаление налёта и водного камня</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                        </tr>
                        <tr>
                            <td><span>Очистка швов паром в ванной комнате</span></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"></td>
                            <td style="text-align: center ;"><img class=down-arrow src="img/icon1.png" alt="стрелка"></td>
                            <td style="text-align: center ;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>    

        </div>
       
    </div> 
</div> 

<div class="wrapper1">
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/steps/index.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/fotogal/index.php');?>
</div>
<!-- accordion -->
<div class="wrapper1">
    <div class="faq" id="faq">
        <h2 class="t-c m-b-50">Вопросы и ответы</h2>
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Сколько времени займет уборка однокомнатной квартиры?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Время уборки зависит от степени загрязнения, сложности и площади квартиры.
                Например, поддерживающая уборка однокомнатной квартиры займет 2 часа, а генеральная уборка однокомнатной квартиры займет от 3 часов.
                Уборка квартиры после ремонта потребует ещё больше времени, от 4 часов.
            </div>
        </div>   
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">За какое время лучше заказать уборку?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Лучше сделать за заказ, за 1-2 дня. Но, мы понимаем, что бывают непредвиденные обстоятельства и клининговые услуги нужны здесь и сейчас, 
                в таких случаях, при наличии свободных клинеров, мы делаем все возможное, чтобы организовать Вам уборку в желаемый срок!
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Обязательно ли во время уборки находится в квартире?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Нет. Вы сами выбираете, как Вам удобнее, в любом случае после уборки, перед оплатой, Вы принимаете работы! Мы работаем по договору!
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Нужно ли клинерам предоставлять средства и оборудования?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Моющие средства, тряпки, швабры, ведра клинеры привозят с собой.
                Если у Вас нет пылесоса, стремянки (если она потребуется), то Вы можете заказать дополнительно доставку оборудования. 
                Доставка оборудования входит только в <a href="https://gosclean.ru/kompleksnaya_uborka">комплексную уборку</a> квартир. 
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Для уборки холодильника, уборки шкафов внутри, необходимо освободить полки? </h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Да. Клинеры вымывают пустой холодильник, шкафы внутри протираются только если они полностью 
                освобождены. Так же если на полках находится много предметов, то необходимо будет освободить, для оперативной и 
                качественной уборки.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Можно ли заказать уборку в Подмосковье?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Да, мы оказываем клининговые услуги по Московской области.В зависимости от удаленности от МКАД действует минимальная сумма заказа.
                Наши менеджеры, ответят на все интересующие Вас вопросы!
            </div>
        </div> 
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/gal/index.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/link/index.php');?>


    


    <div class="">
        <div class="text-align-center p-80">
            <h2>БУДЬ ВСЕГДА В КУРСЕ ВЫГОДНЫХ ПРЕДЛОЖЕНИЙ</h2>
            <p class="text-i">подписывайтесь и следи за выгодными предложениями, ждём вас.</p>
        </div>
        <div class=" padding-bottom-80">
            <form class="flex-box"  action="system/controllers/users/mailing.php" method="POST" >
                <div class="border-1px main-form-email ">
                    <input class=" p" type="email" name="email"placeholder="e-mail">
                </div>
                <div class="buton">
                    <input type="submit" value="Подписаться">
                    <span class="flare"></span>
                </div>
                
            </form>
        </div>
                    
        <?php if (isset($_GET['wrong'])): ?>
            <div class="padding-5 text-align-center text-i-red">
                Некорректный e-mail. Попробуйте еще раз.
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['inDatabase'])): ?>
            <div class="padding-5 text-align-center text-i-red">
                Такой email уже получает рассылки нашего магазина
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['success'])): ?>
            <div class="padding-5 text-align-center text-i-red">
                Поздравляем, Вы успешно подписались!
            </div>
        <?php endif; ?>
    </div>
        
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/invoc/index.php');?>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/components/handler/form.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/components/footer/index.php');
    ?>
        

</div>



 