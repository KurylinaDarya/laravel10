<?php
/*
Продолжаем работу с реализацией класса Worker, когда ЗП задавалась через конструктор класса.
Добавить статический метод класса, который выводит на экран среднюю заработную плату
для созданных рабочих.
Инициализируем: Петя 500, Вася 1000
Потом меняем через setSalary Пете ЗП на 2000
И выводим averageSalary (должно быть 1500)
*/
class Worker {
    private static $count = 0;
    private static $totalSalary = 0;

    private $name;
    private $salary = 0;
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
        self::$count++;
        self::$totalSalary += $salary;
    }
    public static function averageSalary() {
        return self::$totalSalary/self::$count;
    }
   public function setSalary($salary) {
        self::$totalSalary = self::$totalSalary - $this->salary + $salary;
        $this->salary = $salary;
  }
}
$petya = new Worker('Петя', 500);
$vasya = new Worker('Вася', 1000);

echo 'Средняя заработная плата рабочих: '.Worker::averageSalary().'<br>';

$petya->setSalary(2000);
echo 'Средняя заработная плата рабочих после изменения: '.Worker::averageSalary();



/* Модифицируйте класс Worker так, чтобы имя и возраст заполнялись в методе __construct
при создании объекта (вот так: new Worker(имя, возраст) ).
Создайте объект этого класса 'Дима', возраст 25, зарплата 1000.
Выведите на экран произведение его возраста и зарплаты.
*/
//class Worker {
//    public $name;
//    public $age;
//    public $salary;
//    function __construct($name, $age){
//        $this->name = $name;
//        $this->age = $age;
//    }
//}
//$dima = new Worker('Дима', 25);
//$dima->salary= 1000;
//$result = $dima->age * $dima->salary;
//
//echo 'Произведение: ' .$result. '<br>';
