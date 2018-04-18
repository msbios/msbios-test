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
    /**
     * @deprecate
     */
    public function testSome()
    {
        $this->assertTrue(true);
    }

    // public function testOne()
    // {
    //     $this->assertTrue(false);
    // }

    // /**
    //  * @depends testOne
    //  */
    // public function testTwo()
    // {
    //     // ...
    // }
}
