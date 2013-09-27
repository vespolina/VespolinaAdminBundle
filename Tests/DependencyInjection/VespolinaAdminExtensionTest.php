<?php

/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\AdminBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Vespolina\AdminBundle\DependencyInjection\VespolinaAdminExtension;

class VespolinaAdminExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions()
    {
        return array(
            new VespolinaAdminExtension()
        );
    }

    /** @test */
    public function after_loading_the_correct_parameter_has_been_set()
    {
        $this->load(array('db_driver' => 'orm'));

        $this->assertContainerBuilderHasParameter(
            'vespolina.admin.admin_controller.class',
            'Vespolina\AdminBundle\Controller\Admin\AdminController'
        );

        $this->assertContainerBuilderHasParameter(
            'vespolina.admin.dashboard_controller.class',
            'Vespolina\AdminBundle\Controller\Dashboard\DashboardController'
        );

        $this->assertContainerBuilderHasParameter(
            'vespolina.admin.sales_controller.class',
            'Vespolina\AdminBundle\Controller\Sales\SalesController'
        );

        $this->assertContainerBuilderHasServiceDefinitionWithMethodCall(
            'vespolina.admin.admin_controller', 'setContainer', array('service_container')
        );

        $this->assertContainerBuilderHasServiceDefinitionWithMethodCall(
            'vespolina.admin.dashboard_controller', 'setContainer', array('service_container')
        );

        $this->assertContainerBuilderHasServiceDefinitionWithMethodCall(
            'vespolina.admin.sales_controller', 'setContainer', array('service_container')
        );
    }
}