<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteUserTest extends TestCase
{
    public function testDeleteUser(){
        DB::table('users')->where('id', '>', 50)->delete();
        $user = User::all();
        $this->assertDatabaseMissing('users',['id' => '51']);
    }

}
