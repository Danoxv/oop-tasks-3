<?php

class User
{
    private $name;
    private $age;

    public function __set($prop, $val)
    {
        if ($prop == 'name') {
            if ($prop != '') { // проверяем имя на непустоту
                $this->$prop = $val;
            }

        }elseif($prop == 'age'){
            if ($val >= 0 && $val <= 70) {
                $this->$prop = $val;
            }
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
