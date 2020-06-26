<?php

namespace App\Controller;

use App\Repository\CitiesRepository;
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
    public function searchByCity(CitiesRepository $citiesRepository)
    {

        $cities = $citiesRepository->findAll();

        return $this -> render('search_by_city.html.twig', [
            'cities' => $cities
        ]);
    }

}
