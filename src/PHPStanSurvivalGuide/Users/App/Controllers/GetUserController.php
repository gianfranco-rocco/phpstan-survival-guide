<?php

declare(strict_types=1);

namespace Lightit\PHPStanSurvivalGuide\Users\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\PHPStanSurvivalGuide\Users\App\Transformers\UserTransformer;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\User;

class GetUserController
{
    public function __invoke(User $user): JsonResponse
    {
        return responder()
            ->success($user, UserTransformer::class)
            ->respond();
    }
}
