<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccessPrivate extends TestCase
{

    public function testAccessPrivate(): void
    {
        $this->assertGuest();

        $this->get(route('profile.index'))->assertStatus(302);
    }
}
