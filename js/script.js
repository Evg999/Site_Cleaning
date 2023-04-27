// кнопка вверх скролит вверх
$(function() {
 
    $(window).scroll(function() {
    
        if($(this).scrollTop() != 0) {
        
        $('.arrows').fadeIn();
        
        } else {
        
        $('.arrows').fadeOut();
        
        }
    
    });
    

    $('.arrows').click(function() {
    
        $('html').animate({scrollTop:0},800);
    
    });
 
});



function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
      change.target.classList.add('element-show');
    }
  });
}
let options = { rootMargin: '300px'};
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.parts');
for (let elm of elements) {
  observer.observe(elm);
}
// ------------------------------------------------------

$('#questionForm').submit(function(e) {
    
    $('.error').remove();
    // удаление ошибки

    let fieldName = $('[name="surname"]');
    let fieldNumber = $('[name="phone"]');
    let fieldEmail = $('[name="email"]');
    let fieldText = $('[name="adress"]');
    let fieldNameValue = fieldName.val();
    let fieldNumberValue = fieldNumber.val();
    let fieldEmailValue = fieldEmail.val();
    let fieldTextValue = fieldText.val();
    
    // []обращаемся 
    // val-value какое значение поля
    // полученный ответ запишем в переменную

    if (fieldNameValue === '' || fieldNameValue.length >= 30) {
        if (fieldNameValue === '') fieldName.before('<div class="error">Заполните поле, пожалуйста</div>');
        if (fieldNameValue.length >= 30) fieldName.before('<div class="error">Слишком длинное имя!</div>');
        
        e.preventDefault();
    }
    // // length кол-во букв и пробело
    
    if (fieldNumberValue === '' || fieldNumberValue.length >= 12) {
        if (fieldNumberValue === '') fieldNumber.before('<div class="error">Заполните поле, пожалуйста</div>');
        if (fieldNumberValue.length >= 12) fieldNumber.before('<div class="error">Слишком длинный телефонный номер!</div>');
        
        e.preventDefault();
    }
    
    if (fieldTextValue === '' || fieldTextValue.length >= 100) {
        if (fieldTextValue === '') fieldText.before('<div class="error">Заполните поле, пожалуйста</div>');
        if (fieldTextValue.length >= 100) fieldText.before('<div class="error">Слишком длинный адресс!</div>');
        
        e.preventDefault();
    }

});


// keyup - событие нажатие на клавишу
// $('[name="userName"]').keyup(function(e){
$('input, textarea').keyup(function(e){
        
    let field = $(this);
    let len = field.attr('data-length')
    // .attr() позволяет получать значение атрибута в данном случае мы узнаём в выбранном поле атрибут data-length
    // относительно len будут считаться параметры заполнения
    let fieldValue = field.val();

    // prev() - предыдущий элемент
    // next()- следующий элемент

    field.prev('.error').remove();

    if (fieldValue === '' || fieldValue.length >= len) {

        if (fieldValue === ''){
            let fieldName = field.attr('placeholder');

            field.before(`<div class="error">Заполните поле <b>${fieldName}</b>!</div>`);
            
        } 
        if (fieldValue.length >= len) field.before('<div class="error">Слишком длинный текст!</div>');
        
        e.preventDefault();
    }
//  console.log(e.keyCode);
// е выступает как объект
});

// $('[name="email"]').keyup(function(e){


//     let fieldEmail = $('[name="email"]');
//     let fieldEmailValue = fieldEmail.val();

//     // prev() - предыдущий элемент
//     // next()- следующий элемент

//     fieldEmail.prev('.error').remove();

//     if (fieldEmailValue === '' || fieldEmailValue.length >= 30) {
//         if (fieldEmailValue === '') fieldEmail.before('<div class="error">Заполни поле!</div>');
//         if (fieldEmailValue.length >= 30) fieldEmail.before('<div class="error">Слишком длинный текст!</div>');
        
//         e.preventDefault();
//     }
// });

// $('[name="number"]').keyup(function(e){


//     let fieldNumber = $('[name="number"]');
//     let fieldNumberValue = fieldNumber.val();

//     // prev() - предыдущий элемент
//     // next()- следующий элемент

//     fieldNumber.prev('.error').remove();

//     if (fieldNumberValue === '' || fieldNumberValue.length >= 20) {
//         if (fieldNumberValue === '') fieldNumber.before('<div class="error">Заполни поле!</div>');
//         if (fieldNumberValue.length >= 20) fieldNumber.before('<div class="error">Слишком длинный текст!</div>');
        
//         e.preventDefault();
//     }
// });

// $('[name="texts"]').keyup(function(e){


//     let fieldText = $('[name="texts"]');
//     let fieldTextValue = fieldText.val();

//     // prev() - предыдущий элемент
//     // next()- следующий элемент

//     fieldText.prev('.error').remove();

//     if (fieldTextValue === '' || fieldTextValue.length >= 50) {
//         if (fieldTextValue === '') fieldText.before('<div class="error">Заполни поле!</div>');
//         if (fieldTextValue.length >= 50) fieldText.before('<div class="error">Слишком длинный текст!</div>');
        
//         e.preventDefault();
//     }
// });
    
// // нажатие на esc убирает .screen
$(window).keyup(function(eventObject){
        if( eventObject.which == 27 ){
            $('.screen').css('display', 'none');
        };
	
});






// ------------------------------------------------------


 // раскрытие текста при клики на main-head и закрытие его
$('.mainhead').click(function(){
    $(this).parents(".main").find(".texts").slideToggle(1000);
    // $('.text').slideToggle();
});


// Фотогалерея
$('.gallery-item, image-popup-zoom').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  },
  zoom:{
    enabled: true,
    duration: 300
    }
});

$('.krestik-box').click(function(e){
     e.preventDefault()
    $('.screen').css('display', 'none').fadeOut() 
    // $('.screen').fadeOut() 
});

// --------------------------------------
// кнопка по середине и header-link stick-center perehod "Оставить заявку" одинаковая функция попадаем на фору заявки .screen
$('.perehod').click(function(e){
    // отмена поведения браузера по умолчанию(например для ссылок)
    e.preventDefault()

    // console.log('click')
    // прописывать для проверки самого себя

    // $('.screen').css('display','flex')
    $('.screen').css('display', 'flex').hide().fadeIn()
    $('nav').css('z-index', '0')
});
// hide=css('display','none') СКРЫТЬ ЭЛЕМЕНТ
// show=ПОКАЗАТЬ ЭЛЕМНТ

// krestik при клики скрывается
$(document).ready(function() {

	//E-mail Ajax Send
	$("questionForm").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "GET",
			url: "system/controllers/orders/create.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});
// -------------------------------------------------------

// карусель для 2 слайдев

$('.rev').slick({
  dots: true,
  autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    
    {
      breakpoint: 805,
      settings: {
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


// карусель для 3 слайдев

$('.rev_slider').slick({
    autoplay: true,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    
    {
      breakpoint: 805,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


// ответы вопросы

$(".faq-item-question").click(function(){
    $(this).parents(".faq-item").find(".faq-item-answer").slideToggle();
});




//AJAX запрос - корзина - добавление товара
function toBasket() {
    // создание нового экземпляра класса для запросов
    let xhr = new XMLHttpRequest();

    //формирование url
    let url = 'https://gosclean.ru/system/controllers/basket/to_basket.php';
    let str_get = window.location.search;
    url = url + str_get;

    //запуск метода open() для установки параметров запроса (метод GET, куда - HTTP....., если true - то запрос асинхронный, иначе запрос синхронный)
    xhr.open('GET', url, true);

    //при получении ответа на запрос
    xhr.onreadystatechange = function () {
        //если ответ положительный
        if (xhr.readyState == 4 && xhr.status == 200) {
            // alert(xhr.responseText);
            // налету меняем кол во в корзине при дабавления товара через карточку
            document.getElementById('basket-count').innerHTML = xhr.responseText;
        }
    };

    xhr.send(null);
}




//AJAX запрос - корзина - добавление товара fromBasket удаление из корзины
function fromBasket() {

    // записываем в переменную id  товаров которые в корзине для определения удаления одно из если мы нажмём на крести, 
    // для того что бы среди множества с могли определить какой именно товар нам удалять. действия происходят  в basket.php там же мы и заложили data-id, что бы сдесь его считать
    let id = event.target.getAttribute('data-id'); // получаем id

    // определяем крестиком какой именно товар ты выбрал для удаления, для удаление в нём находим ближайший родитель item и его за remove (удаляем)
    event.target.closest('.basket-row').remove(); //скрываем товар визуально

    // создание нового экземпляра класса для запросов
    let xhr = new XMLHttpRequest();

    //формирование url
    let url = 'https://gosclean.ru/system/controllers/basket/from_basket.php';
    let str_get = '?id=' + id;
    url = url + str_get;

    //запуск метода open() для установки параметров запроса (метод GET, куда - HTTP....., если true - то запрос асинхронный, иначе запрос синхронный)
    xhr.open('GET', url, true);

    //при получении ответа на запрос
    xhr.onreadystatechange = function () {
        //если ответ положительный
        if (xhr.readyState == 4 && xhr.status == 200) {
            // alert(xhr.responseText);
            // налету меняем кол во в корзине при дабавления товара через карточку
            document.getElementById('basket-count').innerHTML = xhr.responseText;
        }
    };


    xhr.send(null);
}




//AJAX запрос - изменение суммы товаров в корзине при удалении товаров из корзины и при изменении способа доставки
function getSumm() {
    // создание нового экземпляра класса для запросов
    let xhr = new XMLHttpRequest();

    //формирование url
    let url = 'https://gosclean.ru/system/controllers/basket/get_summ.php';

    //запуск метода open() для установки параметров запроса (метод GET, куда - HTTP....., если true - то запрос асинхронный, иначе запрос синхронный)
    xhr.open( 'GET', url , true );

    //при получении ответа на запрос
    xhr.onreadystatechange = function () {
        //если ответ положительный
        if (xhr.readyState == 4 && xhr.status == 200) {
            //и не равен - 0
            if (Number(xhr.responseText) != 0) {
                let indexSelect = document.getElementById('delivery-select').options.selectedIndex;
                let priceDelivery = 1200;

                //заменяю сумму
                document.getElementById('summ-one').innerHTML = xhr.responseText + ' руб.';
                document.getElementById('summ-two').innerHTML = xhr.responseText + ' руб.';
                if (indexSelect == 0) {
                    document.getElementById('summ-total').innerHTML = Number(xhr.responseText) + priceDelivery + ' руб.';
                    document.getElementById('delivery-price').innerHTML = '';
                    document.getElementById('delivery-price-ajax').innerHTML = `
                                                                                <div id="delivery-price" class="flex-box justify-content-center">
                                                                                    <p class="margin-0 padding-5 width-45 text-align-end">Доставка:</p>
                                                                                    <p class="margin-0 padding-5 width-45">500 руб.</p>
                                                                                </div>
                                                                            `;
                } else {
                    document.getElementById('summ-total').innerHTML = xhr.responseText + ' руб.';
                    document.getElementById('delivery-price').innerHTML = '';
                    document.getElementById('delivery-price-ajax').innerHTML = `
                                                                                <div id="delivery-price" class="flex-box justify-content-center">
                                                                                    <p class="margin-0 padding-5 width-45 text-align-end">Доставка:</p>
                                                                                    <p class="margin-0 padding-5 width-45">оплата при получении</p>
                                                                                </div>
                                                                            `;
                }
            } else {
                //убираю и заменяю элементы со страницы
                document.getElementById('reset').innerHTML = '';
                document.getElementById('summ-one-block').innerHTML = 'Ваша корзина пуста';
                document.getElementById('basket-delete').innerHTML = '';
                document.getElementById('summ-two-block').innerHTML = '';
                document.getElementById('delivery-price').innerHTML = '';
                document.getElementById('summ-total-block').innerHTML = '';
            }
        }
    };

    xhr.send(null);
}


