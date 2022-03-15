<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    #[Route('/error', name: 'error')]
    public function show($exception): Response
    {
        $response = new Response();
        $response->setContent(json_encode([
            'message' =>$exception->getMessage()
        ]));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
