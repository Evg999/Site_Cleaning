
<?php
    // задаём название для формы отправки скрытоо поля
    $current_page = 'himchistka';
    
    $type_id =  '1';
 
 

    // КАРТОЧКА
  // подключаемся(набор настроек) к БД с помощью $_SERVER['DOCUMENT_ROOT']. уневерсальные метод для поиска
  include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
  // автоподключение всех класов
  include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');

  include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');
?>
<head>
    <title>Химчистка на дому в Москве, заказать химчистку с выездом на дом</title>
    <link rel="canonical" href="https://gosclean.ru/himchistka">
    <meta name="description" content="Услуги по химчистке мягкой мебели и ковров в Москве и МО  - ✅более 5 лет опыта - ✅100% страхование">
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
               Химчистка мягкой мебели – востребованная процедура, позволяющая вернуть мебели лоск и эстетичность.
                Ведь в процессе эксплуатации она подвергается различным загрязнениям. Внешний вид ухудшается, может
                появиться неприятный запах. Очистить мебель своими силами, будет достаточно сложно. Ведь быстро и качественно 
                устранить стойкие пятна, а также неприятные запахи, могут лишь профессиональные очистители и мощное оборудование. 
            </p>
            <p>
               Наша компания занимается химчисткой мягкой мебели и ковров в Москве и Подмосковье. 
               Чистка мебели производится на дому, в квартире, офисе. У нас работают высококвалифицированные специалисты, 
               которые подберут нужные химические растворы и пятновыводители для вашего типа обивки или ковра.   

            </p>
            <p>
               Раствор для химчистки делается из гипоаллергенной химии. Процесс сушки занимает 3-4 часа.
            </p>
            <p>
              Закажите химчистку мебели в клининговой компании «Госклин», и мы приведем Вашу мебель в первозданный вид.

            </p>
            
        </div>
        <p class="price tit" style="width: 500px; border=0;">Цены Химчистка мебели</p>
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
                    <td>Табуретка  (текстиль / кожа)</td>
                    <td>250р / 400р</td>
                    
                </tr>
                <tr>
                    <td>Стул со спинкой  (текстиль / кожа)</td>
                    <td>400р / 600р</td>
                    
                </tr>
                <tr>
                    <td>Пуфик  (текстиль / кожа)</td>
                    <td>450р / 600р</td>
                    
                </tr>
                <tr>
                    <td>Кресло (текстиль / кожа)</td>
                    <td>1 000р / 1 800р</td>
                    
                </tr>
                <tr>
                    <td>Кресло-кровать  (текстиль / кожа)</td>
                    <td>1 500р / 2 500р</td>
                    
                </tr>
                <tr>
                    <td>2-х мест. диван/книжка  (текстиль / кожа)</td>
                    <td>2 500р / 3 500р</td>
                    
                </tr>
                <tr>
                    <td>3-х мест. диван  (текстиль / кожа)</td>
                    <td>2 800р / 4 500р</td>
                    
                </tr>
                <tr>
                    <td>4-х мест. диван  (текстиль / кожа)</td>
                    <td>4 000р / 5 500р</td>
                    
                </tr>
                 <tr>
                    <td>Большие и П-образные диваны (текстиль / кожа)</td>
                    <td>5 000р / 6 800р</td>
                    
                </tr>
                <tr>
                    <td>Угловой диван  (текстиль / кожа)</td>
                    <td>3 800р / 5 500р</td>
                    
                </tr>
                 <tr>
                    <td>Кухонный уголок (текстиль / кожа)</td>
                    <td>1 500р / 3 100р</td>
                    
                </tr>
                <tr>
                    <td>Подушки от дивана (текстиль / кожа)</td>
                    <td>150р / 350р</td>
                    
                </tr>
                <tr>
                    <td>Матрасы любого размера (одна сторона)</td>
                    <td>1 000р</td>
                    
                </tr>
            </table>
        </div>
        <p class="price tit" style="width: 500px; border=0;">Цены на химчистку ковров</p>
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
                    <td>Ковролин</td>
                    <td>150р/м2</td>
                    
                </tr>
                <tr>
                    <td>Ковер шерстяной</td>
                    <td>270р/м2</td>
                    
                </tr>
                <tr>
                    <td>Ковер с длинным ворсом</td>
                    <td>500р/м2</td>
                    
                </tr>
                
            </table>
        </div>

        <div class="flex-box">
            <div class="margin-40 btn-10-30-orange perehod">Заказать уборку</div>
        </div>

        <div class="attention m-0">
            <p>Выведение сложных пятен с матрасов или мебели + 50%</p>
            <p>При заказе только химчистки мебели, действует минимальная 
                сумма заказа с выездом за пределы Москвы - 4 000 руб., для уборки домов – 5 000руб.
            </p>
            
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
                    <h2 class="que"> Какое оборудование и моющие средства вы используете?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Мы используем только профессиональную технику: пылесосы Numatic, парогенераторы Karcher. 
                Для устранения трудных загрязнений и для борьбы с вредными микроорганизмами применяются специальные моющие составы: порошки 
                Double Clean, Fibresafe Gold, пятновыводители Dymaprep, Neutral pro-Spotter, чистящее средство, дезодорант и 
                нейтрализатор мочи Urine Neutraliser.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">У меня маленький ребенок. Химчистка не причинит вреда его здоровью?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Нет, мы используем гипоаллергенные и безопасные чистящие средства и пятновыводители, 
                которые соответствуют международным стандартам качества. Они не раздражают кожу и не имеют резкого запаха.

            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Для чего требуется чистка мебели? </h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Химчистка мягкой мебели и диванов на дому существенно увеличивает срок использования предметов интерьера. 
                В отличие от привычных способов борьбы с загрязнениями и пятнами, чистка с применением профессиональных 
                средств позволяет избавиться даже от устаревшей грязи, которая глубоко въелась в материал обивки.<br>

                Игнорирование регулярной химчистки опасно тем, что мебель может стать источником аллергенов или иных 
                возбудителей заболеваний. Ведь на ее поверхности скапливаются пылевые клещи, невидимые человеческому глазу. 
                С помощью химчистки мебели можно не только вернуть первозданную чистоту изделию, но и устранить неприятные запахи.<br>

                Чистка мягкой мебели в домашних условиях – оптимальный вариант для дорогостоящих предметов обстановки, 
                требующих тщательного ухода. В подобных случаях бороться с пятнами самостоятельно 100% не стоит. Во-первых, 
                это рискованно. Во-вторых, неэффективно.

            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">После химчистки мебели, пятна уйдут на 100%?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
            Не всегда. В случаях, когда пытались замыть пятна сами до химчистки, вывести пятно до конца крайне сложно, т.к. оно еще сильнее 
            въедается в материал. Так же много зависит от материала мебели или ковра и от самого загрязнения. При заказе химчистки наши специалисты 
            по приезду к Вам оценят степень загрязнения и обговорят с Вами какого результат можно ждать после химчистки.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Сколько по времени будет сохнуть мебель/ковер, после химчистки?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
                Сушка проходит от 3-4 часов в зависимости от материала и степени загрязнения.
            </div>
        </div> 
        <div class="faq-item">
            <div class="faq-item-question">
                <div class="between">
                    <h2 class="que">Когда требуется чистка мебели?</h2>
                    <img class=down-arrow src="img/down-arrow.png" alt="стрелка">
                </div>
            </div>
            <div class="faq-item-answer">
            Химчистку мебели или ковровых покрытий, необходимо периодически проводить, даже если нет никаких пятен. 
            По мимо загрязнений видимых, вся наша мягкая мебель, ковры собирают в себе очень много пыли, которую обычным пылесос до конца не убрать. 
            Если химчистку проводить хотя бы раз в год, это поможет не только держать дом в чистоте, но и так же продлит первозданное состояние и 
            внешний вид мебели.
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

