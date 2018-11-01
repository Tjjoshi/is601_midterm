<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class YearTypeTest extends TestCase
{
    public function testCarYear()
    {
        $car = Car::find(30);
        $this->assertInternalType('numeric',$car->year);
    }
}
