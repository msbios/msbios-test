<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use MSBios\ModuleInterface;
use MSBios\Test\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Test
 */
class ModuleTest extends TestCase
{
    /**
     * @return ModuleInterface|Module
     */
    public function testModule()
    {
        /** @var ModuleInterface $instance */
        $instance = new Module;
        $this->assertInstanceOf(ModuleInterface::class, $instance);

        return $instance;
    }

    /**
     * @depends testModule
     * @param ModuleInterface $instance
     */
    public function testGetConfig(ModuleInterface $instance)
    {
        $this->assertInternalType('array', $instance->getConfig());
    }

    /**
     * @depends testModule
     * @param ModuleInterface $instance
     */
    public function testGetAutoloaderConfig(ModuleInterface $instance)
    {
        $this->assertInternalType('array', $instance->getAutoloaderConfig());
    }
}
