<?php
/* Задача 2 - Инкапсуляция
Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата)
и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
*/
class Worker
{
    private $name;private $age;private $salary;
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}
$ivan = new Worker;
$ivan->setName('Иван');
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasa = new Worker;
$vasa->setName('Вася');
$vasa->setAge(26);
$vasa->setSalary(2000);

$sumAge = $vasa->getAge() + $ivan->getAge();
$sumSalary = $vasa->getSalary() + $ivan->getSalary();

echo 'Сумма зарплат: ' . $sumSalary . '<br>';
echo 'Сумма возрастов: ' . $sumAge . '<br>';


/* Задача 1 - Public поля */
//class Worker {
// public $name;
//    public $age;
//    public $salary;
//}
//$ivan = new Worker();
//$ivan->name = 'Иван';
//$ivan->age = 25;
//$ivan->salary= 1000;
//
//$vasia = new Worker();
//$vasia->name = 'Вася';
//$vasia->age = 26;
//$vasia->salary= 2000;
//
//echo  'сумму зарплат: </br>';
//print_r($ivan->salary + $vasia->salary);
//
//echo  '</br> сумму возрастов: </br>';
//print_r($ivan->age + $vasia->age);
