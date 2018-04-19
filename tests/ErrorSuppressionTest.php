<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Test {

    use PHPUnit\Framework\TestCase;

    /**
     * Class ErrorSuppressionTest
     * @package MSBiosTest\Test
     */
    class ErrorSuppressionTest extends TestCase
    {
        public function testFileWriting()
        {
            /** @var FileWriter $writer */
            $writer = new FileWriter;
            $this->assertFalse(@$writer->write('/is-not-writeable/file', 'stuff'));
        }
    }
}
