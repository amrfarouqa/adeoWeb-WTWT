<?php

namespace App\Controller;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchByWeatherController extends AbstractController
{

    /**
     * @Route("/searchByWeather", name="searchByWeather")
     * @return Response
     */
    public function index()
    {
        return $this -> render('search/search_by_weather.html.twig');
    }

    /**
     * @Route("/searchByWeather/weatherType/{type}", name="weatherTypeRoute")
     * @param $type
     * @param ProductsRepository $productsRepository
     * @return Response
     */
    public function searchByWeather($type, ProductsRepository $productsRepository)
    {

        $products = $productsRepository->findBy(['weatherCondition' => $type], $limit = null, $offset = null);

        return $this -> render('search/show_by_weather.html.twig', [
            'products' => $products,
            'weatherType' => $type,
            'totalProducts' => count($products)
        ]);

    }

}
