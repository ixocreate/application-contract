<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Application;

interface ConfigProviderInterface
{
    /**
     * @return array
     */
    public function __invoke(): array;

    /**
     * @return string
     */
    public function configName(): string;

    /**
     * @return string
     */
    public function configContent(): string;
}
