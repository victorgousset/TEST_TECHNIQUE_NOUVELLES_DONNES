<?php

namespace App\Controller;

use App\Entity\ModeleVoiture;
use App\Entity\Parking;
use App\Entity\Voiture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        /*
            $repVoiture = $this->getDoctrine()->getRepository(Voiture::class);
            $voiture = $repVoiture->findAll();
            $repModelVoiture = $this->getDoctrine()->getRepository(ModeleVoiture::class);
            $ModeleVoiture = $repModelVoiture->findAll();
        */

        $rep = $this->getDoctrine()->getRepository(Parking::class);
        $parking = $rep->findAll();

        return $this->render('home/index.html.twig', compact('parking'));
    }
}
