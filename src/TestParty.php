<?php

namespace Mahdi\Testparty;

use Mahdi\Testparty\Subscribers\EndTestHandler;
use Mahdi\Testparty\Subscribers\PassedTestSubscriber;
use Mahdi\Testparty\Subscribers\FinishedExecutionSubscriber;
use PHPUnit\Runner\Extension\Extension;
use PHPUnit\Runner\Extension\Facade;
use PHPUnit\Runner\Extension\ParameterCollection;
use PHPUnit\TextUI\Configuration\Configuration;

class TestParty implements Extension
{

    public function bootstrap(Configuration $configuration, Facade $facade, ParameterCollection $parameters): void
    {
        if ($configuration->noOutput()) {
            return;
        }

        // Register subscribers to count passed and finished tests
        $facade->registerSubscribers(
            new EndTestHandler,
            new PassedTestSubscriber,
            new FinishedExecutionSubscriber,
        );

    }



}
