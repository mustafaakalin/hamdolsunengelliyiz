<?php

namespace App\Policies;

use App\Models\Spinalcord;
use App\Models\User;

class SpinalcordPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Spinalcord $spinalcord): bool
    {
        return $user->hasRole('admin') || $spinalcord->user_id === $user->id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Spinalcord $spinalcord): bool
    {
        return $user->hasRole('admin') || $spinalcord->user_id === $user->id;
    }

    public function delete(User $user, Spinalcord $spinalcord): bool
    {
        return $user->hasRole('admin') || $spinalcord->user_id === $user->id;
    }

    public function restore(User $user, Spinalcord $spinalcord): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Spinalcord $spinalcord): bool
    {
        return $user->hasRole('admin');
    }
}
