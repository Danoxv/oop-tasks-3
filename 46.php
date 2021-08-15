<?php
// Задача 46.1
//Реализуйте класс Country (страна) со свойствами name (название), age (возраст),
// population (количество населения) и
//геттерами для них.
//Пусть наш класс для сокращения своего кода использует уже созданный нами трейт Helper.
//trait Helper
//{
//    private $name;
//    private $age;
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//}
//
//class Country
//{
//    use Helper;
//
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//}
//
//$c = new Country('Russia', 8500);
//echo $c->getName();

//Задача 46.2
//Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method1,
// возвращающий 1, во втором трейте - метод method2, возвращающий 2,
//а в третьем трейте - метод method3, возвращающий 3. Пусть все эти методы будут приватными.


trait Trait1
{
    private function Trait1(): int
    {
        return 1;
    }
}

trait Trait2
{
    private function Trait2(): int
    {
        return 2;
    }
}

trait Trait3
{
    private function Trait3(): int
    {
        return 3;
    }
}

//Задача 46.3 Сделайте класс Test, использующий все три созданных нами трейта.
// Сделайте в этом классе публичный метод getSum, возвращающий сумму результатов методов подключенных трейтов.

class Test
{
    use Trait1, Trait2, Trait3;

     public function getSum()
     {
        return $this->Trait1() + $this->Trait2() + $this->Trait3();
    }
}
$t = new Test;
echo $t->getSum();
