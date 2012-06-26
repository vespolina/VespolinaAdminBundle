<?php

namespace Vespolina\AdminBundle\Controller\Dashboard;

use Vespolina\AdminBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{

    public function indexAction()
    {
        return $this->render('VespolinaAdminBundle:Dashboard:index.html.twig', array());
    }


}
