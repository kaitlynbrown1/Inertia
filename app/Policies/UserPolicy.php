<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function create(User $user)
    {
        return $user->email === 'kaitlynbrown123@hotmail.com';
    }

    public function edit(User $user, User $model)
    {
        $email = 'email';
        return $user->email($email);

    }
}
