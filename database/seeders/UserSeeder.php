<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\USer;

class UserSeeder extends Seeder
{
    public function __construct()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
    public function run(): void
    {
        $users = [

            [
                'first_name' => 'Waqar',
                'last_name' => 'Mughal',
                'profession' => 'Senior Web Developer', 
                'email' => 'waqarmughal707@gmail.com', 
                'country_id' => 162, 
                'password' => '$2y$10$wbKOokBTGRwd3s5uHsfVmu3j6YcTjepaR598H7fIhIReojMjjxQw.', 
                'status' => 1, 
            ],
            [
                'first_name' => 'Rehan',
                'last_name' => 'Mughal',
                'profession' => 'Wordpress Developer', 
                'email' => 'waqarmughal7071@gmail.com', 
                'country_id' => 162, 
                'password' => '$2y$10$wbKOokBTGRwd3s5uHsfVmu3j6YcTjepaR598H7fIhIReojMjjxQw.', 
                'status' => 1, 
            ],
            [
                'first_name' => 'Faisal',
                'last_name' => 'Mughal',
                'profession' =>  '.NET Developer',
                'email' =>'waqarmughal7072@gmail.com', 
                'country_id' => 162, 
                'password' => '$2y$10$wbKOokBTGRwd3s5uHsfVmu3j6YcTjepaR598H7fIhIReojMjjxQw.', 
                'status' => 1, 
            ],
            [
                'first_name' => 'Aamir',
                'last_name' => 'Mughal',
                'profession' =>  'Front end Developer',
                'email' => 'waqarmughal7073@gmail.com', 
                'country_id' => 162, 
                'password' => '$2y$10$wbKOokBTGRwd3s5uHsfVmu3j6YcTjepaR598H7fIhIReojMjjxQw.', 
                'status' => 1, 
            ],
        ];


        USer::insert($users);
    }
    
}
