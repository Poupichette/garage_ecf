<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GarageController extends AbstractController
{
    public function home(): Response
    {
        return $this->render('Garage.html.twig', []);
    }
}