<?php

use App\ChampionOrigin;
use Illuminate\Database\Seeder;

class ChampionsOriginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all champions origins.
        DB::table('champions_origins')->delete();

        // Fill the champions origins.
        ChampionOrigin::create(['champion_id' => 1, 'origin_id' => 5]);
        ChampionOrigin::create(['champion_id' => 2, 'origin_id' => 7]);
        ChampionOrigin::create(['champion_id' => 3, 'origin_id' => 1]);
        ChampionOrigin::create(['champion_id' => 4, 'origin_id' => 8]);
        ChampionOrigin::create(['champion_id' => 5, 'origin_id' => 8]);
        ChampionOrigin::create(['champion_id' => 6, 'origin_id' => 10]);
        ChampionOrigin::create(['champion_id' => 7, 'origin_id' => 13]);
        ChampionOrigin::create(['champion_id' => 8, 'origin_id' => 13]);
        ChampionOrigin::create(['champion_id' => 9, 'origin_id' => 11]);
        ChampionOrigin::create(['champion_id' => 10, 'origin_id' => 12]);
        ChampionOrigin::create(['champion_id' => 11, 'origin_id' => 14]);
        ChampionOrigin::create(['champion_id' => 12, 'origin_id' => 8]);
        ChampionOrigin::create(['champion_id' => 13, 'origin_id' => 12]);
        ChampionOrigin::create(['champion_id' => 14, 'origin_id' => 12]);
        ChampionOrigin::create(['champion_id' => 15, 'origin_id' => 6]);
        ChampionOrigin::create(['champion_id' => 16, 'origin_id' => 4]);
        ChampionOrigin::create(['champion_id' => 17, 'origin_id' => 5]);
        ChampionOrigin::create(['champion_id' => 18, 'origin_id' => 4]);
        ChampionOrigin::create(['champion_id' => 19, 'origin_id' => 8]);
        ChampionOrigin::create(['champion_id' => 20, 'origin_id' => 14]);
        ChampionOrigin::create(['champion_id' => 21, 'origin_id' => 10]);
        ChampionOrigin::create(['champion_id' => 22, 'origin_id' => 13]);
        ChampionOrigin::create(['champion_id' => 23, 'origin_id' => 9]);
        ChampionOrigin::create(['champion_id' => 24, 'origin_id' => 10]);
        ChampionOrigin::create(['champion_id' => 25, 'origin_id' => 1]);
        ChampionOrigin::create(['champion_id' => 26, 'origin_id' => 9]);
        ChampionOrigin::create(['champion_id' => 27, 'origin_id' => 1]);
        ChampionOrigin::create(['champion_id' => 28, 'origin_id' => 4]);
        ChampionOrigin::create(['champion_id' => 29, 'origin_id' => 1]);
        ChampionOrigin::create(['champion_id' => 30, 'origin_id' => 10]);
        ChampionOrigin::create(['champion_id' => 31, 'origin_id' => 7]);
        ChampionOrigin::create(['champion_id' => 32, 'origin_id' => 9]);
        ChampionOrigin::create(['champion_id' => 32, 'origin_id' => 14]);
        ChampionOrigin::create(['champion_id' => 33, 'origin_id' => 1]);
        ChampionOrigin::create(['champion_id' => 34, 'origin_id' => 14]);
        ChampionOrigin::create(['champion_id' => 35, 'origin_id' => 12]);
        ChampionOrigin::create(['champion_id' => 36, 'origin_id' => 2]);
        ChampionOrigin::create(['champion_id' => 37, 'origin_id' => 14]);
        ChampionOrigin::create(['champion_id' => 38, 'origin_id' => 5]);
        ChampionOrigin::create(['champion_id' => 39, 'origin_id' => 4]);
        ChampionOrigin::create(['champion_id' => 40, 'origin_id' => 9]);
        ChampionOrigin::create(['champion_id' => 41, 'origin_id' => 2]);
        ChampionOrigin::create(['champion_id' => 42, 'origin_id' => 1]);
        ChampionOrigin::create(['champion_id' => 43, 'origin_id' => 13]);
        ChampionOrigin::create(['champion_id' => 44, 'origin_id' => 7]);
        ChampionOrigin::create(['champion_id' => 45, 'origin_id' => 12]);
        ChampionOrigin::create(['champion_id' => 45, 'origin_id' => 14]);
        ChampionOrigin::create(['champion_id' => 46, 'origin_id' => 5]);
        ChampionOrigin::create(['champion_id' => 47, 'origin_id' => 11]);
        ChampionOrigin::create(['champion_id' => 48, 'origin_id' => 8]);
        ChampionOrigin::create(['champion_id' => 49, 'origin_id' => 4]);
        ChampionOrigin::create(['champion_id' => 50, 'origin_id' => 4]);
        ChampionOrigin::create(['champion_id' => 51, 'origin_id' => 11]);
        ChampionOrigin::create(['champion_id' => 52, 'origin_id' => 8]);
        ChampionOrigin::create(['champion_id' => 53, 'origin_id' => 10]);
        ChampionOrigin::create(['champion_id' => 54, 'origin_id' => 2]);
        ChampionOrigin::create(['champion_id' => 55, 'origin_id' => 7]);
        ChampionOrigin::create(['champion_id' => 55, 'origin_id' => 1]);
        ChampionOrigin::create(['champion_id' => 56, 'origin_id' => 3]);
        ChampionOrigin::create(['champion_id' => 57, 'origin_id' => 13]);
    }
}
