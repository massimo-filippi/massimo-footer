<?php

namespace MassimoFilippi\MassimoFooter;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'view_helpers' => [
        'factories' => [
            View\Helper\MassimoFooterHelper::class => InvokableFactory::class,
        ],
        'aliases' => [
            'massimoFooter' => View\Helper\MassimoFooterHelper::class,
        ],
    ],
];
