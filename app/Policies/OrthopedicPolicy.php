<?php

namespace App\Policies;

use App\Models\Orthopedic;
use App\Models\User;

class OrthopedicPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Orthopedic $orthopedic): bool
    {
        return $user->hasRole('admin') || $orthopedic->user_id === $user->id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Orthopedic $orthopedic): bool
    {
        return $user->hasRole('admin') || $orthopedic->user_id === $user->id;
    }

    public function delete(User $user, Orthopedic $orthopedic): bool
    {
        return $user->hasRole('admin') || $orthopedic->user_id === $user->id;
    }

    public function restore(User $user, Orthopedic $orthopedic): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Orthopedic $orthopedic): bool
    {
        return $user->hasRole('admin');
    }
}
