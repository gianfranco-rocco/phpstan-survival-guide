<?php

declare(strict_types=1);

namespace Lightit;

use Illuminate\Support\Facades\DB;
use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\User;

/********************
 * 1. Not covariant *
 *******************/

// See User model

/*********************************************************
 * 2. Adding properties to dynamically created variables *
 ********************************************************/

/*************************************
 * 2.1. For DB-facade retrieved data *
 ************************************/

/** @var \Illuminate\Support\Collection<int, object{country: string, quantity: integer}> $users */
$users = DB::table('users')
  ->selectRaw('country, COUNT(*) as quantity')
  ->groupBy('country')
  ->get();

$users->each(function (object $item) {
    $country = $item->country; //string
    $quantity = $item->quantity; //integer
});

/************************************
 * 2.2. For Eloquent retrieved data *
 ***********************************/

$users = User::query()
  ->selectRaw('count(*) as quantity')
  ->groupBy('quantity')
  ->get();

$users->each(function (User $user) {
    $quantity = $user->quantity;
});
