<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteControllerJson
{
    #[Route("/api/quote", name: "quote_controller")]
    public function jsonNumber(): Response
    {
        date_default_timezone_set("Europe/Oslo");

        $number = random_int(0, 5);
        $date = date('l jS \of F Y h:i:s A');

        $array = array("All that glitters is not gold. - William Shakespeare", "He travels the fastest who travels alone. - Rudyard Kipling",
        "Houston, we have a problem. - Jim Lovell ", "I'll be back. - Terminator ", "May the Force be with you. - Star Wars", "United we stand, divided we fall. - Aesop");

        $data = [
            'Quote-message' => 'Below is a randomly selected quote.',
            'Random-quote' => $array[$number],
            'Date and timestamp' => $date,
        ];

        //return new JsonResponse($data);
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/date", name: "date_controller")]
    public function jsonDate(): Response
    {
        $date = date('l jS \of F Y');

        //return new JsonResponse($data);
        $response = new JsonResponse($date);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
