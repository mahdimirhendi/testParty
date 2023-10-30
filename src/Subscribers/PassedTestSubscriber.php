<?php

namespace Mahdi\Testparty\Subscribers;

use PHPUnit\Event\Test\Passed;
use PHPUnit\Event\Test\PassedSubscriber;

class PassedTestSubscriber implements PassedSubscriber
{
    public static int $passedTests=0;

    public function notify(Passed $event): void
    {
        self::$passedTests++;
    }
}