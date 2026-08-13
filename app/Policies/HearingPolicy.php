<?php

namespace App\Policies;

use App\Models\Hearing;
use App\Models\User;

class HearingPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Hearing $hearing): bool
    {
        return $user->hasRole('admin') || $hearing->user_id === $user->id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Hearing $hearing): bool
    {
        return $user->hasRole('admin') || $hearing->user_id === $user->id;
    }

    public function delete(User $user, Hearing $hearing): bool
    {
        return $user->hasRole('admin') || $hearing->user_id === $user->id;
    }

    public function restore(User $user, Hearing $hearing): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Hearing $hearing): bool
    {
        return $user->hasRole('admin');
    }
}
