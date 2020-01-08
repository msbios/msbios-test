<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class TemplateMethodsTest
 * @package MSBiosTest\Test
 */
class TemplateMethodsTest extends TestCase
{
    /**
     * @inheritdoc
     */
    public static function setUpBeforeClass(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    /**
     * @inheritdoc
     */
    protected function assertPreConditions(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    /**
     * @inheritdoc
     */
    public function testOne()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        $this->assertTrue(true);
    }

    /**
     * @inheritdoc
     */
    public function testTwo()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        // $this->assertTrue(false); // Wrong value
        $this->assertTrue(true);
    }

    /**
     * @inheritdoc
     */
    protected function assertPostConditions(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    /**
     * @inheritdoc
     */
    public static function tearDownAfterClass(): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    /**
     * @inheritdoc
     * @param \Throwable $t
     * @throws \Throwable
     */
    protected function onNotSuccessfulTest(\Throwable $t): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        throw $t;
    }
}
