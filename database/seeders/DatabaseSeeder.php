<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Company::factory()->create([
            'name' => 'Mauzodata Company LTD',
            'address' => 'P.O.BOX 295, Ilomba, Mbeya',
            'email' => 'mauzodata@gmail.com',
            'phone' => '0760000000',
        ]);

        Branch::factory()->create([
            'company_id' => 1,
            'name' => 'MAUZODATA SHOP',
            'address' => 'P.O.BOX 295, Ilomba, Mbeya',
            'phone' => '076000000000',
        ]);

        User::factory()->create([
            'branch_id' => 1,
            'company_id' => 1,
            'name' => 'Alkado Hs',
            'email' => 'alkado@gmail.com',
            'role' => 'admin',
            'phone' => '07600000000',
            'email_verified_at' => now(),
            'password' => Hash::make('Alkado$255'),
            'remember_token' => Str::random(10)
        ]);
    }
}
