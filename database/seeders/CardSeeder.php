<?php

namespace Database\Seeders;

use app\Models\Student;
use app\Models\Subject;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Carbon;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i <= 50; $i++) {
            $student = Student::inRandomOrder(1)->first();
            $subject = Subject::inRandomOrder(1)->first();

            DB::table('cards')->insert([
                'id' => $faker->numberBetween(1, 50),
                'npm' => $student->npm,
                'subject' => $subject->subject,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
