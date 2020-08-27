<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SquadreController extends AbstractController
{
    /**
     * @Route("/squadre", name="squadre")
     */
    public function index()
    {
        return $this->render('squadre/index.html.twig', [
            'controller_name' => 'SquadreController',
        ]);
    }
}
