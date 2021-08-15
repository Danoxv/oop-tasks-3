<?php


trait Trait1
{
    private function method1(): int
    {
        return 1;
    }

    private function method2(): int
    {
        return 2;
    }
}

trait Trait2
{
    use Trait1;

    private function method3(): int
    {
        return 3;
    }
}

class Test
{

    use Trait2;
    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}

$t = new Test;
 echo $t->getSum();
