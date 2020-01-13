<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VartotojaiController extends AbstractController
{
    /**
     * @Route("/vartotojai", name="vartotojai")
     */
    public function index()
    {
        return $this->render('vartotojai/index.html.twig', [
            'controller_name' => 'VartotojaiController',
        ]);
    }
}
