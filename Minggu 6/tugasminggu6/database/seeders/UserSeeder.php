<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin111'),
            'role'=>'admin',
            'created_at'=>\Carbon\Carbon::now(),
            'email_verified_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'=>'User',
            'username'=>'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('user111'),
            'role'=>'user',
            'created_at'=>\Carbon\Carbon::now(),
            'email_verified_at'=>\Carbon\Carbon::now()
        ]);
    }
}
