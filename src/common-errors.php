<?php

declare(strict_types=1);

namespace Lightit;

// use Illuminate\Support\Facades\Auth;
// use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\Role;
// use Lightit\PHPStanSurvivalGuide\Users\Domain\Models\User;

/***********************************************************
 * 1. Accessing properties on variables that might be null *
 **********************************************************/

// $user = User::first();

// echo $user->name;

// $role = $user->role;

// echo $role->name;

/******************************************************************
 * 2. Return type with generic class X does not specify its types *
 *****************************************************************/

// See `post` relationship in User model

/********************************************
 * 3. Typing a variable we know the type of *
 *******************************************/

// function getUserName(User $user): string
// {
//   return $user->name;
// }

// $user = Auth::user();
// // $user = User::first();

// echo getUserName($user);

/********************
 * 4. Typing arrays *
 *******************/

// function data(): array
// {
//     return [
//         'firstName' => 'John',
//         'lastName' => 'Doe',
//         'email' => 'johndoe@example.com',
//         'phoneNumber' => '2232323232'
//     ];
// }

/**************************
 * 5. Missing return type *
 *************************/

// function greeting()
// {
//     return 'Hello, world!';
// }

// echo greeting();

/*******************************************
 * 6. Accessing object properties as array *
 ******************************************/

// $data = (object)['foo' => 'bar'];

// echo $data['foo'];

/********************
 * 7. Division by 0 *
 *******************/

// $denominator = 0;
// $result = 100 / $denominator;

/*******************************
 * 8. Returning in constructor *
 ******************************/

// class Example
// {
//     public function __construct()
//     {
//         return "Invalid"; // Constructors should not return a value
//     }
// }

/****************************
 * 9. Unreachable statement *
 ***************************/

// function example(): string
// {
//     return 'Hello';

//     echo 'Hello 2';
// }
