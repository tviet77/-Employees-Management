<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
            "username" => "admin",
            "name" => "admin",
            "password" => bcrypt("admin"),
            "email" => "admin@admin.com",
            "status_id" => 1,
            "department_id" => 1
       ]);

    }
}
