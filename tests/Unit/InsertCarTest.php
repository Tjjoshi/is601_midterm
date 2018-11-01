<?php

namespace Tests\Unit;

use Tests\TestCase;
use \App\Car;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    public function testInsertCar()
    {
        $car = factory(\App\Car::class)->make();
        $this->assertDatabaseHas('cars', ["make" => "Ford"]);
    }
}
