<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountCarTest extends TestCase
{
    public function testCarCount(){
        $cars=Car::all();
        $cars->count();
        $this->assertEquals(50,count($cars),"Should return 50 cars");
    }
}
