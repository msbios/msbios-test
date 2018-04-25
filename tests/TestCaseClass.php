<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class TestCaseClass
 * @package MSBiosTest\Test
 */
class TestCaseClass extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testMethod($data)
    {
        $this->assertTrue($data);
    }

    /**
     * @return array
     */
    public function provider()
    {
        return [
            'my named data' => [true],
            'my data' => [true]
        ];
    }
}
