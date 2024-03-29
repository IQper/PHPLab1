<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot(['is_owner', 'is_moder']);
    }
}
