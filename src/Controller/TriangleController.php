<?php

namespace App\Controller;

use App\Model\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{a}/{b}/{c}', name: 'triangle')]
    public function index(string $a, string $b, string $c): JsonResponse
    {

        $triangle = new Triangle($a, $b, $c);
        $jsonResponse = [
            "type" => "triangle",
            "a" => $a,
            "b" => $b,
            "c" => $c,
            "surface" => $triangle->calculateSurface(),
            "circumference" => $triangle->calculateCircumference(),
        ];
        
        return $this->json($jsonResponse);
    }
}