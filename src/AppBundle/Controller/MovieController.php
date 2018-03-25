<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovieController extends Controller
{
     /**
     * Get Movies
     *
     * @Annotations\View()
     * @Get("/movies",
     *  name="api_customer",
     *  options={ "method_prefix" = false })
     * @param Request               $request      the request object
     * @return array
     */
    public function listAction(Request $request)
    {
        $movies = $this->getDoctrine()
            ->getRepository('AppBundle:Entry')
            ->findAll();

        return View::create($movies, 200);
    }
}
