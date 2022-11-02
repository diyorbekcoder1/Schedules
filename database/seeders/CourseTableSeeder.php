<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['name'=>'1-курс','status'=>'1'],
            ['name'=>'2-курс','status'=>'1'],
            ['name'=>'3-курс','status'=>'1'],
            ['name'=>'4-курс','status'=>'1'],



        ];
        foreach ($data as $datum) {
            Courses::create($datum);
        }

    }
}
