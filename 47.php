<?php
//Задача 47.1
//Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3.
// Пусть в первом трейте будет метод method, возвращающий 1, во втором трейте - одноименный метод,
// возвращающий 2, а в третьем трейте - одноименный метод, возвращающий 3.
trait Trait1
{
    private function method(): int
    {
        return 1;
    }
}

trait Trait2
{
    private function method(): int
    {
        return 2;
    }
}

trait Trait3
{
    private function method(): int
    {
        return 3;
    }
}

//Задача 47.2
//Сделайте класс Test, использующий все три созданных нами трейта.
//Сделайте в этом классе метод getSum, возвращающий сумму результатов методов подключенных трейтов.
class Test
{

    use Trait1, Trait2, Trait3 {
        Trait1::method insteadof Trait2;
        Trait1::method insteadof Trait3;
        Trait1::method as method1;
        Trait2::method as method2;
        Trait3::method as method3;
    }

    public function getSum()
    {
         return   $this->method1() + $this->method2() + $this->method3();
    }
}
$t = new Test;
echo $t->getSum();
?>