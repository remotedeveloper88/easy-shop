<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'Guy',
            'email' => 'guy@guy.com',
            'password' => bcrypt('guy'),
        ]);
    }
}
