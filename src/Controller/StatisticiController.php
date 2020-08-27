<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StatisticiController extends AbstractController
{
    /**
     * @Route("/statistici", name="statistici")
     */
    public function index()
    {
        return $this->render('statistici/index.html.twig', [
            'controller_name' => 'StatisticiController',
        ]);
    }
}
