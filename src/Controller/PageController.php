<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
        ]);
    }

    #[Route('/rent', name: 'app_rentpage')]
    public function buy(): Response
    {
        return $this->render('page/rent.html.twig', [
        ]);
    }

    #[Route('/blog', name: 'app_blogpage')]
    public function blog(): Response
    {
        return $this->render('page/blog.html.twig', [
        ]);
    }

    #[Route('/contact', name: 'app_contactpage')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
        ]);
    }

    #[Route('/aboutus', name: 'app_aboutuspage')]
    public function aboutus(): Response
    {
        return $this->render('page/aboutus.html.twig', [
        ]);
    }
}
