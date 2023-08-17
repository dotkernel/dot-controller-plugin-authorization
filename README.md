# dot-controller-plugin-authorization

Authorization controller plugin

![OSS Lifecycle](https://img.shields.io/osslifecycle/dotkernel/dot-controller-plugin-authorization)
[![GitHub license](https://img.shields.io/github/license/dotkernel/dot-controller-plugin-authorization)](https://github.com/dotkernel/dot-controller-plugin-authorization/blob/2.0.1/LICENSE.md)
![PHP from Packagist (specify version)](https://img.shields.io/packagist/php-v/dotkernel/dot-controller-plugin-authorization/2.9.0)

# NOTE

> **dot-controller-plugin-authorization** is in **maintenance** mode.

> This package is considered feature-complete, and is now in **security-only** maintenance mode.

## Installation

Run the following command
```bash
$ composer require dotkernel/dot-controller-plugin-authorization
```

This will also install packages `dotkernel/dot-controller` and `dotkernel/dot-authorization` as dependencies.
Next, enable the module by merging the `ConfigProvider` to your application's configuration.

## Usage

In any controller, you can access this plugin by calling
```php
$this->authorization()->...
```

This plugin defines one method, as a proxy to the registered authorization service
```php
$this->authorization()->isGranted($permission, array $roles = [], $context = null);
```
