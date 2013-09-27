<?php

/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;

class AbstractController extends ContainerAware
{
    protected $store;

    protected function getStore()
    {
        if (!$this->store) {

            $this-> store = $this->container->get('vespolina.store.store_resolver')->getStore();
        }

        return $this->store;
    }

    public function render($view, array $parameters = array(), Response $response = null)
    {
       return ($this->container->get('templating')->renderResponse($view, $parameters, $response));
    }

    protected function getEngine()
    {
        return 'twig';
    }
}
