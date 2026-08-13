<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vision;

class VisionPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Vision $vision): bool
    {
        return $user->hasRole('admin') || $vision->user_id === $user->id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Vision $vision): bool
    {
        return $user->hasRole('admin') || $vision->user_id === $user->id;
    }

    public function delete(User $user, Vision $vision): bool
    {
        return $user->hasRole('admin') || $vision->user_id === $user->id;
    }

    public function restore(User $user, Vision $vision): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Vision $vision): bool
    {
        return $user->hasRole('admin');
    }
}
