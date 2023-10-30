<?php

namespace Mahdi\Testparty\Subscribers;
use PHPUnit\Event\Test\Finished;
use PHPUnit\Event\Test\FinishedSubscriber;

class EndTestHandler implements FinishedSubscriber
{
    public static int $finishTest=0;

    public function notify(Finished $event): void
    {
        self::$finishTest++;
        // TODO: Implement notify() method.
    }
}