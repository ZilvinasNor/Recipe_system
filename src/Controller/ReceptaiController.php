<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Receptas;

class ReceptaiController extends AbstractController
{

    function cmp($a, $b)  {return var_dump($a["data"] > $b["data"]);}

    /**
     * @Route("/receptai", name="home")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Receptas::class);

        $receptai =$repository->findAll();
        return $this->render('receptai/index.html.twig', [
            'receptai' => $receptai,
            'controller_name' => 'ReceptaiController',
        ]);
    }

    /**
     * @Route("/receptai/top", name="top")
     */
    public function top()
    {
        return $this->render('receptai/top.html.twig', [
            'controller_name' => 'ReceptaiController',
        ]);
    }

    /**
     * @Route("/receptai/blynai", name="blynai")
     */
    public function blynai()
    {
        return $this->render('receptai/blynai.html.twig', [
            'controller_name' => 'ReceptaiController',
        ]);
    }

    /**
     * @Route("/receptai/kepsniai", name="kepsniai")
     */
    public function kepsniai()
    {
        return $this->render('receptai/kepsniai.html.twig', [
            'controller_name' => 'ReceptaiController',
        ]);
    }

    /**
     * @Route("/receptai/gerimai", name="gerimai")
     */
    public function gerimai()
    {
        return $this->render('receptai/gerimai.html.twig', [
            'controller_name' => 'ReceptaiController',
        ]);
    }

    /**
     * @Route("/receptai/konditerija", name="konditerija")
     */
    public function konditerija()
    {
        return $this->render('receptai/konditerija.html.twig', [
            'controller_name' => 'ReceptaiController',
        ]);
    }

    /**
     * @Route("/receptai/kontaktai", name="kontaktai")
     */
    public function kontaktai()
    {
        return $this->render('receptai/kontaktai.html.twig', [
            'controller_name' => 'ReceptaiController',
        ]);
    }
}
