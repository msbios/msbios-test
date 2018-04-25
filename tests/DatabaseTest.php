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
 * @requires pdo
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

    /**
     * @inheritdoc
     */
    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        if (! extension_loaded('pdo')) {
            $this->markTestSkipped(
                'The PDO extension is not available.'
            );
        }
    }

     /**
      * -requires PHP 5.3
      */
    public function testConnection()
    {
        $this->assertTrue(true);
        // Test requires the mysqli extension and PHP >= 5.3
    }

     // ... All other tests require the mysqli extension

    /**
     * @inheritdoc
     */
    public static function tearDownAfterClass()
    {
        self::$dbh = null;
    }
}
