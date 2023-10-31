<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VenteVoituresController extends AbstractController
{
    public function vente_voitures(): Response
    {
        return $this->render('VenteVoitures.html.twig', []);
    }
}