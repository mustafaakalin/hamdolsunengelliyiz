<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hearing extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'name';
    }

    protected $fillable = [
        'user_id',
        'slug',
        'name',
        'title',
        'description',
        'image',
        'twitter',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
