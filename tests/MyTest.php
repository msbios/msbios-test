<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class MyTest
 * @package MSBiosTest\Test
 */
class MyTest extends TestCase
{
    public function testCalculate()
    {
        $this->assertEquals(2, 1 + 1);
    }
}
