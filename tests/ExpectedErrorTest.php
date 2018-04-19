<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class ExpectedErrorTest
 * @package MSBiosTest\Test
 */
class ExpectedErrorTest extends TestCase
{
    /**
     * @expectedException \PHPUnit\Framework\Error\Error
     */
    public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }
}
