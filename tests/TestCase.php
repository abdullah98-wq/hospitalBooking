<?php

namespace Tests;


use Codebyray\ReviewRateable\ReviewRateableServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;


abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
