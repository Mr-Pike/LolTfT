<?php

use App\Champion;
use Illuminate\Database\Seeder;

class ChampionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all champions.
        DB::table('champions')->delete();

        // Fill champions cost 1.
        Champion::create(['id' => 1, 'name' => 'Camille', 'description' => "", 'cost_id' => 1, 'tier_id' => 6, 'image' => 'Camille.png', 'enabled' => true]);
        Champion::create(['id' => 2, 'name' => 'Darius', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Darius.png', 'enabled' => true]);
        Champion::create(['id' => 3, 'name' => 'Elise', 'description' => "", 'cost_id' => 1, 'tier_id' => 6, 'image' => 'Elise.png', 'enabled' => true]);
        Champion::create(['id' => 4, 'name' => 'Fiora', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Fiora.png', 'enabled' => true]);
        Champion::create(['id' => 5, 'name' => 'Garen', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Garen.png', 'enabled' => true]);
        Champion::create(['id' => 6, 'name' => 'Graves', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Graves.png', 'enabled' => true]);
        Champion::create(['id' => 7, 'name' => 'Kassadin', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Kassadin.png', 'enabled' => true]);
        Champion::create(['id' => 8, 'name' => 'Khazix', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Khazix.png', 'enabled' => true]);
        Champion::create(['id' => 9, 'name' => 'Mordekaiser', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Mordekaiser.png', 'enabled' => true]);
        Champion::create(['id' => 10, 'name' => 'Nidalee', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Nidalee.png', 'enabled' => true]);
        Champion::create(['id' => 11, 'name' => 'Tristana', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Tristana.png', 'enabled' => true]);
        Champion::create(['id' => 12, 'name' => 'Vayne', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Vayne.png', 'enabled' => true]);
        Champion::create(['id' => 13, 'name' => 'Warwick', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Warwick.png', 'enabled' => true]);

        // Fill champions cost 2.
        Champion::create(['id' => 14, 'name' => 'Ahri', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Ahri.png', 'enabled' => true]);
        Champion::create(['id' => 15, 'name' => 'Blitzcrank', 'description' => "", 'cost_id' => 2, 'tier_id' => 2, 'image' => 'Blitzcrank.png', 'enabled' => true]);
        Champion::create(['id' => 16, 'name' => 'Braum', 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'Braum.png', 'enabled' => true]);
        Champion::create(['id' => 17, 'name' => 'Jayce', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Jayce.png', 'enabled' => true]);
        Champion::create(['id' => 18, 'name' => 'Lissandra', 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'Lissandra.png', 'enabled' => true]);
        Champion::create(['id' => 19, 'name' => 'Lucian', 'description' => "", 'cost_id' => 2, 'tier_id' => 2, 'image' => 'Lucian.png', 'enabled' => true]);
        Champion::create(['id' => 20, 'name' => 'Lulu', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Lulu.png', 'enabled' => true]);
        Champion::create(['id' => 21, 'name' => 'Pyke', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Pyke.png', 'enabled' => true]);
        Champion::create(['id' => 22, 'name' => "Rek'Sai", 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'RekSai.png', 'enabled' => true]);
        Champion::create(['id' => 23, 'name' => 'Shen', 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'Shen.png', 'enabled' => true]);
        Champion::create(['id' => 24, 'name' => 'Twisted Fate', 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'TwistedFate.png', 'enabled' => true]);
        Champion::create(['id' => 25, 'name' => 'Varus', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Varus.png', 'enabled' => true]);
        Champion::create(['id' => 26, 'name' => 'Zed', 'description' => "", 'cost_id' => 2, 'tier_id' => 2, 'image' => 'Zed.png', 'enabled' => true]);

        // Fill champions cost 3.
        Champion::create(['id' => 27, 'name' => 'Aatrox', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Aatrox.png', 'enabled' => true]);
        Champion::create(['id' => 28, 'name' => 'Ashe', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Ashe.png', 'enabled' => true]);
        Champion::create(['id' => 29, 'name' => 'Evelynn', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Evelynn.png', 'enabled' => true]);
        Champion::create(['id' => 30, 'name' => 'Gangplank', 'description' => "", 'cost_id' => 3, 'tier_id' => 4, 'image' => 'Gangplank.png', 'enabled' => true]);
        Champion::create(['id' => 31, 'name' => 'Katarina', 'description' => "", 'cost_id' => 3, 'tier_id' => 2, 'image' => 'Katarina.png', 'enabled' => true]);
        Champion::create(['id' => 32, 'name' => 'Kennen', 'description' => "", 'cost_id' => 3, 'tier_id' => 1, 'image' => 'Kennen.png', 'enabled' => true]);
        Champion::create(['id' => 33, 'name' => 'Morgana', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Morgana.png', 'enabled' => true]);
        Champion::create(['id' => 34, 'name' => 'Poppy', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Poppy.png', 'enabled' => true]);
        Champion::create(['id' => 35, 'name' => 'Rengar', 'description' => "", 'cost_id' => 3, 'tier_id' => 2, 'image' => 'Rengar.png', 'enabled' => true]);
        Champion::create(['id' => 36, 'name' => 'Shyvana', 'description' => "", 'cost_id' => 3, 'tier_id' => 1, 'image' => 'Shyvana.png', 'enabled' => true]);
        Champion::create(['id' => 37, 'name' => 'Veigar', 'description' => "", 'cost_id' => 3, 'tier_id' => 4, 'image' => 'Veigar.png', 'enabled' => true]);
        Champion::create(['id' => 38, 'name' => 'Vi', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Vi.png', 'enabled' => true]);
        Champion::create(['id' => 39, 'name' => 'Volibear', 'description' => "", 'cost_id' => 3, 'tier_id' => 4, 'image' => 'Volibear.png', 'enabled' => true]);

        // Fill champions cost 4.
        Champion::create(['id' => 40, 'name' => 'Akali', 'description' => "", 'cost_id' => 4, 'tier_id' => 1, 'image' => 'Akali.png', 'enabled' => true]);
        Champion::create(['id' => 41, 'name' => 'Aurelion Sol', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'AurelionSol.png', 'enabled' => true]);
        Champion::create(['id' => 42, 'name' => 'Brand', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Brand.png', 'enabled' => true]);
        Champion::create(['id' => 43, 'name' => "Cho'Gath", 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Chogath.png', 'enabled' => true]);
        Champion::create(['id' => 44, 'name' => 'Draven', 'description' => "", 'cost_id' => 4, 'tier_id' => 1, 'image' => 'Draven.png', 'enabled' => true]);
        Champion::create(['id' => 45, 'name' => 'Gnar', 'description' => "", 'cost_id' => 4, 'tier_id' => 1, 'image' => 'Gnar.png', 'enabled' => true]);
        Champion::create(['id' => 46, 'name' => 'Jinx', 'description' => "", 'cost_id' => 4, 'tier_id' => 3, 'image' => 'Jinx.png', 'enabled' => true]);
        Champion::create(['id' => 47, 'name' => 'Kindred', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Kindred.png', 'enabled' => true]);
        Champion::create(['id' => 48, 'name' => 'Leona', 'description' => "", 'cost_id' => 4, 'tier_id' => 3, 'image' => 'Leona.png', 'enabled' => true]);
        Champion::create(['id' => 49, 'name' => 'Sejuani', 'description' => "", 'cost_id' => 4, 'tier_id' => 1, 'image' => 'Sejuani.png', 'enabled' => true]);

        // Fill champions cost 5.
        Champion::create(['id' => 50, 'name' => 'Anivia', 'description' => "", 'cost_id' => 5, 'tier_id' => 3, 'image' => 'Anivia.png', 'enabled' => true]);
        Champion::create(['id' => 51, 'name' => 'Karthus', 'description' => "", 'cost_id' => 5, 'tier_id' => 2, 'image' => 'Karthus.png', 'enabled' => true]);
        Champion::create(['id' => 52, 'name' => 'Kayle', 'description' => "", 'cost_id' => 5, 'tier_id' => 2, 'image' => 'Kayle.png', 'enabled' => true]);
        Champion::create(['id' => 53, 'name' => 'Miss Fortune', 'description' => "", 'cost_id' => 5, 'tier_id' => 3, 'image' => 'MissFortune.png', 'enabled' => true]);
        Champion::create(['id' => 54, 'name' => 'Pantheon', 'description' => "", 'cost_id' => 5, 'tier_id' => 2, 'image' => 'Pantheon.png', 'enabled' => true]);
        Champion::create(['id' => 55, 'name' => 'Swain', 'description' => "", 'cost_id' => 5, 'tier_id' => 1, 'image' => 'Swain.png', 'enabled' => true]);
        Champion::create(['id' => 56, 'name' => 'Yasuo', 'description' => "", 'cost_id' => 5, 'tier_id' => 1, 'image' => 'Yasuo.png', 'enabled' => true]);
        Champion::create(['id' => 57, 'name' => "Kai'sa", 'description' => "", 'cost_id' => 5, 'tier_id' => 3, 'image' => "kaisa.png", 'enabled' => true]);
    }
}
