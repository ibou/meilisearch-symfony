<?php

namespace App\Controller;

use App\Factory\PostFactory;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private readonly PostRepository $postRepository,
    ) {}

    #[Route('/', name: 'home.index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', []);
    }
}
