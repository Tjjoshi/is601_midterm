<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelTypeTest extends TestCase
{
    public function testCarString()
    {
        $car = Car::all();
        $car = Car::find(12);
        $this->assertInternalType('string', $car->model);
    }
}
