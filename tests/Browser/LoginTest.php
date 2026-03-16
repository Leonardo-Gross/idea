<?php

use App\Models\User;

it('logs in a user', function () {
    $user = User::factory()->create([
        'email' => 'leo@example.com',
        'password' => 'password',
    ]);

    visit('/login')
        ->fill('Email', $user->email)
        ->fill('Password', $user->password)
        ->click('@login-button')
        ->assertPathIs('/');

    $this->assertAuthenticated();
});

it('logs out a user', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    visit('/')->click('Log Out');

    $this->assertGuest();
});
