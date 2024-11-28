<?php

declare(strict_types=1);

namespace Lightit\PHPStanSurvivalGuide\Users\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\PHPStanSurvivalGuide\Users\App\Request\StoreUserRequest;
use Lightit\PHPStanSurvivalGuide\Users\App\Transformers\UserTransformer;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Actions\StoreUserAction;

class StoreUserController
{
    public function __invoke(StoreUserRequest $request, StoreUserAction $storeUserAction): JsonResponse
    {
        $user = $storeUserAction->execute($request->toDto());

        return responder()
            ->success($user, UserTransformer::class)
            ->respond(JsonResponse::HTTP_CREATED);
    }
}
