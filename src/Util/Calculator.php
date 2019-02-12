<?php

namespace App\Util;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $this->add($a, -$b);
    }
}
