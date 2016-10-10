<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-controller-plugin-authorization
 * @author: n3vrax
 * Date: 9/22/2016
 * Time: 10:17 PM
 */

namespace Dot\Controller\Plugin\Authorization;


use Dot\Authorization\AuthorizationInterface;
use Dot\Controller\Plugin\PluginInterface;

/**
 * Class AuthorizationPlugin
 * @package Dot\Controller\Plugin\Authorization
 */
class AuthorizationPlugin implements PluginInterface
{
    /** @var AuthorizationInterface */
    protected $authorization;

    /**
     * AuthorizationPlugin constructor.
     * @param AuthorizationInterface $authorization
     */
    public function __construct(AuthorizationInterface $authorization)
    {
        $this->authorization = $authorization;
    }

    /**
     * @param $permission
     * @param array $roles
     * @param null $context
     * @return bool
     */
    public function isGranted($permission, array $roles = [], $context = null)
    {
        return $this->authorization->isGranted($permission, $roles, $context);
    }
}