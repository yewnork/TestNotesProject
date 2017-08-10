<?php

use Illuminate\Database\Seeder;

use App\Note;
use Faker\Factory as Faker;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 9; $i++)
        {
            $user = Note::create(array(
                'content' => $faker->paragraph,
                'user_id' => rand(1,2),
            ));
        }
    
    }
}
