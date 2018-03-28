<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Peter Smith',
        'email'    => 'peter@email.com',
        'password' => Hash::make('password'),
    ));
}

}
