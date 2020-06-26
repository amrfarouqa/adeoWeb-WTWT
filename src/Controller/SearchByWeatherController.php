<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchByWeatherController extends AbstractController
{

    /**
     * @Route("/searchByWeather", name="searchByWeather")
     * @param ProductsRepository $productsRepository
     * @return Response
     */
    public function searchByWeather(ProductsRepository $productsRepository)
    {

        $products = $productsRepository->findAll();

        return $this -> render('search_by_weather.html.twig', [
            'products' => $products
        ]);
    }

}
