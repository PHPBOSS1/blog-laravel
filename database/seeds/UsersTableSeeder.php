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
        $data = [
        [
            'name' => 'Автор не известе',
            'email' => 'autor@gav.com',
            'password' => bcrypt(str_random(16)),
        ],
        $data = [
            'name' => 'Автор',
            'email' => 'autor1@gav.com',
            'password' => bcrypt('123123'),
        ],

        ];

    DB::table('users')->insert($data);
    }

}
