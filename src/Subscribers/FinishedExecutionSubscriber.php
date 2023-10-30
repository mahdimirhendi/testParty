<?php

namespace Mahdi\Testparty\Subscribers;

use Mahdi\Testparty\Arts\Pikachu;
use PHPUnit\Event\TestRunner\ExecutionFinished;
use PHPUnit\Event\TestRunner\ExecutionFinishedSubscriber;

class FinishedExecutionSubscriber implements ExecutionFinishedSubscriber
{

    public function notify(ExecutionFinished $event): void
    {
        $finishedTests = EndTestHandler::$finishTest;
        $passedTests = PassedTestSubscriber::$passedTests;

        if ($finishedTests == $passedTests) {
            echo "\033[32m".Pikachu::generate();
        }

    }
}