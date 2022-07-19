<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $comic = new Comic();
            $comic->autore = $faker -> word();
            $comic->descrizione = $faker->sentence();
            $comic->genere = $faker->word();
            $comic->price = $faker->randomDigit();
            $comic->created_at = '08:22:15'; 
            $comic->updated_at = '08:58:45';
            $comic->save();
        }
    }
}
