<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TiersTableSeeder::class);
        $this->call(CostsTableSeeder::class);
        $this->call(ChampionsTableSeeder::class);
        $this->call(OriginsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(ChampionsOriginsTableSeeder::class);
        $this->call(ChampionsClassesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ChampionsItemsTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(ChampionsLevelsTableSeeder::class);
    }
}
