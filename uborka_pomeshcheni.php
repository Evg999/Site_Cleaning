
<?php
    // задаём название для формы отправки скрытоо поля
    $current_page = 'uborka_pomeshcheni';
    $type_id =  '1';
    
   
 

    // КАРТОЧКА
  // подключаемся(набор настроек) к БД с помощью $_SERVER['DOCUMENT_ROOT']. уневерсальные метод для поиска
  include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
  // автоподключение всех класов
  include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');

  include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');
?>
    <head>
        <title>Уборка помещений в Москве</title>
        <link rel="canonical" href="https://gosclean.ru/uborka_pomeshcheni">
        
        <meta name="description" content="Уборка производственных помещений в Москве и МО - ✅Большой опыт работы  - ✅Доступные цены">
    </head>
<?php

  require_once($_SERVER['DOCUMENT_ROOT'] . '/components/header/index.php');

    // подключаемся проверяем название страницы и выводим данные из бд
    $connect = new Connect();

    //проверка на наличие в БД таких логинов или паролей
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
                    <?= $info ['title'];?> 
                </h1>

                <p class="title-suptitle"><?= $info ['description'];?></p>
                <a class="link perehod" href="#">Заказать уборку</a>
            </div>
        </div>
    </div>
    <div class="main wrapper-900 text-align-center">
    
        <h2 class="text-i padding-10 "><?= $info ['title2'];?></h2>
        <div class="padding-10 pb-20">
            <p>
                Клининговая компания «Госклин», предоставляет качественные услуги не только по уборке квартир и домов, так же мы 
                оказываем клининг помещений всех типов по Москве и Московской области. 
            </p>
            <p>
                Мы осуществляем уборку помещения как на единоразовой основе, так и на постоянной.
                Производим уборку в магазинах, на складах, в производственных помещениях, офисах и т.д. 

            </p>
            <p>
                Чистота помещения имеет не мало важную роль, как для сотрудников, так и для посетителей. Пыль и грязь в помещение 
                попадает постоянно. С открытых окон и дверей, с обуви, с одежды.  

            </p>
            <p>
                Клининговая компания «Госклин» наведет порядок быстро, качественно и по выгодной цене. У нас Вы можете заказать 
                уборку помещения после ремонта, генеральную или поддерживающую.

            </p>
            
        </div>
        <p class="price tit" style="width: 500px; border=0;">Цены на уборку помещения</p>
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
                    <td>Поддерживающая уборка</td>
                    <td>от 35р м2</td>
                    
                </tr>
                <tr>
                    <td>Генеральная уборка</td>
                    <td>от 50р м2</td>
                    
                </tr>
                <tr>
                    <td>Уборка после ремонта</td>
                    <td>от 60р м2</td>
                    
                </tr>
                
            </table>
        </div>
            
        
        <h3 class="padding-10">Что входит в уборку помещений</h3>
        <div class="flex-box">
            <div id="mainhead" class="mainhead margin-40 btn-10-30-orange ">Что входит в услугу</div>
        </div>
        
        <div class="texts">
            <div class="containera">
                <p><b>Поддерживающая:</b></p>
                <p  class="left" style="width: 600px; ">
                    •	Удаление пыли и грязи со всех доступных мест (полки, подоконники, радиаторы…)<br>
                    •	Cухая уборка пылесосом<br>
                    •	Влажная уборка полов и плинтусов<br>
                    •	Мытьё зеркал и стеклянных поверхностей <br>
                    •	Удаление пыли с розеток и выключателей<br>
                    •	Чистка и дезинфекция сантехники (смесители, раковины, унитазы, биде)<br>
                    •	Мытьё кафельной плитки локально (где имеются загрязнения)<br>
                    •	Вынос мусора, замена полиэтиленовых пакетов в мусорных корзинах (мусор не габаритный)<br>

                </p>
                <p><b>Генеральная уборка:</b></p>
                <p  class="left"style="width: 600px;">
                    •	Удаление пыли и грязи со всех доступных мест (полки, подоконники, радиаторы…)<br>
                    •	Сухая уборка пылесосом<br>
                    •	Влажная уборка полов и плинтусов<br>
                    •	Удаление пыли с осветительных приборов (кроме габаритных, хрустальных люстр)<br>
                    •	Мытьё зеркал и стеклянных поверхностей <br>
                    •	Удаление пыли с розеток и выключателей<br>
                    •	Обеспыливание стен и потолков<br>
                    •	Мытье дверных блоков, включая фурнитуру<br>
                    •	Чистка и дезинфекция сантехники (смесители, раковины, унитазы, биде)<br>
                    •	Мытьё кафельной плитки локально (где имеются загрязнения)<br>
                    •	Мытьё кафельной плитки от потолка до пола<br>
                    •	Вынос мусора, замена полиэтиленовых пакетов в мусорных корзинах (мусор не габаритный)<br>

                </p>
                <p><b>После ремонта:</b></p>
                <p  class="left"style="width: 600px;">
                    •	Удаление пятен от строительных смесей со всех поверхностей: штукатурки, краски, плиточной затирки, клея;<br>
                    •	Удаление пыли и грязи со всех доступных мест (полки, подоконники, радиаторы…)<br>
                    •	Сухая уборка пылесосом<br>
                    •	Влажная уборка полов и плинтусов<br>
                    •	Удаление пыли с осветительных приборов (кроме габаритных, хрустальных люстр)<br>
                    •	Мытьё зеркал и стеклянных поверхностей <br>
                    •	Удаление пыли с розеток и выключателей<br>
                    •	Обеспыливание стен и потолков<br>
                    •	Мытье дверных блоков, включая фурнитуру<br>
                    •	Чистка и дезинфекция сантехники (смесители, раковины, унитазы, биде)<br>
                    •	Мытьё кафельной плитки локально (где имеются загрязнения)<br>
                    •	Мытьё кафельной плитки от потолка до пола<br>
                    •	Вынос мусора, замена полиэтиленовых пакетов в мусорных корзинах (мусор не габаритный)<br>

                </p>
            </div>
        </div>

        <div class="flex-box">
            <div class="margin-40 btn-10-30-orange perehod">Заказать уборку</div>
        </div>

       
           
        
        <div class="attention m-0">
            <p>Мойка окон не входит в уборку и рассчитывается отдельно. Для этого выберите дополнительную услугу мойка окон и лоджий.</p>
            <p>Окончательный расчет производится менеджером</p>
            
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
                    <h2 class="que">Какие помещения Вы убираете?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">Для клининговой компании «Госклин», нет не преодолимых препятствий.  Мы убираем помещения любой сложности 
                и площади. Вы можете оставить заявку у нас на сайте и менеджер поможет Вам организовать уборку Вашего помещения.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Что входит в клининг помещения?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                У нас есть несколько видов уборки помещения:<br>
                •	Поддерживающая уборка помещения<br>
                •	Генеральная уборка помещения<br>
                •	Уборка помещения после ремонта<br>
                •	Уборка помещения на постоянной основе: ежедневная/периодическая.<br>
                Выше Вы можете ознакомиться с перечнем работ к каждой уборке.

            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Можно ли дополнительно заказать мытье окон? </h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">Да, при оформлении заказа, укажите нашим менеджерам, что дополнительно 
                необходима мойка окон.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Нужно ли клинерам предоставлять средства и оборудования?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">Моющие средства, тряпки, швабры, ведра клинеры привозят с собой.
                Если у Вас нет пылесоса, стремянки (если она потребуется), то Вы можете заказать дополнительно доставку оборудования.
                Доставка оборудования входит только в комплексную уборку квартир. 
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Можно ли заказать уборку в Подмосковье?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">Да, мы оказываем клининговые услуги по Московской области.В зависимости от удаленности от МКАД действует минимальная сумма заказа.
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
