<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    protected $fillable = [
        'id', 'name', 'description',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
