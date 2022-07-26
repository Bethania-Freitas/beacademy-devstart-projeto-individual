<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowTests extends TestCase
{
    /** @test */
    public function only_admin_can_create_Shows()
    {
        $response = $this->get('/show/create')
            ->assertRedirect('/login');
    }
}
