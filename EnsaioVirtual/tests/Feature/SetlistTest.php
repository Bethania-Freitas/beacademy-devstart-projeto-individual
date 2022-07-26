<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SetlistTest extends TestCase
{
    /** @test */
    public function only_admin_can_see_setlists()
    {
        $response = $this->get('/setlist')
            ->assertRedirect('/login');

    }

    /** @test */
    public function only_admin_can_create_setlists()
    {
        $response = $this->get('/setlist/create')
            ->assertRedirect('/login');

    }
}
