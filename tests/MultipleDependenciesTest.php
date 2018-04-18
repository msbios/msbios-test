<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class MultipleDependenciesTest
 * @package MSBiosTest\Test
 */
class MultipleDependenciesTest extends TestCase
{
    /**
     * @return string
     */
    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    /**
     * @return string
     */
    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer()
    {
        $this->assertEquals(
            ['first', 'second'],
            func_get_args()
        );
    }
}
