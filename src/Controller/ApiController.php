<?php
namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;

class ApiController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/shows")
     */
    public function getShowsAction()
    {
        $data = [
            'aa',
            'bbb',
        ];
//        return $data;
//        $view = $this->view($data, 200);
//        return $this->handleView($view);
        $view = new View($data, 200);
        $view->setFormat('json');
        return $this->handleView($view);
    }

    /**
     * @Rest\Get("/shows/{id}")
     */
    public function getShowAction($id)
    {
        $data = [
            'aa',
            'bbb',
        ];
//        return $data;
//        $view = $this->view($data, 200);
//        return $this->handleView($view);
        $view = new View($data, 200);
        return $this->handleView($view);
    }
}
