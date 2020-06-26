<?php

namespace App\Controller;

use App\Repository\CitiesRepository;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchByCityController extends AbstractController
{


    /**
     * @Route("/searchByCity", name="searchByCity")
     * @param CitiesRepository $citiesRepository
     * @return Response
     */
    public function index(CitiesRepository $citiesRepository)
    {

        $cities = $citiesRepository->findAll();

        return $this -> render('search/search_by_city.html.twig', [
            'cities' => $cities,
            'citiesCount' => count($cities)
        ]);
    }

    /**
     * @Route("/searchByCity/cityName/{city}", name="cityNameRoute")
     * @param $city
     * @param ProductsRepository $productsRepository
     * @return Response
     */
    public function searchByCity($city, ProductsRepository $productsRepository)
    {

        $jsonContent = file_get_contents("https://api.meteo.lt/v1/places/". $city . "/forecasts/long-term");

        $jsonData = json_decode(($jsonContent), true);


        $detectedWeather = $jsonData['forecastTimestamps'][0]['conditionCode'];

        $airTemperature = $jsonData['forecastTimestamps'][0]['airTemperature'];


        $products = $productsRepository->findBy(['weatherCondition' => $detectedWeather], $limit = null, $offset = null);

        return $this->render('search/show_by_city.html.twig', [
            'products' => $products,
            'totalProducts' => count($products),
            'cityName' => $city,
            'weatherType' => $detectedWeather,
            'airTemperature' => $airTemperature
        ]);

    }


}
