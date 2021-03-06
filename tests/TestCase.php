<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Hash;

class TestCase extends BaseTestCase
{
    use MockeryPHPUnitIntegration;

	protected function getPackageProviders($app)
	{
		return ['Matthewbdaly\LaravelOpensearch\Providers\ServiceProvider'];
	}

    /**
     * Creates the application.
     *
     * Needs to be implemented by subclasses.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = parent::createApplication();

        Hash::setRounds(4);

        return $app;
    }
}
