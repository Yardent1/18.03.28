<?php


class Human {
   
    protected $name;
    protected $surname;
    protected $age;
    protected $address;
    
    
    public function __construct($name, $surname, $age, $address) {
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->address=$address;
    }
    
    public function __toString() {
        $str='';
        $str.='Имя: '.$this->name.'<br>';
        $str.='Фамилия: '.$this->surname.'<br>';
        $str.='Возраст: '.$this->age.'<br>';
        $str.='Адрес: '.$this->address.'<br>';
        return $str;
    }
    
}