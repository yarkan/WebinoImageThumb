<?php

/**
 * Webino (https://github.com/webino/)
 *
 * @link      https://github.com/webino/WebinoImageThumb/ for the canonical source repository
 * @copyright Copyright (c) 2016 Webino, s. r. o. (http://webino.sk/)
 * @license   BSD-3-Clause
 */

namespace WebinoImageThumb\Service;

/**
 * Class ImageThumbAwareInterface
 *
 * Use this interface to inject ImageThumb service.
 */
interface ImageThumbAwareInterface
{
    /**
     * @return ImageThumb|null
     */
    public function getThumbnailer();

    /**
     * @param ImageThumb $thumbnailer
     * @return $this
     */
    public function setThumbnailer(ImageThumb $thumbnailer);
}
