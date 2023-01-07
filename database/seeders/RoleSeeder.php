<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Super Admin role
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Super Admin',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //Admin role
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Admin',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //User role
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'User',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
