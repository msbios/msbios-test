<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class ArrayWeakComparisonTest
 * @package MSBiosTest\Test
 */
class ArrayWeakComparisonTest extends TestCase
{
    /**
     *
     */
    public function testEquality()
    {
        $this->assertEquals(
            [1, 2,
                // 3,
                4, 5, 6],
            ['1', 2,
                // 33, // Wrong value
                4, 5, 6]
        );
    }
}
