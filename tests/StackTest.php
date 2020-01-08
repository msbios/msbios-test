<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class StackTest
 * @package MSBiosTest\Test
 */
class StackTest extends TestCase
{
    /** @var array */
    protected $stack;

    /**
     * Constructor
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->stack = [];
    }

    /**
     * @return array
     */
    public function testEmpty()
    {
        /** @var array $stack */
        $stack = [];
        $this->assertEmpty($stack);

        // ver. 2
        $this->assertTrue(empty($this->stack));

        return $stack;
    }

    /**
     * @depends testEmpty
     * @param array $stack
     * @return array
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertNotEmpty($stack);

        // ver.2
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', $this->stack[count($this->stack) - 1]);
        $this->assertFalse(empty($this->stack));

        return $stack;
    }

    /**
     * @depends testPush
     * @param array $stack
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);

        // ver. 2
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', array_pop($this->stack));
        $this->assertTrue(empty($this->stack));
    }

    /**
     * @test
     * @return $this
     */
    public function testPushAndPop()
    {
        /** @var array $stack */
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');

        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertEquals(1, count($stack));
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));

        return $this;
    }
}
