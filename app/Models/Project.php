<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectUser;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'projects_users', 'projects_id', 'users_id')
                    ->withTimestamps()              //atrach timestamp
                    // ->withPivot(['is_manager'])     //attach is_manager field 
                    // ->as('project_user');           //alieas
                    ->withPivot('manager_id') 
                    ->using(ProjectUser::class);
    }
    public function managers()
    {
        return $this->belongsToMany(User::class, 'projects_users', 'projects_id', 'users_id')
                    ->withTimestamps()
                    ->withPivot(['is_manager'])
                    ->wherePivot('is_manager', 1);          // use where or wherein
                    // ->wherePivotIn('priority', [1,2]);   //again is column me integer values hen to sirf 1 or 2 wali pe condition lagana
    }
}
