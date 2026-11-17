<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

        // hapus data lama (opsional, lihat catatan di bawah)
        DB::table('pelanggan')->truncate();

        for ($i = 0; $i < 20; $i++) {
            DB::table('pelanggan')->insert([
                'first_name' => $faker->firstName(),
                'last_name'  => $faker->lastName(),
                'birthday'   => $faker->date('Y-m-d', '2005-01-01'),
                'gender'     => $faker->randomElement(['Male', 'Female', 'Other']),
                'email'      => $faker->unique()->userName() . '@gmail.com',
                'phone'      => '08' . $faker->numerify('##########'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
