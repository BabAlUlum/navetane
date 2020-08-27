<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PartiteController extends AbstractController
{
    /**
     * @Route("/partite", name="partite")
     */
    public function index()
    {
        return $this->render('partite/index.html.twig', [
            'controller_name' => 'PartiteController',
        ]);
    }
}
