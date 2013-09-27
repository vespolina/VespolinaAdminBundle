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
                array() // no configuration values at all
            ),
            'db_driver' // exception message should contain "key"
        );
    }

    /** @test */
    public function it_keeps_the_last_provided_api_key()
    {
        $value = 'odm';

        $this->assertProcessedConfigurationEquals(
            array(
                array('db_driver' => 'this value will be overwritten'),
                array('db_driver' => $value)
            ),
            array(
                'db_driver'=> $value
            )
        );
    }
}
