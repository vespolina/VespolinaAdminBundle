<?php

/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\AdminBundle\Tests\DependencyInjection;

use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;
use Vespolina\AdminBundle\DependencyInjection\Configuration;

class ConfigurationTest extends AbstractConfigurationTestCase
{
    protected function getConfiguration()
    {
        return new Configuration();
    }

    /** @test */
    public function the_configuration_db_driver_is_required()
    {
        $this->assertConfigurationIsInvalid(
            array(
                array()
            ),
            'must be configured'
        );
    }

    /** @test */
    public function the_configuration_db_driver_cannot_be_empty()
    {
        $this->assertConfigurationIsInvalid(
            array(
                array('db_driver' => '') // empty value
            ),
            'cannot contain an empty value'
        );
    }

    /** @test */
    public function it_fails_when_trying_to_overwrite_db_driver_value()
    {
        $value = 'odm';

        $this->assertConfigurationIsInvalid(
            array(
                array('db_driver' => 'orm'),
                array('db_driver' => $value)
            ),
            'cannot be overwritten'
        );
    }
}
