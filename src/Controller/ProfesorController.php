<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfesorController extends AbstractController
{
    #[Route('/profesor', name: 'app_profesor')]
    public function index(): Response
    {
        

        $fechaActual = date('d-m-Y');

        return new Response (
            '<html><body>Fecha actual: '.$fechaActual.'</body></html>'
        );

        /* return $this->render('profesor/index.html.twig', [
            'controller_name' => 'ProfesorController',
        ]); */
    }
}
