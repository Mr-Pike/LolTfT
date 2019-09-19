<?php

use App\ChampionClass;
use Illuminate\Database\Seeder;

class ChampionsClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all champions classes.
        DB::table('champions_classes')->delete();

        // Fill the champions classes.
        ChampionClass::create(['champion_id' => 1, 'class_id' => 2]);
        ChampionClass::create(['champion_id' => 2, 'class_id' => 7]);
        ChampionClass::create(['champion_id' => 3, 'class_id' => 9]);
        ChampionClass::create(['champion_id' => 4, 'class_id' => 2]);
        ChampionClass::create(['champion_id' => 5, 'class_id' => 7]);
        ChampionClass::create(['champion_id' => 6, 'class_id' => 6]);
        ChampionClass::create(['champion_id' => 7, 'class_id' => 10]);
        ChampionClass::create(['champion_id' => 8, 'class_id' => 1]);
        ChampionClass::create(['champion_id' => 9, 'class_id' => 7]);
        ChampionClass::create(['champion_id' => 10, 'class_id' => 9]);
        ChampionClass::create(['champion_id' => 11, 'class_id' => 6]);
        ChampionClass::create(['champion_id' => 12, 'class_id' => 8]);
        ChampionClass::create(['champion_id' => 13, 'class_id' => 3]);
        ChampionClass::create(['champion_id' => 14, 'class_id' => 10]);
        ChampionClass::create(['champion_id' => 15, 'class_id' => 3]);
        ChampionClass::create(['champion_id' => 16, 'class_id' => 5]);
        ChampionClass::create(['champion_id' => 17, 'class_id' => 9]);
        ChampionClass::create(['champion_id' => 18, 'class_id' => 4]);
        ChampionClass::create(['champion_id' => 19, 'class_id' => 6]);
        ChampionClass::create(['champion_id' => 20, 'class_id' => 10]);
        ChampionClass::create(['champion_id' => 21, 'class_id' => 1]);
        ChampionClass::create(['champion_id' => 22, 'class_id' => 3]);
        ChampionClass::create(['champion_id' => 23, 'class_id' => 2]);
        ChampionClass::create(['champion_id' => 24, 'class_id' => 10]);
        ChampionClass::create(['champion_id' => 25, 'class_id' => 8]);
        ChampionClass::create(['champion_id' => 26, 'class_id' => 1]);
        ChampionClass::create(['champion_id' => 27, 'class_id' => 2]);
        ChampionClass::create(['champion_id' => 28, 'class_id' => 8]);
        ChampionClass::create(['champion_id' => 29, 'class_id' => 1]);
        ChampionClass::create(['champion_id' => 30, 'class_id' => 6]);
        ChampionClass::create(['champion_id' => 30, 'class_id' => 2]);
        ChampionClass::create(['champion_id' => 31, 'class_id' => 1]);
        ChampionClass::create(['champion_id' => 32, 'class_id' => 4]);
        ChampionClass::create(['champion_id' => 33, 'class_id' => 10]);
        ChampionClass::create(['champion_id' => 34, 'class_id' => 7]);
        ChampionClass::create(['champion_id' => 35, 'class_id' => 1]);
        ChampionClass::create(['champion_id' => 36, 'class_id' => 9]);
        ChampionClass::create(['champion_id' => 37, 'class_id' => 10]);
        ChampionClass::create(['champion_id' => 38, 'class_id' => 3]);
        ChampionClass::create(['champion_id' => 39, 'class_id' => 3]);
        ChampionClass::create(['champion_id' => 40, 'class_id' => 1]);
        ChampionClass::create(['champion_id' => 41, 'class_id' => 10]);
        ChampionClass::create(['champion_id' => 42, 'class_id' => 4]);
        ChampionClass::create(['champion_id' => 43, 'class_id' => 3]);
        ChampionClass::create(['champion_id' => 44, 'class_id' => 2]);
        ChampionClass::create(['champion_id' => 45, 'class_id' => 9]);
        ChampionClass::create(['champion_id' => 46, 'class_id' => 6]);
        ChampionClass::create(['champion_id' => 47, 'class_id' => 8]);
        ChampionClass::create(['champion_id' => 48, 'class_id' => 5]);
        ChampionClass::create(['champion_id' => 49, 'class_id' => 7]);
        ChampionClass::create(['champion_id' => 50, 'class_id' => 4]);
        ChampionClass::create(['champion_id' => 51, 'class_id' => 10]);
        ChampionClass::create(['champion_id' => 52, 'class_id' => 7]);
        ChampionClass::create(['champion_id' => 53, 'class_id' => 6]);
        ChampionClass::create(['champion_id' => 54, 'class_id' => 5]);
        ChampionClass::create(['champion_id' => 55, 'class_id' => 9]);
        ChampionClass::create(['champion_id' => 56, 'class_id' => 2]);
        ChampionClass::create(['champion_id' => 57, 'class_id' => 1]);
        ChampionClass::create(['champion_id' => 57, 'class_id' => 8]);
    }
}
