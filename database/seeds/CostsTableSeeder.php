<?php

use App\Cost;
use Illuminate\Database\Seeder;

class CostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all costs.
        DB::table('costs')->delete();

        // Fill costs.
        Cost::create(['cost' => 1]);
        Cost::create(['cost' => 2]);
        Cost::create(['cost' => 3]);
        Cost::create(['cost' => 4]);
        Cost::create(['cost' => 5]);
    }
}
