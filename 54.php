<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }
    public function getName(){
        return $this->name;
    }
}
$u = new User("Игорь", 6 );
echo $u->name;
echo $u->age;

//Задача 54.2 Сделайте класс Date с публичными свойствами year (год), month (месяц) и day (день).
// С помощью магии сделайте свойство weekDay,
// которое будет возвращать день недели, соответствующий дате.
class Date
{

    public $year;
    public $month;
    public $day;

    public function __get($prop)
    {
        if ($prop == 'weekDay') {
            return $this->day . '' . $this->month . '' . $this->year;
        }
    }
}
$d = new Date;
$d->year = 2021;
$d->month = " 08 ";
$d->day = 16;
echo $d->weekDay;

