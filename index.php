<?php

spl_autoload_register (function ($class) {
    
    $classFileName='vendor'.DIRECTORY_SEPARATOR.$class.'.php';
    if(file_exists($classFileName)){
    include_once $classFileName;
    return true;
    }
    return FALSE;
});



//$testObj=new Test();
//$testObj->name='Vasya';
//var_dump($testObj);
//echo ($testObj->name);


//$human=new Human('Вася', 'Пупкин', 22, 'Днепр, пр Кирова, 96Б');
//echo $human;

$student=new Student('Коля', 'Тросточкин', 33, 'Киев, Банковская, 44');
echo $student;