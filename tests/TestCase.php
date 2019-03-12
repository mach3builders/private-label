<?php
namespace Mach3builders\PrivateLabel\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate', ['--database' => 'testing'])->run();
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('private-label.default', [
            'name' => 'Mach3builders',
            'domain' => 'sandbox.test',
            'email' => 'info@mach3builders.nl',
            'logo' => 'assets/logo/logo.png',
            'favicon' => 'assets/favicon/favicon.png'
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            'Mach3builders\PrivateLabel\PrivateLabelServiceProvider'
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'PrivateLabel' => \Mach3builders\PrivateLabel\Facades\PrivateLabel::class
        ];
    }
}
