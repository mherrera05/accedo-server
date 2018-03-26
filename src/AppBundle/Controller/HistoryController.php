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

use AppBundle\Entity\History;

class HistoryController extends Controller
{
     /**
     * Get Movies
     *
     * @Annotations\View()
     * @Get("/histories",
     *  name="api_list_history",
     *  options={ "method_prefix" = false })
     * @param Request               $request      the request object
     * @return array
     */
    public function listAction(Request $request)
    {
        $histories = $this->getDoctrine()
            ->getRepository('AppBundle:History')
            ->findAll();

        return View::create($histories, 200);
    }

     /**
     * Set History
     *
     * @Annotations\View()
     * @Post("/histories",
     *  name="api_create_history",
     *  options={ "method_prefix" = false })
     * @param Request               $request      the request object
     * @return array
     */
    public function createAction(Request $request)
    {
        $result = null;
        $emg = $this->getDoctrine()->getManager();

        $history = new History();
        $history
            ->setTitle($request->get("title"))
            ->setContent($request->get("content"))
            ->setImage($request->get("images"))
            ->setResourceId($request->get("id"))
        ;

        $emg->persist($history);

        try {
            $emg->flush();
            $result = "OK";
        } catch (\Exception $e) {
            $result = $e->getMessage();
        }

        return View::create($result, 200);
    }
}
