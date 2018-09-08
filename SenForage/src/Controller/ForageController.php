<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ForageController extends AbstractController
{
    /**
     * @Route("/forage", name="forage")
     */
    public function index()
    {
        return $this->render('forage/index.html.twig', [
            'controller_name' => 'ForageController',
        ]);
    }
}
