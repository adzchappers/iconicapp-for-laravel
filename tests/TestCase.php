<?php

namespace AdzChappers\IconicappForLaravel\Tests;

use AdzChappers\IconicappForLaravel\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }
}
