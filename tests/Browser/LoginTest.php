<?php 

declare(strict_types=1);

use App\Models\User;

test('A user can login ', function (): void {
    User::factory()->create([
        'email' => 'john@example.com',
        'password' => bcrypt('password123'),
    ]);

    visit('/login')
        ->type('email', 'john@example.com')
        ->type('password', 'password123')
        ->click('@login-button')
        ->assertPathIs('/');

    $this->assertAuthenticated();
});


it('logs out a user', function (): void {
    $user = User::factory()->create();

    $this->actingAs($user);

    visit('/')
        ->click('@logout-button');

    $this->assertGuest();
});