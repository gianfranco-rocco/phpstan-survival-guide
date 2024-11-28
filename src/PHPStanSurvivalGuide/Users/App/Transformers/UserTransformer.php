<?php

declare(strict_types=1);

namespace Lightit\PHPStanSurvivalGuide\Users\App\Transformers;

use Flugg\Responder\Transformers\Transformer;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\User;

class UserTransformer extends Transformer
{
    /**
     * @return array{id: int, name: string, email: string}
     */
    public function transform(User $user): array
    {
        return [
            'id' => (int) $user->id,
            'name' => (string) $user->name,
            'email' => (string) $user->email,
        ];
    }
}
