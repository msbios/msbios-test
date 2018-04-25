<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class DataTest
 * @package MSBiosTest\Test
 */
class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    // /**
    //  * @return array
    //  */
    // public function additionProvider()
    // {
    //     return [
    //         [0, 0, 0],
    //         [0, 1, 1],
    //         [1, 0, 1],
    //         [1, 1, 3]
    //     ];
    // }

    /**
     * @return array|CsvFileIterator
     */
    public function additionProvider()
    {
        return new CsvFileIterator(__DIR__ . '/_files/data.csv');

        return [
            'adding zeros' => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            // 'one plus one' => [1, 1, 3]
            'one plus one' => [1, 1, 2]
        ];
    }
}
