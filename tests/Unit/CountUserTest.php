<?php

namespace Tests\Unit;

use Tests\TestCase;
use \App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountUserTest extends TestCase
{
    public function testCountUser(){
        $users=User::all();
        $users->count();
        $this->assertEquals(50,count($users),"Should return 50 users");
    }

}
