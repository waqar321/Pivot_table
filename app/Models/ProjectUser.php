<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    use HasFactory;

    public function manager(){
        return $this->belongsTo(User::class, 'manager_id');
    }
}



// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Project extends Model
// {
//     use HasFactory;
//     protected $fillable = ['name'];

//     public function users(){
//         return $this->belongsToMany(User::class, 'projects_users', 'projects_id', 'users_id')
//                     ->withTimestamps()
//                     ->withPivot(['is_manager'])
//                     ->as('project_user');
//     }
//     public function managers()
//     {
//         return $this->belongsToMany(User::class, 'projects_users', 'projects_id', 'users_id')
//                     ->withTimestamps()
//                     ->withPivot(['is_manager'])
//                     ->wherePivot('is_manager', 1);          // use where or wherein
//                     // ->wherePivotIn('priority', [1,2]);   //again is column me integer values hen to sirf 1 or 2 wali pe condition lagana
//     }
// }
