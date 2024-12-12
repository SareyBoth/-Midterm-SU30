<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobTypes = [
            ['id' => 1, 'name' => 'Accounting'],
            ['id' => 2, 'name' => 'Administrative'],
            ['id' => 3, 'name' => 'Advertising'],
            ['id' => 4, 'name' => 'Architecture'],
            ['id' => 5, 'name' => 'Arts and Design'],
            ['id' => 6, 'name' => 'Customer Service'],
            ['id' => 7, 'name' => 'Education'],
            ['id' => 8, 'name' => 'Engineering'],
            ['id' => 9, 'name' => 'Healthcare'],
            ['id' => 10, 'name' => 'Hospitality'],
            ['id' => 11, 'name' => 'Human Resources'],
            ['id' => 12, 'name' => 'Information Technology'],
            ['id' => 13, 'name' => 'Legal'],
            ['id' => 14, 'name' => 'Logistics'],
            ['id' => 15, 'name' => 'Management'],
            ['id' => 16, 'name' => 'Manufacturing'],
            ['id' => 17, 'name' => 'Marketing'],
            ['id' => 18, 'name' => 'Media and Communication'],
            ['id' => 19, 'name' => 'Project Management'],
            ['id' => 20, 'name' => 'Public Relations'],
            ['id' => 21, 'name' => 'Real Estate'],
            ['id' => 22, 'name' => 'Research and Development'],
            ['id' => 23, 'name' => 'Sales'],
            ['id' => 24, 'name' => 'Science'],
            ['id' => 25, 'name' => 'Skilled Labor'],
            ['id' => 26, 'name' => 'Software Development'],
            ['id' => 27, 'name' => 'Telecommunications'],
            ['id' => 28, 'name' => 'Tourism'],
            ['id' => 29, 'name' => 'Transportation'],
            ['id' => 30, 'name' => 'Writing and Editing'],
        ];

        DB::table('job_type')->insert($jobTypes);
    }
}
