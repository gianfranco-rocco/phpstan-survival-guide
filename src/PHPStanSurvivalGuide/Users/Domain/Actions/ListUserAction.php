<?php

declare(strict_types=1);

namespace Lightit\PHPStanSurvivalGuide\Users\Domain\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\User;
use Spatie\QueryBuilder\QueryBuilder;

class ListUserAction
{
    /**
     * @return Collection<int, Model>
     */
    public function execute(): Collection
    {
        return QueryBuilder::for(User::class)
            ->allowedFilters(['email'])
            ->allowedSorts('email')
            ->get();
    }
}
