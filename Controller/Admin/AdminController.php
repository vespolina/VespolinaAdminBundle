<?php

namespace Vespolina\AdminBundle\Controller\Admin;

use Vespolina\AdminBundle\Controller\AbstractController;

class AdminController extends AbstractController
{

    public function indexAction()
    {
        return $this->render('VespolinaAdminBundle:Admin:index.html.twig', array());
    }


}
