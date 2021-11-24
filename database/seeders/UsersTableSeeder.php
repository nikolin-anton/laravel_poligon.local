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
        $data = [
          [
              'name' => 'Автор не известен',
              'email' => 'autor_unknown@test.com',
              'password' => bcrypt(str_random(14)),
          ],
          [
              'name' => 'Автор',
              'email' => 'autor@test.com',
              'password' => bcrypt(123456),
          ]
        ];

        DB::table('users')->insert($data);
    }
}
