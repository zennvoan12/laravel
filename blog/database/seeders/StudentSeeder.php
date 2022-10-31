<?php

namespace Database\Seeders;

use App\Models\Lecture;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
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
            $lecture = Lecture::inRandomOrder(1)->first();
            DB::table('students')->insert([

                'npm' => rand(5520120000, 5520120999),
                'name' => $faker->name,
                'kelas' => $faker->randomElement(['A', 'B', 'C', 'NR']),
                'alamat' => $faker->address,
                'nidn' => $lecture->nidn,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
