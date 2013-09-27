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
    public function the_api_key_value_is_required()
    {
        $this->assertConfigurationIsInvalid(
            array(
                array() // no configuration values at all
            ),
            'db_driver' // exception message should contain "key"
        );
    }
}
