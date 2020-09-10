<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use App\Profile;
use App\Role;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function roles()
    {
        return $this->belongsTo(Role::class);
    }

    public function is_admin(){
        return $this->role_id === 1;
    }
    public function is_collaborator(){
        return $this->role_id === 2;
    }
    public function is_editor(){
        return $this->role_id === 3;
    }
    public function is_author(){
        return $this->role_id === 4;
    }
    public function is_client(){
        return $this->role_id === 5;
    }
}
