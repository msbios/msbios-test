<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Test;

use MSBios\ModuleInterface;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Class Module
 * @package MSBios\Test
 * @link https://phpunit.de/manual/6.5/en/phpunit-book.pdf
 * @page 47
 */
class Module extends \MSBios\Module
{
    /** @const VERSION */
    const VERSION = '1.0.9';

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getDir()
    {
        return __DIR__;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getNamespace()
    {
        return __NAMESPACE__;
    }


}
