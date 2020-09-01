<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'I Putu Sudiharta',
                'level' => 'admin',
                'email' => 'sudihartaiputu@gmail.com',
                'password' => bcrypt('smanev')
            ],
            [
                'name' => 'Operator',
                'level' => 'operator',
                'email' => 'operator@smanev.com',
                'password' => bcrypt('smanev')
            ],

        ]);
    }
}
