<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportControllerTwig extends AbstractController
{
    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        $number = random_int(0, 3);
        $animals = array("elephant","frog","giraffe","hippopotamus",);
        $animal = $animals[$number];

        $data = [
            'animal' => $animal,
        ];
        

        
        return $this->render('lucky.html.twig', $data);
    }

    #[Route("/", name: "home")]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/api", name: "api")]
    public function api(): Response
    {
        return $this->render('api.html.twig');
    }
}