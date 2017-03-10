<?php
/**
 * @see https://github.com/dotkernel/dot-controller-plugin-authorization/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-controller-plugin-authorization/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

namespace Dot\Controller\Plugin\Authorization;

use Dot\Controller\Plugin\Authorization\Factory\AuthorizationPluginFactory;

/**
 * Class ConfigProvider
 * @package Dot\Controller\Plugin\Authorization
 */
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dot_controller' => [
                'plugin_manager' => [
                    'factories' => [
                        'authorization' => AuthorizationPluginFactory::class,
                    ],
                ],
            ],
        ];
    }
}
