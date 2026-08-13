<?php

namespace App\Policies;

use App\Models\About;
use App\Models\User;

class AboutPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, About $about): bool
    {
        return $user->hasRole('admin') || $about->user_id === $user->id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, About $about): bool
    {
        return $user->hasRole('admin') || $about->user_id === $user->id;
    }

    public function delete(User $user, About $about): bool
    {
        return $user->hasRole('admin') || $about->user_id === $user->id;
    }

    public function restore(User $user, About $about): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, About $about): bool
    {
        return $user->hasRole('admin');
    }
}
