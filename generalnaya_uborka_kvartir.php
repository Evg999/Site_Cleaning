<?php
     
    // задаём название для формы отправки скрытоо поля
    $current_page = 'generalnaya_uborka_kvartir';
    $type_id =  '1';
   
    // КАРТОЧКА
  // подключаемся(набор настроек) к БД с помощью $_SERVER['DOCUMENT_ROOT']. уневерсальные метод для поиска
  include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
  // автоподключение всех класов
  include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');

  include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');
?>
<head>
    <title>Генеральная уборка квартир в Москве и МО</title>
    <link rel="canonical" href="https://gosclean.ru/generalnaya_uborka_kvartir">
    
     <meta name="description" content="Генеральная уборка квартир, уборка квартиры после ремонта или поддерживающая уборка квартир – одни из наиболее востребованных клининговых услуг. Заказав уборку квартиры в клининговой компании Вы можете освободить свое время от ненужных забот, клинеры все сделают за Вас!">
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
                Генеральную уборку квартир необходимо проводить не менее 2 раз в месяц.
                Это рекомендуется для поддержания должного уровня чистоты, ведь чистота - залог здоровья!  
            </p>
            <p>
                Генеральная уборка квартиры подразумевает под собой, тщательную уборку всех комнат, от пола до потолка. 
                Благодаря знающему персоналу, профессиональным моющим средствам и оборудованию, мы проводим уборку аккуратно, безопасно и чисто.
            </p>
            <p>
                Заказывайте генеральную уборку квартир в клининговой компании «Госклин» - мы убираем качественно, быстро и по доступным ценам.
            </p>
        </div>
        <p class="price tit" style="width: 500px; border=0;">Цены на генеральную уборку квартир</p>
        <div class="containera">
            <table class="box735 box505" style="width: 500px; border=0; align=center;">
            
            
                
                <!-- <colgroup span="3" style="background-color: darkseagreen;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="3" style="background-color: #f5ff00;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="2" style="background-color: #25e2b6;border: 2px solid #08892f;"></colgroup> -->
                
                <tr>
                    <td rowspan="1" class="f"> Тип </td>
                    <td rowspan="1" class="f">Стоимость</td>
                    
                    
                </tr>
           
                <tr>
                    <td>1-комнатная квартира ( до 40 м2)</td>
                    <td>4100 руб.</td>
                    
                </tr>
                <tr>
                    <td>2-комнатная квартира (до 60м2)</td>
                    <td>5100 руб.</td>
                    
                </tr>
                <tr>
                    <td>3-комнатная квартира (до 80м2)</td>
                    <td>6100 руб.</td>
                    
                </tr>
                <tr>
                    <td>4-комнатная квартира (до 100м2)</td>
                    <td>7100 руб.</td>
                    
                </tr>
                 <tr>
                    <td>Свыше 100 м2 за 1 м2</td>
                    <td>100 руб.</td>
                    
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
        
        <div class="flex-box">
            <div id="mainhead" class="mainhead margin-40 btn-10-30-orange ">Что входит в услугу</div>
        </div>
        
        <div class="texts">
            <div class="containera">
                <h3 class="padding-10">Что входит в генеральную уборку квартир</h3>
                <p><b>Общие работы:</b></p>
                <p  class="left" style="width: 600px; ">
                    •	Удаление пыли и грязи со всех доступных мест(полки, подоконники, радиаторы…)<br>
                    •	Удаление пыли с бытовой техники ( телевизоры, компьютеры…)<br>
                    •	Cухая уборка пылесосом<br>
                    •	Влажная уборка полов и плинтусов<br>
                    •	Мытьё зеркал и стеклянных поверхностей<br>
                    •	Удаление пыли с осветительных приборов ( кроме габаритных, хрустальных люстр)<br>
                    •	Обеспыливание стен и потолков<br>
                    •	Замена постельного белья<br>
                    •	Мытье дверных блоков, включая фурнитуру<br>
                    •	Удаление пыли с розеток и выключателей<br>
                </p>
                <p><b>Кухня:</b></p>
                <p  class="left"style="width: 600px;">
                    •	Мытьё кухонной плиты, удаление следов жира<br>
                    •	Очистка кухонных рабочих поверхностей<br>
                    •	Мытьё стеновой панели (фартук), кухонного гарнитура, удаление следов жира<br>
                    •	Чистка и дезинфекция сантехники<br>
                    •	Удаление пыли с антресолей кухонного гарнитура<br>
                    •	Мытьё холодильника, духовой и микроволновой печи снаружи<br>
                    •	Мытье внутренних поверхностей кухонного гарнитура (шкафчики, ящики и т.д., если они освобождены)<br>
                    •	Мытье мусорных корзин<br>
                    •	Вынос мусора, замена полиэтиленовых пакетов в мусорных корзинах ( мусор не габаритный)<br>
                    •	Мытье грязной посуды (1 раковина)<br>
                    

                </p>
                <p><b>Санузел:</b></p>
                <p  class="left"style="width: 600px;">
                    •	Чистка и дезинфекция сантехники (смесители, раковины, унитазы, биде)<br>
                    •	Мытьё кафельной плитки локально (где имеются загрязнения)<br>
                    •	Мытьё кафельной плитки от потолка до пола<br>
                    •	Мытьё душевых кабин и ванн<br>
                    •	Удаление налёта и водного камня<br>
                </p>
            </div>
        </div>

        <div class="flex-box">
            <div class="margin-40 btn-10-30-orange perehod">Заказать уборку</div>
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
                    <h2 class="que">Как понять, что необходима именно генеральная уборка в квартире? </h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Генеральную уборку, необходимо проводить хотя бы раз в месяц. Если Вы долгое время не проводили
                полный клининг в своей квартире, значит уже необходима генеральная уборка, для тщательного удаления пыли с каждого уголка и каждой полки.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Сколько раз в месяц нужно проводить генеральную уборку квартиры?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Для поддержания должной чистоты, рекомендуется от 1 раза в месяц.
            </div> 
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Можно ли заказать генеральную уборку квартиры в Подмосковье?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Да, можно. Минимальная сумма заказа с выездом за пределы Москвы для уборки квартир - 4 000 руб., для уборки домов – 5 000руб.
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
                    <h2 class="que">Хочу генеральную уборку квартиры, на постоянной основе?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Мы можем заключить договор для уборки квартиры на постоянной основе.
                Оставьте заявку, Наши менеджеры уточнят количество уборок в месяц и дни, когда Вам удобно чтобы производилась уборка квартиры.

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
                Нет. Вы сами выбираете, как Вам удобнее, в любом случае после уборки, перед оплатой, Вы принимаете работы! Мы работаем по договору.
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