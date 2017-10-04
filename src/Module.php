<?php

namespace MassimoFilippi\MassimoFooter;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Class Module
 * @package MassimoFilippi\MassimoFooter
 */
class Module implements ConfigProviderInterface
{

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
