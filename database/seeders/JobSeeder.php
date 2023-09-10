<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Job;

class JobSeeder extends Seeder
{

        public function __construct()
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table('jobs')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
        public function run(): void
        {
            $jobs = [
                [
                    'title' => 'Senior Web Developer',
                    'user_id' => 1, 
                    'type' => 2, 
                    'rate' => 50, 
                    'description' => 'Lorem Ipsum is simply dummy text of the printing a...', 
                    'tags' => 'php, laravel, HTML, CSS', 
                ],
                [
                    'title' => 'Wordpress Developer',
                    'user_id' => 2, 
                    'type' => 1, 
                    'rate' => 50, 
                    'description' => 'Lorem Ipsum is simply dummy text of the printing a...', 
                    'tags' => 'php, Wordpress', 
                ],
                [
                    'title' => '.NET Developer',
                    'user_id' => 3, 
                    'type' => 2, 
                    'rate' => 60, 
                    'description' => 'Lorem Ipsum is simply dummy text of the printing a...', 
                    'tags' => '.net', 
                ],
                [
                    'title' => 'Front end Developer',
                    'user_id' => 3, 
                    'type' => 2, 
                    'rate' => 30, 
                    'description' => 'Lorem Ipsum is simply dummy text of the printing a...', 
                    'tags' => 'HTML, CSS, Bootstrap', 
                ],
            ];
   
    
            Job::insert($jobs);
        }
}
