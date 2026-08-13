<?php

namespace App\Policies;

use App\Models\Spastic;
use App\Models\User;

class SpasticPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Spastic $spastic): bool
    {
        return $user->hasRole('admin') || $spastic->user_id === $user->id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Spastic $spastic): bool
    {
        return $user->hasRole('admin') || $spastic->user_id === $user->id;
    }

    public function delete(User $user, Spastic $spastic): bool
    {
        return $user->hasRole('admin') || $spastic->user_id === $user->id;
    }

    public function restore(User $user, Spastic $spastic): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Spastic $spastic): bool
    {
        return $user->hasRole('admin');
    }
}
