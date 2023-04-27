
<?php
    // задаём название для формы отправки скрытоо поля
    $current_page = 'mojka_okon_i_lodzhiij';
    $type_id =  '1';
   
 

    // КАРТОЧКА
  // подключаемся(набор настроек) к БД с помощью $_SERVER['DOCUMENT_ROOT']. уневерсальные метод для поиска
  include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
  // автоподключение всех класов
  include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');

  include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');
?>
<head>
    <title>Мытье окон в Москве и МО, заказать мойку окон и лоджий по недорогой цене</title>
    <link rel="canonical" href="https://gosclean.ru/mojka_okon_i_lodzhiij">
    
    <meta name="description" content="Услуги по мытью окон и лоджий в Москве и МО - ⭐Только проверенные и обученные исполнители - ✅более 5 лет опыта - ✅Доступные цены">
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
                Наша компания осуществляет мытье окон в Москве и МО. Научно доказано, что в помещениях с мутными, грязными стёклами 
                в окнах неуютно находиться. У людей, проживающих в таких помещениях, портится настроение, возникает депрессия, 
                ухудшается зрение. Зато чистые оконные стёкла, в которых играет солнце, лучше пропускают столь необходимый людям 
                солнечный свет, способствуют улучшению настроения и общего самочувствия. 
            </p>
            <p>
                Мойку окон в квартире рекомендуется делать два раза в год, осенью и весной. Мытьё окон лучше проводить в ясную и 
                желательно тёплую погоду, чтобы эффект от мытья сохранился надолго. 
            </p>
            <p>
                Каждый хозяин знает о поджидающих сложностях при мытье окон. А если требуется помыть окна после ремонта, если 
                оттирать следы от скотча, наклейки, пленки, то про выходные можно забыть. 
            </p>
            <p>
                Всё это мы готовы взять на себя! 
            </p>
        </div>
        <p class="price tit">Наши цены</p>
        <div class="containera">
            <table class="box735 box506 " style="width: 900px; border=0; align=center;">
            
                
                <!-- <colgroup span="3" style="background-color: darkseagreen;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="3" style="background-color: #f5ff00;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="2" style="background-color: #25e2b6;border: 2px solid #08892f;"></colgroup> -->
                
                <tr>
                    <td rowspan="1" class="f"> Тип </td>
                    <td rowspan="1" class="f">Генеральная уборка</td>
                    <td rowspan="1" class="f">После ремонта</td>
                </tr>
              
                <tr>
                    <td>1 створка</td>
                    <td>300</td>
                    <td>450</td>
                </tr>
                <tr>
                    <td>1 створка с фрамугой</td>
                    <td>350</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>1 створка с двойными рамами</td>
                    <td>400</td>
                    <td>550</td>
                </tr>
                <tr>
                    <td>1 балконная дверь </td>
                    <td>400</td>
                    <td>550</td>
                </tr>
                <tr>
                    <td>1 балконная створка</td>
                    <td>300</td>
                    <td>450</td>
                </tr>
                <tr>
                    <td>1 балконная створка ( глухая)</td>
                    <td>400</td>
                    <td>550</td>
                </tr>
                <tr>
                    <td>Мытье оконных решеток</td>
                    <td>200</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>Мытье москитной сетки</td>
                    <td>150</td>
                    <td>150</td>
                </tr>
                <tr>
                    <td>Мытье жалюзи</td>
                    <td>450</td>
                    <td>550</td>
                </tr>
                <tr>
                    <td>Снятие следов скотча ( 1 ст. )</td>
                    <td>350</td>
                    <td>350</td>
                </tr>
            </table>
        </div>
        <div class="attention">
            <p>В зимний период мытье окон осуществляется, в зависимости от погодных условий (температура не менее 0 градусов, 
                отсутствие порывов ветра и т.д.) стоимость мытья окон к базовой цене +50%
            </p>
            <p>По соображениям безопасности, мытье глухих створок снаружи, к которым нет прямого доступа, не производится.</p>
            
            <p>При заказе только мытья окон в Москве минимальная сумма заказа 3 000р.</p>
            <p>При заказе только мытья окон в Московской области минимальная сумма заказа 4 000р.</p>
            <p>Цена на мытьё окон в Москве и Московской области включают в себя мытьё оконных рам и подоконников, за две поверхности.</p>
        </div>
        <!-- корзина,    реализуем кнопку получим айди запишим ID выбранного товара и отправляем его фаел(обработчик) который будет класть его в карзину-->
        <!-- onclick = "toBasket()" вешиваем -->
        <!-- <div onclick="toBasket()" class="margin-40 btn-10-30-orange">добавить в корзину</div> -->
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
                    <h2 class="que">Сколько по времени длится мойка окон?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">В зависимости от степени загрязнения и сложности удаления следов грязи, в среднем наши клинеры 
                тратят от 15 минут за одну створку.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Сколько сотрудников выезжают на мойку окон?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Обычно выезжают от 1 до 5 клинеров в зависимости от пощади и степени загрязнения. Количество сотрудников может быть и
                больше, в зависимости от объема работ, площади помещения и степени загрязнения.
            </div>
        </div> 
        
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">За какое время лучше заказать уборку?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">Лучше сделать за заказ, за 1-2 дня.
                Но, мы понимаем, что бывают непредвиденные обстоятельства и клининговые услуги нужны здесь и сейчас, в таких случаях, при наличии свободных клинеров, 
                мы делаем все возможное, чтобы организовать Вам уборку в срок!
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Можно ли заказать только мойку окон/балкона в Подмосковье?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Да! Если Вы заказываете только мойку окон в МО, действует минимальная сумма 4 000р.
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

