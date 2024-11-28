<?php

declare(strict_types=1);

namespace Lightit\PHPStanSurvivalGuide\Users\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Lightit\PHPStanSurvivalGuide\Users\App\Transformers\UserTransformer;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Actions\ListUserAction;

class ListUserController
{
    public function __invoke(
        Request $request,
        ListUserAction $action,
    ): JsonResponse {
        $users = $action->execute();

        return responder()
            ->success($users, UserTransformer::class)
            ->respond();
    }
}
