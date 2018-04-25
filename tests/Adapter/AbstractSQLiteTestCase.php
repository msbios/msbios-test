<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Test\Adapter;

use PHPUnit\DbUnit\TestCaseTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractSQLiteTestCase
 * @package MSBiosTest\Test\Adapter
 */
abstract class AbstractSQLiteTestCase extends TestCase
{
    use TestCaseTrait;

    // only instantiate pdo once for test clean-up/fixture load
    static private $pdo = null;

    // only instantiate PHPUnit_Extensions_Database_DB_IDatabaseConnection once per test
    private $conn = null;

    /**
     * @inheritdoc
     * @return null|\PHPUnit\DbUnit\Database\DefaultConnection
     */
    final public function getConnection()
    {
        if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new \PDO('sqlite::memory:');
            }

            $this->conn = $this->createDefaultDBConnection(self::$pdo, ':memory:');
        }
        return $this->conn;
    }
}
