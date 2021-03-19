<?php

/**
 * Create a user
 *
 * @param array $overrides
 * @param int   $amount
 *
 * @return \Illuminate\Database\Eloquent\Collection|\App\Models\User[]|\App\Models\User
 */
function createUser($overrides = [], $amount = 1)
{
    $users = \factory(\App\Models\User::class, $amount)->create($overrides);
    if (count($users) == 1) {
        return $users->first();
    }
    return $users;
}