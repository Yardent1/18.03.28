<?php

class Avto {
    
    protected $V;
    protected $type;
    protected $color;
    protected $gos_number;
    
    public function __construct($V, $type, $color, $gos_number) {
        $this->V=$V;
        $this->color=$color;
        $this->type=$type;
        $this->gos_number=$gos_number;
    }
    
    public function __toString() {
        $str='';
        $str.='Объем двигателя: '.$this->V.'<br>';
        $str.='Тип кузова: '.$this->type.'<br>';
        $str.='Цвет: '.$this->color.'<br>';
        $str.='Гос номер: '.$this->gos_number.'<br>';
        return $str;
    }
}
