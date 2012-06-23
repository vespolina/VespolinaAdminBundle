<?php

namespace Vespolina\AdminBundle\Controller\Sales;

use Vespolina\AdminBundle\Controller\AbstractController;

class SalesController extends AbstractController
{

    public function indexAction()
    {
        return $this->render('VespolinaAdminBundle:Sales:index.html.twig', array());
    }
}
