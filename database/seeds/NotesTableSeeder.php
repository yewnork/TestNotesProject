<?php

use Illuminate\Database\Seeder;

use App\Note;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 5; $i++)
        {
            $user = Note::create(array(
                'content' => "Seeder Note " . $i,
                'user_id' => 1,
            ));
        }
    
    }
}
