<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SearchByWeatherController extends AbstractController
{

    /**
     * @Route("/searchByWeather", name="searchByWeather")
     */
    public function searchByWeather()
    {
        return $this -> render('search_by_weather.html.twig');
    }

}
