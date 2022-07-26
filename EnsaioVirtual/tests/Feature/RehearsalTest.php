<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RehearsalTest extends TestCase
{
    /** @test */
    public function only_admin_can_see_rehearsals()
    {
        $response = $this->get('/rehearsal')
            ->assertRedirect('/login');

    }

    /** @test */
    public function only_admin_can_create_rehearsals()
    {
        $response = $this->get('/rehearsal/create')
            ->assertRedirect('/login');

    }
}
