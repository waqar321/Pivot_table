<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";

    protected $fillable = [
        'first_name',
        'last_name',
        'profession',
        'email',
        'country_id',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function country(){
    	return $this->belongsTo(Country::class, 'country_id', 'id');    
    }
    public function jobs(){
    	return $this->HasMany(Job::class);    
    }
    public function projects(){
        return $this->belongsToMany(Project::class);
    }

}
