<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class ExceptionTest
 * @package MSBiosTest\Test
 */
class ExceptionTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        // $this->expectException(\InvalidArgumentException::class);
        throw new \InvalidArgumentException;
    }
}
