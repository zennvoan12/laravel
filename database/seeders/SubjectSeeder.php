<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Card;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SubjectSeeder extends Seeder
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

            DB::table('subjects')->insert([
                'code_subject' => mt_rand(00000000, 99999999),
                'name_subject' => $faker->jobTitle(),
                'sks' => mt_rand(1, 3),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
