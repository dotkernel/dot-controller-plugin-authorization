<?php
/**
 * @see https://github.com/dotkernel/dot-controller-plugin-authorization/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-controller-plugin-authorization/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

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
     * @param mixed $context
     * @return bool
     */
    public function isGranted(string $permission, array $roles = [], $context = null): bool
    {
        return $this->authorization->isGranted($permission, $roles, $context);
    }
}
