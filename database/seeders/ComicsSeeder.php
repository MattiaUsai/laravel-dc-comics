<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= config('comics');

        DB::table('comics')->truncate();
        foreach ($data as $comics_db ) {


            $newComic= new Comic();

            $newComic->title=$comics_db['title'];
            $newComic->description=$comics_db['description'];
            $newComic->thumb=$comics_db['thumb'];
            $newComic->series=$comics_db['series'];
            $newComic->sale_date=$comics_db['sale_date'];
            $newComic->price=$comics_db['price'];
            $newComic->type=$comics_db['type'];
            // $newComic->artist=$comics_db['artist'];
            // $newComic->writers=$comics_db['writers'];

            $newComic ->save();

    }
}
}