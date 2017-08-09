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
    	$user_me = User::create(array(
                'email' => "greg@test.com",
                'name' => "Greg",
                'password' => Hash::make("123123"),
            ));

        // $faker = Faker\Factory::create();

        // for ($i = 0; $i < 5; $i++)
        // {
        //     $user = User::create(array(
        //         'email' => $faker->email,
        //         'name' => $faker->unique()->name,
        //         'password' => $faker->word,
        //     ));
        // }
    }
}
