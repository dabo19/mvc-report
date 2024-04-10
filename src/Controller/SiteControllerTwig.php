<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteControllerTwig extends AbstractController
{
    #[Route("/about", name: "about_controller")]
    public function about(): Response
    {
        return $this->render('about_controller.html.twig');
    }

    #[Route("/api", name: "api_controller")]
    public function api_controller(): Response
    {
        return $this->render('api_controller.html.twig');
    }

    #[Route("/lucky", name: "lucky_controller")]
    public function number(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('lucky_number.html.twig', $data);
    }

    #[Route("/report", name: "report_controller")]
    public function report(): Response
    {
        return $this->render('report_controller.html.twig');
    }

    #[Route("/", name: "start_controller")]
    public function startpage(): Response
    {
        return $this->render('start_controller.html.twig');
    }
}







