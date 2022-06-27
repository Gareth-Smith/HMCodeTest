<?php

namespace App\Service;

use App\Model\Circle;
use App\Model\Triangle;

class GeometryCalculator
{
    public function getCircumferenceSum($a, $b): ?float
    {
        if (($a instanceof Triangle || $a instanceof Circle) && ($b instanceof Triangle || $b instanceof Circle)) {
            return $a->calculateCircumference() + $b->calculateCircumference();
        }

        return null;
    }

    public function getSurfaceSum($a, $b): ?float
    {
        if (($a instanceof Triangle || $a instanceof Circle) && ($b instanceof Triangle || $b instanceof Circle)) {
            return $a->calculateSurface() + $b->calculateSurface();
        }

        return null;
    }
}
