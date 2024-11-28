<?php

declare(strict_types=1);

namespace Tests\Feature\Users;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Lightit\PHPStanSurvivalGuide\Users\App\Controllers\StoreUserController;
use Lightit\PHPStanSurvivalGuide\Users\App\Notifications\UserRegistered;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\User;
use Tests\RequestFactories\StoreUserRequestFactory;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\postJson;
use function PHPUnit\Framework\assertTrue;

describe('users', function () {
    /** @see StoreUserController */
    it('can create a user successfully', function () {
        Notification::fake();

        $data = StoreUserRequestFactory::new()->create([
            'password' => 'passw0rd',
        ]);

        postJson(url('/api/users'), $data)
            ->assertCreated();

        assertDatabaseHas('users', [
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $user = User::query()->firstOrFail();

        assertTrue(Hash::check('passw0rd', $user->password));

        Notification::assertSentTo($user, UserRegistered::class);
    });
});
