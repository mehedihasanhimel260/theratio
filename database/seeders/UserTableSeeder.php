<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin data
            [
                'name' =>'Admin',               
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => Hash::make('12345678'),
                'phone' => '01738920277',
            ],

           
            //user or customer data
            [
                'name' =>'User',                
                'email' => 'user@user.com',
                'role' => 'user',
                'password' => Hash::make('12345678'),
                'phone' => '01738920277',
                
            ],
        ]);
     
    }
}
