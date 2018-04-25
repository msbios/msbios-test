<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Test;

use MSBiosTest\Test\Adapter\AbstractSQLiteTestCase;

/**
 * Class MyTestCase
 * @package MSBiosTest\Test
 */
class MyTestCase extends AbstractSQLiteTestCase
{

    /**
     * @return \PHPUnit\DbUnit\DataSet\FlatXmlDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXmlDataSet(__DIR__ . '/_files/myFlatXmlFixture.xml');
    }
}
