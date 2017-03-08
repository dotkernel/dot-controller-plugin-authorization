<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-authorization
 * @author: n3vrax
 * Date: 9/22/2016
 * Time: 10:17 PM
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
