<?php

namespace App\Model;

class Circle
{
    protected $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function calculateSurface()
    {
        return pi() * $this->radius * $this->radius;
    }

    function calculateCircumference()
    {
        return pi() * 2 * $this->radius;
    }
}