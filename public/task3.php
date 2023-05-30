<?php
/* Модифицируйте класс Worker так, чтобы имя и возраст заполнялись в методе __construct
при создании объекта (вот так: new Worker(имя, возраст) ).
Создайте объект этого класса 'Дима', возраст 25, зарплата 1000.
Выведите на экран произведение его возраста и зарплаты.
*/
class Worker {
 public $name;
    public $age;
    public $salary;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}
$dima = new Worker('Дима', 25);
$dima->salary= 1000;
$result = $dima->age * $dima->salary;

echo 'Произведение: ' .$result. '<br>';
