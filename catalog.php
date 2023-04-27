<?   
    // задаём название для формы отправки скрытоо поля
    $current_page = 'catalog';

   include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
   // автоподключение всех класов
   include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');
 
   include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');
?>
<head>
    <title> Каталог услуг Госклин: профессиональная уборка. Цены на клининговые услуги</title>
    <link rel="canonical" href="https://gosclean.ru/catalog">
    
    <meta name="description" content="Клининговые услуги в Москве - оказываем широкий спектор услуг по уборке всех типов помещеший. Служба профессионального клининга квартир, домов, коммерческих помещений, химчистки. Работаем 5 лет. ... ">
</head>
<?  
   require_once($_SERVER['DOCUMENT_ROOT'] . '/components/header/index.php');

    // // передаём параметры нашего подключения через Good в unit
    $result = (new Good())->getElements();

   
?>





<a href="#up" class="arrows"></a>
<!-- подгружаем товар -->
<div id="catalog" class="wrapper1">
    <h1 class="main-head">Каталог Услуг</h1>
    <div class="flex-box flex-wrap">
        <!-- цикл для вывода, использовали короткие тэги (удалили сначала и в конце тег php и : заменили на фигурные скобки(иметь ввиду поддержка коротких тегов на сервере может быть отключена)) -->
        <!-- переводим к асациотивному масиву, выводим в цикле товар -->
        <? while($row = mysqli_fetch_assoc($result)){ ?>
            <? $good = new Good($row['id']); ?>
            <div class="item padding-30" > 
                <div class="item-photo">
                    <a href="<?= $good->getField('url')?>">
                    <img src="<?= $good->photo()?> " alt="">
                    </a>
                </div> 
                <!-- открываем гет параметры (зашиваем id)  -->
               
                    <a class="btn" href="<?= $good->getField('url')?>">
                    
                        <?=$good->title()?>  
                    </a>
                
                
            </div>
        <?}?>
    </div>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/components/handler/form.php');
include($_SERVER['DOCUMENT_ROOT'] . '/components/footer/index.php');

?>
</div>





 