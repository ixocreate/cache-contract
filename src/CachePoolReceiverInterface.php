<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Cache;

use Psr\Cache\CacheItemPoolInterface;

interface CachePoolReceiverInterface
{
    /**
     * @param string $name
     * @return CacheItemPoolInterface
     */
    public function get(string $name): CacheItemPoolInterface;

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;
}
