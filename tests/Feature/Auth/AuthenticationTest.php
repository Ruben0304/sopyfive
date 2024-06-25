<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Component;
use Livewire\Livewire;
use Livewire\Volt\Volt;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{


    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response
            ->assertOk()
            ->assertSeeLivewire('auth.login');
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create();

        $component = Livewire::test('auth.login')
            ->set('form.email', $user->email)
            ->set('form.password', 'password');

        $component->call('login');

        $component
            ->assertHasNoErrors()
            ->assertRedirect(route('home'));

        $this->assertAuthenticated();
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $component = Livewire::test('auth.login')
            ->set('form.email', $user->email)
            ->set('form.password', 'wrong-password');

        $component->call('login');

        $component
            ->assertHasErrors()
            ->assertNoRedirect();

        $this->assertGuest();
    }

//    public function test_navigation_menu_can_be_rendered(): void
//    {
//        $user = User::factory()->create();
//
//        $this->actingAs($user);
//
//        $response = $this->get('/home');
//
//        $response
//            ->assertOk()
//            ->assertSeeLivewire('landing.navigation');
//    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $component = Livewire::test('landing.navigation');

        $component->call('logout');

        $component
            ->assertHasNoErrors()
            ->assertRedirect('/');

        $this->assertGuest();
    }
}
