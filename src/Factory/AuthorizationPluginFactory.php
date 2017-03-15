<?php
/**
 * @see https://github.com/dotkernel/dot-controller-plugin-authorization/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-controller-plugin-authorization/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

namespace Dot\Controller\Plugin\Authorization\Factory;

use Dot\Authorization\AuthorizationInterface;
use Dot\Controller\Plugin\Authorization\AuthorizationPlugin;
use Psr\Container\ContainerInterface;

/**
 * Class AuthorizationPluginFactory
 * @package Dot\Controller\Plugin\Authorization\Factory
 */
class AuthorizationPluginFactory
{
    /**
     * @param ContainerInterface $container
     * @return AuthorizationPlugin
     */
    public function __invoke(ContainerInterface $container)
    {
        return new AuthorizationPlugin($container->get(AuthorizationInterface::class));
    }
}
