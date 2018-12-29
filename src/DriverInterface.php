<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Cache;

use Psr\Cache\CacheItemPoolInterface;

interface DriverInterface
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return CacheItemPoolInterface
     */
    public function create(): CacheItemPoolInterface;
}
