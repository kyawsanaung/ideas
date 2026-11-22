<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Auth;
use App\Models\User;

it('register a user ', function (): void {
    visit('/register')
        ->type('name', 'John Doe')
        ->type('email', 'john@example.com')
        ->type('password', 'password')
        ->type('password_confirmation', 'password')
        ->click('@register-button')
        ->assertPathIs('/');

    $this->assertAuthenticated();

    expect(Auth::user())->toMatchArray([
        'name' => 'John Doe',
        'email' => 'john@example.com'
    ]);
});


