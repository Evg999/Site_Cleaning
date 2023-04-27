<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');

// автоподключение всех класов
include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');
// include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/Connect.php');
// include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/UnitActions.php');
// include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/Unit.php');
// include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/ShowArticleInfo.php');
// include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/Article.php');


// передаём параметры нашего подключения

// $connect = new Connect();    !1
// $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// mysqli_set_charset($link, 'utf8');

// $result = mysqli_query($connect->getConnection(), "SELECT * FROM `core_articles`");    !1
// передаём параметры нашего подключения через Article в unit
$result = (new Article())->getElements();
$result_a = (new Advantages())->getElements();
// задаём название для формы отправки скрытоо поля
$current_page = 'home';

include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');
?>
<head>
    <title>Сервис заказа уборки Госклин: профессиональная уборка квартир в Москве. Цены на клининговые услуги</title>
    <link rel="canonical" href="https://gosclean.ru">
    
    
    <meta name="description" content="Клининговые услуги в Москве - компания Госклин оказывает услуги по уборке всех типов помещеший. Недорогая уборка в Москве с клининговой компанией.Оставьте заявку, и наш менеджер ответит на все вопросы, подскажет по набору услуг и рассчитает стоимость уборки. Уборка в Москве.">
</head>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/components/header/index.php');
?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/components/slider/index.php');


// var_dump($result);

// mysqli_close($link);
  
?>

<?php if (isset($_GET['success2'])): ?>
    <div class="padding-5 text-align-center text-i-red">
    Спасибо! Заявка отправлена, С Вами свяжутся.
    </div>
<?php endif; ?>
<?php if (isset($_GET['wrong2'])): ?>
    <div class="padding-5 text-align-center text-i-red">
        Failure! Form submissions are rate limited.
    </div>
<?php endif; ?>

<body>
    <div class="wrapper1">
        <?php 
            require_once($_SERVER['DOCUMENT_ROOT'] . '/components/steps/index.php');
            require_once($_SERVER['DOCUMENT_ROOT'] . '/components/calk/index.php');
            require_once($_SERVER['DOCUMENT_ROOT'] . '/components/advantages/index.php');
            require_once($_SERVER['DOCUMENT_ROOT'] . '/components/numbers/index.php');
        ?>
        <section >

            <div class="text-align-center nav service center-block1">
                <h2 class="service_title">Наши Услуги</h2>
                <p class="service_text text-i">Мы стараемся для Вас каждый день!</p>
                <a class="link" style="text-decoration: none;" href="catalog">Посмотреть Все услуги</a>
                
            </div>
            <div class="flex-box flex-wrap article-column  ">
                <!-- цикл для вывода, использовали кароткие тэги (удалили сначала и в конце тег php  и : заменили на фигурные скобки(иметь ввиду поддержка коротких тегов на сервере может быть отключена)) -->
                <? while($row = mysqli_fetch_assoc($result)): ?>
                    <?php
                        // ($row['id']); row весь масив а мы берем только id, выводим с класса при помощи ОБЪЕКТА класса
                        $article = new Article($row['id']);
                        // искать по TITLE
                        // $article = new Article();
                        // $article->getElementByTitle('ДЖИНСОВЫЕ КУРТКИ');
                        // $article->getId($row['id']);
                        // пробуем через универсальный класс
                        // $article = new Unit();
                        // $article->getId($row['id']);
                        // $article->getTable('core_articles');   
                    ?>
                    <!-- фото бэкгроундом подтягиваеться из PHP -->
                    <a href="<?= $article->getField('url')?>" class="main-article"style ="background-image: url('<?= $article->getField('photo')?>')"> 
                        <div>
                            <? if ($row['id'] == 4 || $row['id'] == 9) { ?>
                                <div class="flex-box padding-5">
                                    <div class="main-article-arrow"></div>
                                </div>                                
                            <? } ?>
                            <div class="padding-5">
                                <? if ($row['id'] == 8 || $row['id'] == 7) { ?>
                                    <div class="flex-box">
                                        <div class="main-article-logo"></div>
                                    </div>                                
                                <? } ?>
                                <p class="text-up text-20px margin-0"> 
                                    <?= $article->title()?>  
                                </p>
                            </div> 
                            <div class="text-italic padding-5">
                                <?= $article->getField('description')?> 
                            </div> 
                        </div>   
                    </a>
                <?php endwhile; ?>
            </div>

            <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/partners/index.php');?>

            <div class="text-align-center margin-top-80">
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
        </section>

        
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/about/index.php');?>
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/fotogal/index.php');?>
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/accordion/index.php');?>
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/gal/index.php');?>
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/invoc/index.php');?>
    




<?php
include($_SERVER['DOCUMENT_ROOT'] . '/components/handler/form.php');
include($_SERVER['DOCUMENT_ROOT'] . '/components/footer/index.php');

?>
</div>