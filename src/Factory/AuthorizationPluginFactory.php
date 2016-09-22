<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-authorization
 * @author: n3vrax
 * Date: 9/22/2016
 * Time: 10:22 PM
 */

namespace Dot\Controller\Plugin\Authorization\Factory;


use Dot\Authorization\AuthorizationInterface;
use Dot\Controller\Plugin\Authorization\AuthorizationPlugin;
use Interop\Container\ContainerInterface;

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