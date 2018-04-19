<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Test;

/**
 * Class CsvFileIterator
 * @package MSBiosTest\Test
 */
class CsvFileIterator implements \Iterator
{
    /** @var resource */
    protected $file;
    /** @var int */
    protected $key = 0;
    /** @var */
    protected $current;

    /**
     * CsvFileIterator constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = fopen($file, 'r');
    }

    /**
     * @return $this
     */
    public function rewind()
    {
        rewind($this->file);
        $this->current = fgetcsv($this->file);
        $this->key = 0;
        return $this;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return !feof($this->file);
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->current;
    }

    /**
     * @return $this
     */
    public function next()
    {
        $this->current = fgetcsv($this->file);
        $this->key++;
        return $this;
    }

    /**
     *
     */
    public function __destruct()
    {
        fclose($this->file);
    }
}