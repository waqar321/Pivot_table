<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = "jobs";
    protected $fillable = [
        'title',
        'user_id',
        'type',
        'rate',
        'description',
        'tags',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
