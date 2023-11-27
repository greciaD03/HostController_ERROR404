<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page/10', name: 'app_page1')]
    public function index(): Response
    {
        return $this->render('page/pag1.html.twig', [
            'pag' => 'página: 10',
        ]);
    }

    #[Route('/page/20', name: 'app_page2')]
    public function photo2(): Response
    {
            return $this->render('page/pag2.html.twig', [
                'pag' => 'página: 20',
            ]);
    }

    #[Route('/page/30', name: 'app_page3')]
    public function photo3(): Response
    {
            return $this->render('page/pag3.html.twig', [
                'pag' => 'página: 30',
            ]);
    }
}
