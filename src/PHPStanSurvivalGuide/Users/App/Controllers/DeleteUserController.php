<?php

declare(strict_types=1);

namespace Lightit\PHPStanSurvivalGuide\Users\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\User;

class DeleteUserController
{
    public function __invoke(User $user): JsonResponse
    {
        $user->delete();

        return responder()
            ->success()
            ->respond();
    }
}
