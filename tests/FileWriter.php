<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Test;

/**
 * Class FileWriter
 * @package MSBiosTest\Test
 */
class FileWriter
{
    /**
     * @param $file
     * @param $content
     * @return bool
     */
    public function write($file, $content)
    {
        $file = fopen($file, 'w');
        if ($file == false) {
            return false;
        }
        // ...
    }
}
