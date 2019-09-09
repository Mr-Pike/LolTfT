<?php

use App\ChampionItem;
use Illuminate\Database\Seeder;

class ChampionsItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all champions items.
        DB::table('champions_items')->delete();

        ChampionItem::create(['champion_id' => 1, 'item_id' => 25, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 1, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 1, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 2, 'item_id' => 39, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 2, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 2, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 3, 'item_id' => 35, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 3, 'item_id' => 38, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 3, 'item_id' => 28, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 4, 'item_id' => 25, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 4, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 4, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 5, 'item_id' => 40, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 5, 'item_id' => 11, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 5, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 6, 'item_id' => 35, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 6, 'item_id' => 18, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 6, 'item_id' => 18, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 7, 'item_id' => 42, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 7, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 7, 'item_id' => 41, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 8, 'item_id' => 12, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 8, 'item_id' => 18, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 8, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 9, 'item_id' => 11, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 9, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 9, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 10, 'item_id' => 41, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 10, 'item_id' => 42, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 10, 'item_id' => 34, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 11, 'item_id' => 38, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 11, 'item_id' => 35, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 11, 'item_id' => 33, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 12, 'item_id' => 20, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 12, 'item_id' => 35, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 12, 'item_id' => 41, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 13, 'item_id' => 11, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 13, 'item_id' => 28, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 13, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 14, 'item_id' => 23, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 14, 'item_id' => 41, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 14, 'item_id' => 15, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 15, 'item_id' => 41, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 15, 'item_id' => 22, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 15, 'item_id' => 17, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 16, 'item_id' => 26, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 16, 'item_id' => 26, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 16, 'item_id' => 28, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 17, 'item_id' => 41, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 17, 'item_id' => 23, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 17, 'item_id' => 28, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 18, 'item_id' => 40, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 18, 'item_id' => 21, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 18, 'item_id' => 21, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 19, 'item_id' => 21, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 19, 'item_id' => 15, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 19, 'item_id' => 39, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 20, 'item_id' => 41, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 20, 'item_id' => 22, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 20, 'item_id' => 22, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 21, 'item_id' => 40, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 21, 'item_id' => 11, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 21, 'item_id' => 22, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 22, 'item_id' => 11, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 22, 'item_id' => 28, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 22, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 23, 'item_id' => 11, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 23, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 23, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 24, 'item_id' => 23, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 24, 'item_id' => 23, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 24, 'item_id' => 15, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 25, 'item_id' => 20, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 25, 'item_id' => 35, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 25, 'item_id' => 41, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 26, 'item_id' => 12, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 26, 'item_id' => 18, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 26, 'item_id' => 25, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 27, 'item_id' => 39, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 27, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 27, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 28, 'item_id' => 20, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 28, 'item_id' => 35, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 28, 'item_id' => 41, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 29, 'item_id' => 34, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 29, 'item_id' => 42, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 29, 'item_id' => 39, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 30, 'item_id' => 35, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 30, 'item_id' => 38, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 30, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 31, 'item_id' => 40, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 31, 'item_id' => 21, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 31, 'item_id' => 21, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 32, 'item_id' => 40, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 32, 'item_id' => 42, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 32, 'item_id' => 34, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 33, 'item_id' => 40, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 33, 'item_id' => 42, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 33, 'item_id' => 34, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 34, 'item_id' => 28, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 34, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 34, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 35, 'item_id' => 42, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 35, 'item_id' => 25, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 35, 'item_id' => 18, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 36, 'item_id' => 39, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 36, 'item_id' => 28, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 36, 'item_id' => 41, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 37, 'item_id' => 22, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 37, 'item_id' => 22, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 37, 'item_id' => 21, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 38, 'item_id' => 11, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 38, 'item_id' => 28, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 38, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 39, 'item_id' => 18, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 39, 'item_id' => 18, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 39, 'item_id' => 35, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 40, 'item_id' => 21, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 40, 'item_id' => 39, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 40, 'item_id' => 34, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 41, 'item_id' => 22, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 41, 'item_id' => 41, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 41, 'item_id' => 17, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 42, 'item_id' => 22, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 42, 'item_id' => 41, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 42, 'item_id' => 17, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 43, 'item_id' => 40, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 43, 'item_id' => 42, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 43, 'item_id' => 17, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 44, 'item_id' => 18, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 44, 'item_id' => 25, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 44, 'item_id' => 41, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 45, 'item_id' => 25, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 45, 'item_id' => 41, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 45, 'item_id' => 28, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 46, 'item_id' => 18, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 46, 'item_id' => 12, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 46, 'item_id' => 39, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 47, 'item_id' => 23, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 47, 'item_id' => 23, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 47, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 48, 'item_id' => 32, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 48, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 48, 'item_id' => 42, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 49, 'item_id' => 22, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 49, 'item_id' => 42, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 49, 'item_id' => 40, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 50, 'item_id' => 21, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 50, 'item_id' => 21, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 50, 'item_id' => 40, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 51, 'item_id' => 21, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 51, 'item_id' => 21, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 51, 'item_id' => 17, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 52, 'item_id' => 21, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 52, 'item_id' => 21, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 52, 'item_id' => 41, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 53, 'item_id' => 21, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 53, 'item_id' => 21, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 53, 'item_id' => 40, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 54, 'item_id' => 22, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 54, 'item_id' => 22, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 54, 'item_id' => 28, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 55, 'item_id' => 40, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 55, 'item_id' => 42, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 55, 'item_id' => 28, 'order_number' => 3, 'recommended' => true]);

        ChampionItem::create(['champion_id' => 56, 'item_id' => 21, 'order_number' => 1, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 56, 'item_id' => 34, 'order_number' => 2, 'recommended' => true]);
        ChampionItem::create(['champion_id' => 56, 'item_id' => 15, 'order_number' => 3, 'recommended' => true]);
    }
}
