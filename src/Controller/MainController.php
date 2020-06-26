<?php

namespace App\Controller;

use App\Repository\CitiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this -> render('index.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this -> render('contact.html.twig');
    }

    /**
     * @Route("/how_it_works", name="howItWorks")
     */
    public function how()
    {
        return $this -> render('how_it_works.html.twig');
    }

    /**
     * @Route("/privacy", name="privacy")
     */
    public function privacy()
    {
        return $this -> render('privacy_policy.html.twig');
    }


}
