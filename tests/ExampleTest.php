<?php

namespace Liteas98\Combinations\Tests;

use Orchestra\Testbench\TestCase;
use Liteas98\Combinations\CombinationsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CombinationsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
