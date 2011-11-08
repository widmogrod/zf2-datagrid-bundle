<?php

namespace DataGridBundle;

use Zend\Module\Manager,
    Zend\Loader\AutoloaderFactory;

class Module
{
    public function init(Manager $moduleManager)
    {
        $this->initAutoloader();
    }

    public function initAutoloader()
    {
        AutoloaderFactory::factory(array(
            // @todo add class map
//            'Zend\Loader\ClassMapAutoloader' => array(
//                __DIR__ . '/autoload_classmap.php',
//            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    'DataGrid' => __DIR__ . '/vendor/DataGrid',
                ),
            ),
        ));
    }
}
