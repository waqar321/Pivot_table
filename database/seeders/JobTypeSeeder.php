<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\JobType;

class JobTypeSeeder extends Seeder
{
    public function __construct()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('job_types')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
    public function run(): void
    {
        $jobtypes = [                
            [
                'type_name' => 'full time',
            ],
            [
                'type_name' => 'part time',
            ],
            [
                'type_name' => 'remote',
            ],
        ];


        JobType::insert($jobtypes);
    }
}
