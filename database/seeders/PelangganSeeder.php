<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('pelanggan')->insert([
                'first_name' => fake()->firstName(),
                'last_name'  => fake()->lastName(),
                'birthday'   => fake()->date('Y-m-d', '2005-01-01'),
                'gender'     => fake()->randomElement(['Male', 'Female', 'Other']),
                'email'      => fake()->unique()->safeEmail(),
                'phone'      => fake()->phoneNumber(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}