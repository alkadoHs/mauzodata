<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        DB::table('companies')->insert([
            'name' => 'Mauzodata Company LTD',
            'address' => 'P.O.BOX 295, Ilomba, Mbeya',
            'email' => 'mauzodata@gmail.com',
            'phone' => '0760000000',
        ]);

        DB::table('branches')->insert([
            'company_id' => 1,
            'name' => 'MAUZODATA SHOP',
            'address' => 'P.O.BOX 295, Ilomba, Mbeya',
            'phone' => '076000000000',
        ]);

        DB::table('users')->insert([
            'branch_id' => 1,
            'company_id' => 1,
            'name' => 'Mauzodata admin',
            'email' => 'admin@mauzodata.com',
            'role' => 'admin',
            'phone' => '07600000000',
            'email_verified_at' => now(),
            'password' => Hash::make('code2525'),
            'remember_token' => Str::random(10)
        ]);
    }
}
