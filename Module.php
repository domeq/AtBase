<?php

namespace AtBase;

class Module
{
    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     * @return array
     */
    public function getViewHelperConfig()
    {
        return array(
            'invokables' => array(
                'atBaseQueryParams' => 'AtBase\View\Helper\QueryParams',
            ),
        );
    }

    /**
     * @return array
     */
    public function getControllerPluginConfig()
    {
        return array(
            'invokables' => array(
                'backTo' => 'AtBase\Mvc\Controller\Plugin\BackTo'
            ),
        );
    }
}