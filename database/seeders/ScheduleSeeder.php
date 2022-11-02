<?php

namespace Database\Seeders;

use app\Models\Lecture;
use app\Models\Subject;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            # code...
            $subject = Subject::inRandomOrder(1)->first();
            $lecture = Lecture::inRandomOrder(1)->first();
            DB::table('schedules')->insert([
                'id' => $faker->numberBetween(1, 50),
                'code_subject' => $subject->code_subject,
                'nidn' => $lecture->nidn,
                'class' => $faker->randomElement([
                    'A', 'B,', 'C', 'NR'
                ]),
                'day' => $faker->dayOfWeek(),
                'time' => $faker->timezone(),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ]);
        }
    }
}
