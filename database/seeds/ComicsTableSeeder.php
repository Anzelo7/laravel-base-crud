<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = include('config\data\comics.php');
        foreach ($comics as $model){
            $comic = new Comic();
            $comic->title = $model['title'];
            $comic->description = $model['description'];
            $comic->type = $model['type'];
            $comic->series = $model['series'];
            $comic->sale_date = $model['sale_date'];
            $comic->save();
        }


    }
}
