<?php
//Задача 53.1
// Сделайте класс User, в котором будут следующие свойства - name (имя),
// surname (фамилия), patronymic (отчество).
// Сделайте так, чтобы при выводе объекта через echo на
// экран выводилось ФИО пользователя (фамилия, имя, отчество через пробел).

class User
{
    private $name;
    private $age;
    private $patronymic;

    public function __construct($name, $age, $patronymic)
    {
        $this->name = $name;
        $this->age = $age;
        $this->patronymic = $patronymic;
    }

    // Реализуем указанный метод:
    public function __toString()
    {
        return $this->name . ' ' . $this->age . ' ' . $this->patronymic;
    }

}

$user = new User('Коля', 25, 'Николаевич ');
echo $user;

//Задача 53.2
// Не подсматривая в мой код, реализуйте такой же класс Arr.
class Arr
{

    private $arr = [];

    public function add($number)
    {
        $this->arr[] = $number;
        return $this;
    }

    public function __toString()
    {

        return array_sum($this->arr);
    }
}

$arr = new Arr;
echo $arr->add(1)->add(2)->add(3); // выведет 6