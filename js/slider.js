let counter = 0;
// cчетчик

let slidesAll = $('.sliderTop').length
// длинна всего масива слайдов

let firstSlide = $('.sliderTop').eq(0).clone();
//clone() кланируем элемент eq(0)выбрали какой элемент
$('.sliderT').append(firstSlide);
// append вставка в конец

$('.slaider-stelka-right').click (function () {

    if (counter != 2) {
        counter++;  //если != не равно  тогда мы прибавляем +100
       
        $('.sliderT').animate({
            'left' : (-100 * counter) + '%'
        }, 500);
    }else{
        counter++;

        $('.sliderT').animate({
            'left': (-100 * counter) + '%'
        }, 500, function(){
            $('.sliderT').css('left', 0);
        }); //function(){}); функция по заверщению другой функции

        counter = 0; 
        //если равен 4 возвращяем в 0
    }
});

// автоматика переключений
$('.slaider-stelka-right').click, setInterval (function () {

    if (counter != 2) {
        counter++;  //если != не равно  тогда мы прибавляем +100
       
        $('.sliderT').animate({
            'left' : (-100 * counter) + '%'
        }, 500);
    }else{
        counter++;

        $('.sliderT').animate({
            'left': (-100 * counter) + '%'
        }, 500, function(){
            $('.sliderT').css('left', 0);
        }); //function(){}); функция по заверщению другой функции

        counter = 0; 
        //если равен 4 возвращяем в 0
    }
    setTimeout(counter, 8000);
}, 8000);


$('.slaider-stelka-left').click(function () {

    if (counter == 0) {
        counter = slidesAll;

        $('.sliderT').animate({
            'left': (-100 * counter) + '%' //при клики с первого слайда (значение его 0 перескакиваем на 500(клон) мнгновенно)
        }, 0, function () { // и далее делаем функцию по звершению для плавного переходна на 400
            $('.sliderT').animate({
                'left': (-100 * --counter) + '%'//-100 * 500=400(это ) (--counter для уменьшения на 1или100) делаем это уже за 500мсек
            }, 500);
        })
    } else {
        counter--; // во всех остальных случаях counter--;( на одно значение меньше)
        $('.sliderT').animate({
            'left': (-100 * counter) + '%'
        }, 500);
    }

});
