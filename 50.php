<?php

trait TestTrait
{
    public function method1(): int
    {
        return 1;
    }

    // Абстрактный метод:
    abstract public function method2();
}


class Test
{
    use TestTrait;

    public function method2(): int
    {
        return 2;
    }
}

$t = new Test;
echo $t->method1();

