<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all levels.
        DB::table('levels')->delete();

        // Fill levels.
        Level::create(['level' => 1]);
        Level::create(['level' => 2]);
        Level::create(['level' => 3]);
    }
}
