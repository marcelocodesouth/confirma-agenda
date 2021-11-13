<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FuncionarioController extends AbstractController
{
    /**
     * @Route("/funcionario", name="funcionario")
     */
    public function index(): Response
    {
        return $this->render('funcionario/index.html.twig', [
            'controller_name' => 'FuncionarioController',
        ]);
    }
}
