<!-- подключаем карту  -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <title>Мы на картах</title>
        <link rel="canonical" href="https://gosclean.ru/about">
        
        <meta name="description" content="Мы компания ГОСКЛИН  - это высокое качество и оперативность по разумной цене! Служба профессионального клининга квартир, домов, коммерческих помещений, химчистки. Мы успели зарекомендовать себя на рынке как надёжная, честная и высококвалифицированная клининговая компания.">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Костыль: поставить на сайте: -->
        <!-- По сути это хак, т.к. основное предназначение этого заголовка - заставить всё работать через https, но если браузер не получает ответа по https порту - он разрешает работу по http. -->
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <?php

            // делаем API для about
            // задаём название для формы отправки скрытоо поля
            $current_page = 'about';
            // подключаемся(набор настроек) к БД с помощью $_SERVER['DOCUMENT_ROOT']. уневерсальные метод для поиска
            include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
            // автоподключение всех класов
            include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');

            include($_SERVER['DOCUMENT_ROOT'] . '/components/head_doctype.php');

            require_once($_SERVER['DOCUMENT_ROOT'] . '/components/header/index.php');

  
        ?>
       

        <script src="https://api-maps.yandex.ru/2.1/?apikey=2fdf78f0-1244-48cc-82c7-4cb113b3cbf9&lang=ru_RU" type="text/javascript"> </script>

        <style type="text/css">
            /* Always set the map height explicitly to define the size of the div
            * element that contains the map. */
            #map {
                height: 400px;
                width: 1400px;
                
            }
            
            /* Optional: Makes the sample page fill the window. */
            html,
            body {
                
                
                
                margin: 0 auto;
                background: white;
                overflow-x: clip;
                
            }
        </style>
       
        <script type="text/javascript">
            ymaps.ready(init);

            function init(){
                var myMap = new ymaps.Map("map", {
                    center: [55.75, 37.69],
                    zoom: 14
                    
                });

                //  доп функция для добавления метки из БД
                let points = JSON.parse(getShops());

                for (let i = 0; i < points.length;i++){
                    console.log(points[i].title);
                    //Создание метки
                    let myPlacemark = new ymaps.Placemark(
                        [points[i].latitude, points[i].longitude],
                        {
                            // hintContent: 'Собственный значок метки',
                            // balloonContent: 'Это красивая метка'
                            hintContent: points[i].title,
                            balloonContent: '<b>'+points[i].title+'</b><div>'+points[i].address+'</div><div>'+points[i].description+'</div><div><img src="'+points[i].photo+'"/></div>'
                        }
                    );
                    //добавления метки
                    myMap.geoObjects.add(myPlacemark);
                }
                     
                    
               
                //  доп функция для добавления метки из БД
            


                // //Создание метки без БД
                // var myPlacemark = new ymaps.Placemark(
                //     [55.761, 37.645]
                // );
                // //добавления метки
                // myMap.geoObjects.add(myPlacemark);

                // //Создание метки2
                // var myPlacemark = new ymaps.Placemark(
                //     [55.762, 37.646]
                // );
                // //добавления метки2
                // myMap.geoObjects.add(myPlacemark);
        
            }
            // AJAX запрос для получения массива данных для отображения меток на картах яндекс и гугл
            // соеденяем БД метки через php  и json через аякс с js сверху метки без БД
            function getShops() {
                // создание нового экземпляра класса для запросов
                let xhr = new XMLHttpRequest();

                let url = 'https://gosclean.ru/api/1.0/shops/get/all/index.php';

                // к xhr пременяем метод open( пакзываем тип запроса(GET или POST) указываем адресс скрипта и указываем асинхронный или синхронный это запрос(true или folse))
                //запуск метода open() для установки параметров запроса (метод GET, куда - HTTP....., если true - то запрос асинхронный, иначе запрос синхронный)
                // url подставили переменную
                xhr.open('GET',url,false);

                // метод отправить (принемает строку с параметрами)
                xhr.send();


                return xhr.responseText;
            };
       
        

        </script>
     
    </head>

  
   
   
    <body style="padding:0px;" >
        <div class="wrapper1">
            <!-- КНОПКА ВВЕРХ -->
            <a href="#up" class="arrows"></a>

            <div class=" t2">
                
                <h1>Контакты</h1>
                <?php if (isset($_GET['success'])): ?>
                    <div class="padding-5 text-align-center text-i-red">
                        Ваше сообщение успешно отправленно!
                    </div>
                <?php endif; ?>
            </div>
        
            <div class="wrapper_cont">
                
                <div class="adress">
                    <div class="ttl">
                        <h4>Для связи:</h4>
                    </div>
                    <div class="com">
                        <img src="/img/placeholder.png" alt="">
                        <div>
                            <p>г. Москва, </p>
                            <p>ул. проезд Завода Серп и Молот, 10, оф 101</p>
                            <p>Режим работы 24 часа</p>
                        </div>
                    </div>
                    <div class="com">
                        <img src="/img/mail.png" alt="">
                        <div>
                            <p><a href="mailto:gosclean.ru">gosclean.ru</a></p>
                            <p>info@gosclean.ru</p>
                        </div>
                    </div>
                    <div class="com">
                        <img src="/img/telephone.png" alt="">
                        <div>
                            <p>Телефон:</p>
                            <p><a href="tel:89777133452">8(495) 378-12-73</a></p>
                        </div>
                    </div>
                </div>
                <div class="formcont">
                    <div class="ttl">
                        <h4>Обратная связь:</h4>
                    </div>
                    <form class="form1" action="system/controllers/users/questions.php" method="POST" autocapitalize="off">
                        <div class="forma_one">
                            <div class="form-item">
                                <input class="names" data-length="30" list="names" type="text" name="name" placeholder="Ваше имя:"> 
                            </div>
                            <?php if (isset($_GET['wrong'])): ?>
                                <div class="padding-5 text-align-center text-i-red">
                                    Некорректный e-mail. Попробуйте еще раз.
                                </div>
                            <?php endif; ?>
                            <div class="form-item">
                                <input class="mail" data-length="30" type="email" name="emails" placeholder="E-mail:">
                            </div>
                            <div class="form-item">
                                <input class="phone" data-length="12" type="phone" name="phones" placeholder="Телефон: 8 925 123456">
                            </div>
                            <textarea class="area" data-length="500" name="description" placeholder="Ваше сообщение..."></textarea>
                            <div class="form-item">
                                <input class="sent" type="submit" value="ОТПРАВИТЬ ВОПРОС">
                            </div>
                            <div class="ofer">
                                <p>
                                    Нажимая кнопку "Отправить" вы соглашаетесь с   
                                    <a href="polzovatelskoe-soglashenie">Пользовательским соглашением</a> и 
                                    <a href="polozhenie-o-personalnyix-dannyix">Положением о Персональных данных</a>
                                </p>
                            </div>
                        </div>
                    </form>

                    


                    
                </div>
            </div>
            <div class="">
                <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/about/o_nas.php');?>
            
                <div class="text-align-center nav service center-block1">
                    <h2 class="service_title">Мы на Карте</h2>
                    <p class="service_text text-i">Мы стараемся для Вас каждый день!</p>
                    <!-- <a class="link" href="catalog.php">Посмотреть Все услуги</a> -->
                </div>
            </div>
            <div id="map" ></div>
            <div class="">
                <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/invoc/index.php');?>
            
                <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/components/handler/form.php');
                    include($_SERVER['DOCUMENT_ROOT'] . '/components/footer/index.php');
                    
                ?>
            </div>     
        </div>
       
   

