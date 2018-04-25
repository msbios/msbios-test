<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class DatabaseTest
 * @package MSBiosTest\Test
 */
class DatabaseTest extends TestCase
{
    /** @var \PDO */
    protected static $dbh;

    /**
     * @inheritdoc
     */
    public static function setUpBeforeClass()
    {
        self::$dbh = new \PDO('sqlite::memory:');
    }

    public function testConnection()
    {
        $this->assertNull(self::$dbh->errorCode());
    }

    /**
     * @inheritdoc
     */
    public static function tearDownAfterClass()
    {
        self::$dbh = null;
    }
}
