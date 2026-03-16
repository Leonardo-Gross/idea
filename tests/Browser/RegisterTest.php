<?php

use Illuminate\Support\Facades\Auth;

it('registeres a user', function () {
    visit('/register')
        ->fill('Name', 'Leonardo')
        ->fill('Email', 'leo@example.com')
        ->fill('Password', 'password')
        ->click('Create account')
        ->assertPathIs('/');

    $this->assertAuthenticated();

    expect(Auth::user()->toArray())->toMatchArray([
        'name' => 'Leonardo',
        'email' => 'leo@example.com',
    ]);
});
