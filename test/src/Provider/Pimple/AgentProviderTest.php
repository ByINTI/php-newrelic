<?php

/**
 * This file is part of the PHP New Relic package.
 *
 * (c) Alex Soban <me@soban.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace byinti\NewRelic\Tests\Provider\Pimple;

use Pimple\Container;
use byinti\NewRelic\Provider\Pimple\AgentProvider;

class AgentProviderTest extends \PHPUnit_Framework_TestCase
{
    protected $container;

    protected function setUp()
    {
        $this->container = new Container();
        $this->container->register(new AgentProvider());
    }

    protected function tearDown()
    {
        $this->container = null;
    }

    /**
     * @covers byinti\NewRelic\Provider\Pimple\AgentProvider::register
     */
    public function testAgentProvider()
    {
        $this->assertInstanceOf('byinti\NewRelic\Agent', $this->container['newrelic']);
        $this->assertInternalType('boolean', $this->container['newrelic']->isLoaded());
    }
}
