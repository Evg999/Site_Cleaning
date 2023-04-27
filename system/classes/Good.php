<?php
//  ТОВАР 
//  Класс важный, 
//  для описания товара, а методы нужны для отображения конкретных значений которые мы будем брать из БД, этот класс подключаеться и берёт данные из БД 

// // extends расширяем фунционал, НАСЛЕДУЕМ от класса Unit
class Good extends Unit 
{
    // ПРИМЕР static
    // статическое свойство( не сработало нужно через константу)
    public static $has_good = 1;//  ПРИМЕР тема STATIC свойства

    // константу(перепесать нельзя)
    const HAS_GOOD = 1;
    // константу(перепесать нельзя) используем в метиоде для примера
    const IS_REAL = 1;

    // ещё один пример метода
    public static function getGoodStaticInfo()
    {
        return self::IS_REAL; // const = self
    }
    public static function getStaticVar(){
        return self::$has_good;
    }

    // МЕТОД STATIC отличие только в солове STATIC и в теле не может быть $this(псевдо элементы)
    public static function getQuality() //  ПРИМЕР тема STATIC метода
    { 
        if(static::getGoodStaticInfo()){ //const вместо this    const = self
            $text = "Этот товар официальный";
        }else{
            $text = "Этот товар реплика";
        }
        echo $text;
    }//  НАПРИМЕР тема STATIC

    // ПРИМЕР static
// -------------------------------------------------------------------

     // переопределение метода полиморфизм,  пишим название таблицы ,переопределили метода из unita
    public function setTable(){
        // возвращяем значение свойства подставляем в Unit  
        return 'core_goods';
    }
    
    public function price(){
        // getField-получить поле, универсальный метод создаём для вывода всех полей
        return $this->getField('price');
    }

    public function photo(){
        // getField-получить поле, универсальный метод создаём для вывода всех полей
        return $this->getField('photo');
    }

    public function article() {
        return $this->getField('article');
    }

    public function url() {
        return $this->getField('url');
    }


   
}
?>