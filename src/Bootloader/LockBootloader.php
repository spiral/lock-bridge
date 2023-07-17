<?php

declare(strict_types=1);

namespace Spiral\LockBridge\Bootloader;

use RoadRunner\Lock\Lock;
use RoadRunner\Lock\LockIdGeneratorInterface;
use RoadRunner\Lock\LockInterface;
use RoadRunner\Lock\UuidLockIdGenerator;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\RoadRunnerBridge\Bootloader\RoadRunnerBootloader;

final class LockBootloader extends Bootloader
{
    protected const SINGLETONS = [
        LockInterface::class => Lock::class,
        LockIdGeneratorInterface::class => UuidLockIdGenerator::class,
    ];

    protected const DEPENDENCIES = [
        RoadRunnerBootloader::class,
    ];
}
