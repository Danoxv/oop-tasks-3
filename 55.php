<?php

class User
{
    private $name;
    private $age;

    public function __set($prop, $val)
    {
        if ($prop != '' || $val >= 0 && $val <= 70) { // проверяем имя на непустоту
            $this->$prop = $val;
        }

    }

    public function __get($prop)
    {
        return $this->$prop;
    }
}

$u = new User;
$u->name = "Игорь";
$u->age = 25;
echo $u->name;
echo $u->age;
?>
