<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // Дані для передачі в Twig-шаблон
        $user = [
            'isLoggedIn' => true, // або false
            'name' => 'Denys'
        ];

        return $this->render('home.html.twig', [
            'page_title' => 'Welcome to Symfony!',
            'user' => $user
        ]);
    }
}
