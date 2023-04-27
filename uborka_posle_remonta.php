
<?php
    // задаём название для формы отправки скрытоо поля
    $current_page = 'uborka_posle_remonta';
     $type_id =  '1';
    
   
 

    // КАРТОЧКА
  // подключаемся(набор настроек) к БД с помощью $_SERVER['DOCUMENT_ROOT']. уневерсальные метод для поиска
  include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
  // автоподключение всех класов
  include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');

  include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');
?>
    <head>
        <title>Уборка после ремонта в Москве и МО, цены на уборку клинингового сервиса</title>
        <link rel="canonical" href="https://gosclean.ru/uborka_posle_remonta">
        
        <meta name="description" content="Услуги по уборке после ремонта в Москве - ✅Большой опыт работы - ✅Гарантия качества">
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
               Уборка после ремонта завершающий этап каждого ремонта. Она включает в себя удаление строительной пыли, влажную уборку. 
               Это необходимое мероприятие, без которого новый интерьер не будет соответствовать ожиданиям.
            </p>
            <p>
               Радость от того, что ремонт наконец-то закончен, бывает неполной, так как ее омрачает предстоящая глобальная 
               уборка после ремонта.
            </p>
            <p>
               Необходимо убрать весь мусор, оставшийся после ремонта, а это куски обоев, линолеума, гипсокартона, а может быть и кирпич, 
               цемент и прочий строительный мусор.
            </p>
            <p>
               Но и на этом уборка после ремонта не заканчивается, а только начинается, нужно еще расставить на свои места мебель, 
               пропылесосить мощным профессиональным пылесосом пол, вымыть пол, протереть стены, потолок (и все действия выполнить
               несколько раз) задача удалить полностью пыль, по необходимости так же произвести мытьё окон и т. д . 
            </p>
            <p>
               Строительной пыли после ремонта остаётся очень много. Для того чтобы ее убрать необходимо тщательно и не один раз вымыть 
               всю квартиру или дом.
            </p>
            <p>
                Заказывайте уборку после ремонта квартир и домов в клининговой компании «Госклин» - мы убираем качественно, быстро и по 
                доступным ценам.
            </p>
            <p>
               Мы готовы взять на себя все обязательства по уборке.
            </p>
            
        </div>
        <p class="price tit" style="width: 600px; border=0;">Цены на уборку после ремонта</p>
        <div class="containera">
            <table class="box735 box505" style="width: 600px; border=0; align=center;">
            
            
                
                <!-- <colgroup span="3" style="background-color: darkseagreen;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="3" style="background-color: #f5ff00;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="2" style="background-color: #25e2b6;border: 2px solid #08892f;"></colgroup> -->
                
                <tr>
                    <td rowspan="1" class="f"> Тип </td>
                    <td rowspan="1" class="f">Без мебели</td>
                    <td rowspan="1" class="f">С мебелью</td>
                    
                    
                </tr>
           
                <tr>
                    <td>1-комнатная квартира ( до 40 м2)</td>
                    <td>5300</td>
                    <td>7300</td>
                    
                </tr>
                <tr>
                    <td>2-комнатная квартира (до 60м2)</td>
                    <td>7300</td>
                    <td>9300</td>
                    
                </tr>
                <tr>
                    <td>3-комнатная квартира (до 80м2)</td>
                    <td>9300</td>
                    <td>11300</td>
                    
                </tr>
                <tr>
                    <td>4-комнатная квартира (до 100м2)</td>
                    <td>11300</td>
                    <td>13300</td>
                    
                </tr>
                 <tr>
                    <td>Свыше 100 м2 за 1 м2</td>
                    <td>90</td>
                    <td>120</td>
                    
                </tr>
            </table>
        </div>
            
        <p class="price tit" style="width: 600px; border=0;">Цены на уборку после ремонта домов, коттеджей</p>
        <div class="containera">
            <table class="box735 box505" style="width: 600px; border=0; align=center;">
            
            
                
                <!-- <colgroup span="3" style="background-color: darkseagreen;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="3" style="background-color: #f5ff00;border-left: 2px solid #08892f;"></colgroup>
                <colgroup span="2" style="background-color: #25e2b6;border: 2px solid #08892f;"></colgroup> -->
                
                <tr>
                    <td rowspan="1" class="f">  </td>
                    <td rowspan="1" class="f">Без мебели</td>
                    <td rowspan="1" class="f">С мебелью</td>
                    
                    
                </tr>
           
                <tr>
                    <td>За 1м2</td>
                    <td>100</td>
                    <td>130</td>
                    
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
                <p><b>Общие работы:</b></p>
                <p  class="left" style="width: 600px; ">
                    •	Удаление пыли и грязи со всех доступных мест(полки, подоконники, радиаторы…)<br>
                    •	Удаление пыли с бытовой техники ( телевизоры, компьютеры…)<br>
                    •	Cухая уборка пылесосом<br>
                    •	Влажная уборка полов и плинтусов<br>
                    •	Мытьё зеркал и стеклянных поверхностей<br>
                    •	Удаление пыли с осветительных приборов ( кроме габаритных, хрустальных люстр)<br>
                    •	Обеспыливание стен и потолков<br>
                    •	Мытье дверных блоков, включая фурнитуру<br>
                    •	Удаление пыли с розеток и выключателей<br>

                </p>
                <p><b>Кухня:</b></p>
                <p  class="left"style="width: 600px;">
                    •	Мытьё кухонной плиты<br>
                    •	Очистка кухонных рабочих поверхностей<br>
                    •	Мытьё стеновой панели (фартук), кухонного гарнитура<br>
                    •	Чистка и дезинфекция сантехники<br>
                    •	Удаление пыли с антресолей кухонного гарнитура<br>
                    •	Мытьё холодильника, духовой и микроволновой печи снаружи<br>
                    •	Мытье внутренних поверхностей кухонного гарнитура (шкафчики, ящики и т.д., если они освобождены)<br>
                    •	Мытьё духовой и микроволновой печи внутри, очистка от строительной пыли<br>
                    •	Мытье мусорных корзин<br>
                    •	Вынос мусора, замена полиэтиленовых пакетов в мусорных корзинах ( мусор не габаритный)<br>
                    •	Мытьё холодильника внутри, очистка от строительной пыли<br>
                    •	Мытье грязной посуды (1 раковина)<br>


                </p>
                <p><b>Санузел:</b></p>
                <p  class="left"style="width: 600px;">
                    •	Чистка и дезинфекция сантехники (смесители, раковины, унитазы, биде)<br>
                    •	Мытьё кафельной плитки локально (где имеются загрязнения)<br>
                    •	Мытьё кафельной плитки от потолка до пола<br>
                    •	Мытьё душевых кабин и ванн<br>

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
                    <h2 class="que">Сколько по времени длится после строительная уборка? </h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">В зависимости от степени загрязнения и площади помещения.
                После строительная уборка квартир может занимать от 4 до 12 часов.
                После строительная уборка домов, коттеджей может занимать от 5 до 24 часов.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Почему после строительный клининг лучше заказывать в клининговой компании?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">Уборка после ремонта очень трудоемкий процесс. Строительная пыль оседает везде и просто протереть 
                тряпочкой и помыть пол к сожалению, не поможет. Необходимо тщательно, специальными средствами и профессиональным мощным 
                оборудованием, убрать всю пыль в доме или квартире. 
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Когда лучше заказывать уборку после ремонта?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">Обычно у нас заказывают после строительную уборку квартиры в 2 этапа:
                Первая уборка, после окончания ремонтных работ, перед установкой мебели.
                Вторая уборка, завершающая, после установки мебели.
                По нашему мнению, это более правильный подход к заказу уборки после ремонта дома, коттеджа или квартиры.
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