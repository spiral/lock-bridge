<?php

declare(strict_types=1);

namespace Spiral\LockBridge\Tests\Feature\Bootloader;

use RoadRunner\Lock\Lock;
use RoadRunner\Lock\LockIdGeneratorInterface;
use RoadRunner\Lock\LockInterface;
use RoadRunner\Lock\UuidLockIdGenerator;
use Spiral\LockBridge\Tests\Feature\TestCase;

final class LockBootloaderTest extends TestCase
{
    public function testLockShouldBeAsSingleton(): void
    {
        $this->assertContainerBoundAsSingleton(LockInterface::class, Lock::class);
    }

    public function testLockIdGeneratorShouldBeAsSingleton(): void
    {
        $this->assertContainerBoundAsSingleton(LockIdGeneratorInterface::class, UuidLockIdGenerator::class);
    }
}
