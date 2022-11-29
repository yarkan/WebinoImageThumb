<?php

/**
 * Webino (https://github.com/webino/)
 *
 * @link      https://github.com/webino/WebinoImageThumb/ for the canonical source repository
 * @copyright Copyright (c) 2013-2015 Webino, s. r. o. (http://webino.sk/)
 * @license   BSD-3-Clause
 */

namespace WebinoImageThumb;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Image Thumbnailer module for Laminas
 */
class Module implements ConfigProviderInterface
{
    /**
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
