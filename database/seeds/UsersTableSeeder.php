<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'adminname' => 'rajni',
          'state' => 'butwal',
          'country' => 'Nepal',
          'email' => 'rajni@myself.com',
          'password' => Hash::make('rajni123'),
        ]);
    }
}
