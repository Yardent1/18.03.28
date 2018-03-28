<?php


class Taxi extends Avto{
    protected $park_number;
    protected $taxi;
    
    public function __construct($V, $type, $color, $gos_number, $park_number, $taxi) {
        parent::__construct($V, $type, $color, $gos_number);
        $this->park_number=$park_number;
        $this->taxi=$taxi;
    }
    
    public function __toString() {
        $str=parent::__toString();
        $str.='№ таксопарка:'.$this->park_number.'<br>';
        $str.='ТаксиЖ '.$this->taxi.'<br>';
        return $str;
    }
}
