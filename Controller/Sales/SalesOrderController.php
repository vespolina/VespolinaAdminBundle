<?php

namespace Vespolina\AdminBundle\Controller\SalesOrder;

use Vespolina\AdminBundle\Controller\AbstractController;

class SalesOrderController extends AbstractController
{

    public function indexAction()
    {
        return $this->render('VespolinaAdminBundle:SalesOrder:index.html.twig', array());
    }
}
