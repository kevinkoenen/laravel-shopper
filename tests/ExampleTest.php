<?php

namespace KevinKoenen\LaravelShopper\Tests;

use Kevinkoenen\LaravelShopper\LaravelShopperServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelShopperServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
