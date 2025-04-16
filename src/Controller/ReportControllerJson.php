<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportControllerJson
{
    #[Route("/api/quote", name:"quote")]
    public function jsonNumber(): Response
    {
        $number = random_int(0, 3);
        $quotes = array("a quote is a piece of text","numbers can be quoted","daily quota of quotes not reached", "i love you");

        $data = [
            'quote of the day:' => $quotes[$number],
            'timestamp:' => date("Y-m-d, H:i:s")
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}