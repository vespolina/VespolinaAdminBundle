<?php

/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\AdminBundle\Controller\Dashboard;

use Vespolina\AdminBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    public function indexAction()
    {
        return $this->render('VespolinaAdminBundle:Dashboard:index.html.twig', array());
    }
}
