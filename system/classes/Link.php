<?
// ПЕРЕИНКОВКА в Услуах

// extends расширяем фунционал, НАСЛЕДУЕМ от класса Unit

class Link extends Unit
{
    // переопределение метода полиморфизм,  пишим название таблицы ,переопределили метода из unita
    public function setTable(){
        return 'core_goods';
    }
    
    // реализуем из интерфейса
    public function title(){
        return $this->getField('title');
    }

    public function url(){
        return $this->getField('url');
    }

}
?>