<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Livewire\Volt\Volt;
use Tests\TestCase;

class RegistrationTest extends TestCase
{


    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response
            ->assertOk()
            ->assertSeeLivewire('auth.register');
    }

    public function test_new_users_can_register(): void
    {
        $component = Livewire::test('auth.register')
            ->set('name', 'Test User')
            ->set('email', 'test@example.comq')
            ->set('password', 'password12')
            ->set('password_confirmation', 'password12');

        $component->call('register');

       $component->assertRedirect(route('home'));

        $this->assertAuthenticated();
    }
}
