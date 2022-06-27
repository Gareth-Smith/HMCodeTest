<?php

namespace App\Controller;

use App\Model\Circle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'circle')]
    public function index(string $radius): JsonResponse
    {

        $circle = new Circle($radius);
        $jsonResponse = [
            "type" => "circle",
            "radius" => $radius,
            "surface" => $circle->calculateSurface(),
            "circumference" => $circle->calculateCircumference(),
        ];
        
        return $this->json($jsonResponse);
    }
}