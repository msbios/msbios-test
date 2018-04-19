<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class OutputTest
 * @package MSBiosTest\Test
 */
class OutputTest extends TestCase
{
    /**
     * @void
     */
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    /**
     * @void
     */
    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        // print 'baz';
        print 'bar';
    }
}
