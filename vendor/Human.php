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
        $str.='Имя: '.$this->name.'/n';
        $str.='Фамилия: '.$this->surname.'/n';
        $str.='Возраст: '.$this->age.'/n';
        $str.='Адрес: '.$this->address.'/n';
        return $str;
    }
    
}
