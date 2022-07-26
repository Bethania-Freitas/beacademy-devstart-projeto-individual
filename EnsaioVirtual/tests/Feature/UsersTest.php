<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    /** @test */
    public function only_admin_can_see_users()
    {
        $response = $this->get('/users')
            ->assertRedirect('/login');
    }
    
    /** @test */
    public function only_admin_can_create_users()
    {
        $response = $this->get('/users/create')
            ->assertRedirect('/login');
    }


}
