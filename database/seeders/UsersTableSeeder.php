<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Admin',
            'user_name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('aaaaaaaa'),
        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author',
            'user_name'=>'author',
            'email'=>'author@gmail.com',
            'password'=>bcrypt('aaaaaaaa'),
        ]);
    }
}
