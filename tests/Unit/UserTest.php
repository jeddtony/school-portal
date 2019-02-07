<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function a_default_user_is_not_an_admin(){
        $user = factory('App\User')->create();
        $this->assertFalse($user->isAdmin());
    }

    /**
     * @test
     */
    public function an_admin_user_is_an_admin(){
        $admin = factory('App\User')->states('admin')->create();
        $this->assertTrue($admin->isAdmin());
    }

    /**
     * @test
     */
    public function a_user_is_assigned_a_subject(){
        $user = factory('App\User')->create();
        $subject = factory('App\Subject')->create();
        $user->subjects()->attach($subject->id);
//        dd($user->subjects);
        $this->assertEquals(1, count($user->subjects));
    }
}
