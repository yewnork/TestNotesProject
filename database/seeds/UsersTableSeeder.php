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
    	$user1 = User::create(array(
                'email' => "greg@test.com",
                'name' => "Greg",
                'password' => Hash::make("123123"),
            ));
        $user2 = User::create(array(
                'email' => "tim@test.com",
                'name' => "Tim",
                'password' => Hash::make("abcabc"),
            ));

    }
}
