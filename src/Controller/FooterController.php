<?php

namespace App\Controller;

use App\Repository\HoraireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FooterController extends AbstractController
{
    #[Route('/footer', name: 'app_footer', methods: ['GET'])]
    public function index(HoraireRepository $repo): Response
    {
        return $this->render('footer/index.html.twig', [
           
            'horairedujour' => $repo->findAll(),
        ]);
    }
}
