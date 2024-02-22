<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccessPrivateTest extends TestCase
{

    /**@test*/
    public function test_enter_profile()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();

        $this->actingAs($user)->get(route('profile.index'))->assertStatus(302);
    }


}
