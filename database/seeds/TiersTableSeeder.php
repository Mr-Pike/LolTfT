<?php

use App\Tier;
use Illuminate\Database\Seeder;

class TiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all tiers.
        DB::table('tiers')->delete();

        // Fill tiers.
        Tier::create(['name' => 'S']);
        Tier::create(['name' => 'A']);
        Tier::create(['name' => 'B']);
        Tier::create(['name' => 'C']);
        Tier::create(['name' => 'D']);
        Tier::create(['name' => '?']);
    }
}
