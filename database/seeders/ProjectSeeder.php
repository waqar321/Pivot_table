<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use FFI;
// use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Project::factory(10)->create();

        foreach (Project::all() as $project) {
            $users = User::inRandomOrder()->take(rand(1, 3))->pluck('id');
            foreach($users as $user)
            {
                // $project->users()->attach($user, ['is_manager' => rand(0,1)]);
                $project->users()->attach($user, ['manager_id' => User::inRandomOrder()->first()->id]);
            }
        }
    }
}
