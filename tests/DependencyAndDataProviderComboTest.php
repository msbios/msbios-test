<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class DependencyAndDataProviderComboTest
 * @package MSBiosTest\Test
 */
class DependencyAndDataProviderComboTest extends TestCase
{
    /**
     * @return array
     */
    public function provider()
    {
        // return [['provider1'], ['provider2']]; // Wrong value
        return [['provider1']];
    }

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
     * @dataProvider provider
     */
    public function testConsumer()
    {
        $this->assertEquals(
            ['provider1', 'first', 'second'],
            func_get_args()
        );
    }
}
