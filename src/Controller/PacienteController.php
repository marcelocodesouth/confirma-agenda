<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PacienteController extends AbstractController
{
    /**
     * @Route("/paciente", name="paciente")
     */
    public function index(): Response
    {
        $paciente = new Paciente();

        $this->createForm(PacienteType::class, $paciente);

        return $this->render('paciente/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
