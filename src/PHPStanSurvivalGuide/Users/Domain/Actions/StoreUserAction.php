<?php

declare(strict_types=1);

namespace Lightit\PHPStanSurvivalGuide\Users\Domain\Actions;

use Lightit\PHPStanSurvivalGuide\Users\App\Notifications\UserRegistered;
use Lightit\PHPStanSurvivalGuide\Users\Domain\DataTransferObjects\UserDto;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\User;

class StoreUserAction
{
    public function execute(UserDto $userDto): User
    {
        $user = new User([
            'name' => $userDto->getName(),
            'email' => $userDto->getEmail(),
            'password' => $userDto->getPassword(),
        ]);

        $user->save();

        $user->notify(new UserRegistered());

        return $user;
    }
}
