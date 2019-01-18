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
     * DriverInterface constructor.
     * @param string $name
     * @param array $options
     */
    public function __construct(string $name, array $options);

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return CacheItemPoolInterface
     */
    public function create(): CacheItemPoolInterface;
}
