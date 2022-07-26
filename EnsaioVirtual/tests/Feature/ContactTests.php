<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTests extends TestCase
{
    /** @test */
    public function only_admin_can_read_messages()
    {
        $response = $this->get('/contact/show')
            ->assertRedirect('/login');

    }
}
