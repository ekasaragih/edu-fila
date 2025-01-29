<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Insert fake data into the monitoring table
        DB::table('diagnostic')->insert([
            [
                'nama' => $faker->name,
                'umur' => $faker->numberBetween(18, 60),
                'alamat' => $faker->address,
                'jenis_kelamin' => $faker->randomElement([0, 1]), // 0 for Laki-laki, 1 for Perempuan
                'hasil_diagnosa' => $faker->boolean() ? 1 : 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => $faker->name,
                'umur' => $faker->numberBetween(18, 60),
                'alamat' => $faker->address,
                'jenis_kelamin' => $faker->randomElement([0, 1]), // 0 for Laki-laki, 1 for Perempuan
                'hasil_diagnosa' => $faker->boolean() ? 1 : 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
