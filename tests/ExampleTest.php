<?php

namespace Kevinkoenen\LaravelShopper\Tests;

use Orchestra\Testbench\TestCase;
use Kevinkoenen\LaravelShopper\LaravelShopperServiceProvider;

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
