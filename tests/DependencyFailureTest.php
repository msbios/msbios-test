<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class DependencyFailureTest
 * @package MSBiosTest\Test
 */
class DependencyFailureTest extends TestCase
{
    public function testOne()
    {
        $this->assertTrue(true);
    }
    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }
}
