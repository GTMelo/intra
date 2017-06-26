<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ['codigo', 'label', 'rank'];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function grant($user)
    {
        return $this->users()->attach($user);
    }

    public function revoke($user)
    {
        return $this->users()->detach($user);
    }
}
