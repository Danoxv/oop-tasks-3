<?php
//Задача 52.1
//Пусть у вас есть трейт Trait1 и нет трейта Trait2.
//Проверьте, что выведет функция trait_exists для трейта Trait1 и для трейта Trait2.
trait Trait1
{
}

var_dump(trait_exists('Trait2'));


//Задача 52.2
//Выведите на экран список всех объявленных трейтов  get_declared_traits.
var_dump(get_declared_traits());