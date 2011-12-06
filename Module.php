<?php

namespace DataGridBundle;

use Zend\Module\Consumer\AutoloaderProvider;

class Module implements AutoloaderProvider
{
    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            // @todo add class map
//            'Zend\Loader\ClassMapAutoloader' => array(
//                __DIR__ . '/autoload_classmap.php',
//            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    'DataGrid' => __DIR__ . '/vendor/DataGrid',
                ),
            ),
        );
    }
}
