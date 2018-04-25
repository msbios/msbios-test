<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

use PHPUnit\DbUnit\Database\Connection;
use PHPUnit\DbUnit\DataSet\IDataSet;
use PHPUnit\DbUnit\TestCaseTrait;
use PHPUnit\Framework\TestCase;

/**
 * Class MyGuestbookTest
 * @package MSBiosTest\Test
 */
class MyGuestbookTest extends TestCase
{
    use TestCaseTrait;

    /**
     * Returns the test database connection.
     *
     * @return Connection
     */
    protected function getConnection()
    {
        /** @var \PDO $pdo */
        $pdo = new \PDO('sqlite::memory:');
        return $this->createDefaultDBConnection($pdo, ':memory:');
    }

    /**
     * Returns the test dataset.
     *
     * @return IDataSet
     */
    protected function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/guestbook-seed.xml');
    }
}
