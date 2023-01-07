<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Default Super Admin
        DB::table('users')->insert([
            'fname' => 'Super',
            'sname' => 'Admin',
            'dob' => Carbon::now()->subYears(20)->format('Y-m-d'),
            'email_verified_at' => Carbon::now(),
            'email' => 'admin@email.com',
            'role' => 3,
            'password' => Hash::make('admin@email.com'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'created_by' => null,
        ]);
    }
}
