<?php

declare(strict_types=1);

namespace Spiral\LockBridge\Tests\Feature;

use Spiral\LockBridge\Bootloader\LockBootloader;

abstract class TestCase extends \Spiral\Testing\TestCase
{
    public function rootDirectory(): string
    {
        return \dirname(__DIR__, 2) . '/app';
    }

    public function defineBootloaders(): array
    {
        return [
            LockBootloader::class,
        ];
    }
}
