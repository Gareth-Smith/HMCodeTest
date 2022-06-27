<?php

namespace App\Model;

class Triangle
{
    protected $a;

    protected $b;
    
    protected $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function calculateSurface()
    {
        return 0.25 * sqrt(($this->a + $this->b + $this->c) * (-$this->a + $this->b + $this->c) * ($this->a - $this->b + $this->c) * ($this->a + $this->b - $this->c));
    }

    function calculateCircumference()
    {
        return $this->a + $this->b + $this->c;
    }
}