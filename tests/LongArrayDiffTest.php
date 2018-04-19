<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class LongArrayDiffTest
 * @package MSBiosTest\Test
 */
class LongArrayDiffTest extends TestCase
{
    /**
     * @void
     */
    public function testEquality()
    {
        $this->assertEquals(
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2,
                // 3,
                4, 5, 6],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2,
                // 33, // Wrong value
                4, 5, 6]
        );
    }
}
