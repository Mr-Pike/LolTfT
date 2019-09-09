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
        Champion::create(['name' => 'Camille', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Camille.png', 'enabled' => true]);
        Champion::create(['name' => 'Darius', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Darius.png', 'enabled' => true]);
        Champion::create(['name' => 'Elise', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Elise.png', 'enabled' => true]);
        Champion::create(['name' => 'Fiora', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Fiora.png', 'enabled' => true]);
        Champion::create(['name' => 'Garen', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Garen.png', 'enabled' => true]);
        Champion::create(['name' => 'Graves', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Graves.png', 'enabled' => true]);
        Champion::create(['name' => 'Kassadin', 'description' => "", 'cost_id' => 1, 'tier_id' => 3, 'image' => 'Kassadin.png', 'enabled' => true]);
        Champion::create(['name' => 'Khazix', 'description' => "", 'cost_id' => 1, 'tier_id' => 3, 'image' => 'Khazix.png', 'enabled' => true]);
        Champion::create(['name' => 'Mordekaiser', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Mordekaiser.png', 'enabled' => true]);
        Champion::create(['name' => 'Nidalee', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Nidalee.png', 'enabled' => true]);
        Champion::create(['name' => 'Tristana', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Tristana.png', 'enabled' => true]);
        Champion::create(['name' => 'Vayne', 'description' => "", 'cost_id' => 1, 'tier_id' => 4, 'image' => 'Vayne.png', 'enabled' => true]);
        Champion::create(['name' => 'Warwick', 'description' => "", 'cost_id' => 1, 'tier_id' => 5, 'image' => 'Warwick.png', 'enabled' => true]);

        // Fill champions cost 2.
        Champion::create(['name' => 'Ahri', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Ahri.png', 'enabled' => true]);
        Champion::create(['name' => 'Blitzcrank', 'description' => "", 'cost_id' => 2, 'tier_id' => 2, 'image' => 'Blitzcrank.png', 'enabled' => true]);
        Champion::create(['name' => 'Braum', 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'Braum.png', 'enabled' => true]);
        Champion::create(['name' => 'Jayce', 'description' => "", 'cost_id' => 2, 'tier_id' => 5, 'image' => 'Jayce.png', 'enabled' => true]);
        Champion::create(['name' => 'Lissandra', 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'Lissandra.png', 'enabled' => true]);
        Champion::create(['name' => 'Lucian', 'description' => "", 'cost_id' => 2, 'tier_id' => 2, 'image' => 'Lucian.png', 'enabled' => true]);
        Champion::create(['name' => 'Lulu', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Lulu.png', 'enabled' => true]);
        Champion::create(['name' => 'Pyke', 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'Pyke.png', 'enabled' => true]);
        Champion::create(['name' => "Rek'Sai", 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'RekSai.png', 'enabled' => true]);
        Champion::create(['name' => 'Shen', 'description' => "", 'cost_id' => 2, 'tier_id' => 4, 'image' => 'Shen.png', 'enabled' => true]);
        Champion::create(['name' => 'Twisted Fate', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'TwistedFate.png', 'enabled' => true]);
        Champion::create(['name' => 'Varus', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Varus.png', 'enabled' => true]);
        Champion::create(['name' => 'Zed', 'description' => "", 'cost_id' => 2, 'tier_id' => 3, 'image' => 'Zed.png', 'enabled' => true]);

        // Fill champions cost 3.
        Champion::create(['name' => 'Aatrox', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Aatrox.png', 'enabled' => true]);
        Champion::create(['name' => 'Ashe', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Ashe.png', 'enabled' => true]);
        Champion::create(['name' => 'Evelynn', 'description' => "", 'cost_id' => 3, 'tier_id' => 1, 'image' => 'Evelynn.png', 'enabled' => true]);
        Champion::create(['name' => 'Gangplank', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Gangplank.png', 'enabled' => true]);
        Champion::create(['name' => 'Katarina', 'description' => "", 'cost_id' => 3, 'tier_id' => 5, 'image' => 'Katarina.png', 'enabled' => true]);
        Champion::create(['name' => 'Kennen', 'description' => "", 'cost_id' => 3, 'tier_id' => 2, 'image' => 'Kennen.png', 'enabled' => true]);
        Champion::create(['name' => 'Morgana', 'description' => "", 'cost_id' => 3, 'tier_id' => 2, 'image' => 'Morgana.png', 'enabled' => true]);
        Champion::create(['name' => 'Poppy', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Poppy.png', 'enabled' => true]);
        Champion::create(['name' => 'Rengar', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Rengar.png', 'enabled' => true]);
        Champion::create(['name' => 'Shyvana', 'description' => "", 'cost_id' => 3, 'tier_id' => 2, 'image' => 'Shyvana.png', 'enabled' => true]);
        Champion::create(['name' => 'Veigar', 'description' => "", 'cost_id' => 3, 'tier_id' => 4, 'image' => 'Veigar.png', 'enabled' => true]);
        Champion::create(['name' => 'Vi', 'description' => "", 'cost_id' => 3, 'tier_id' => 2, 'image' => 'Vi.png', 'enabled' => true]);
        Champion::create(['name' => 'Volibear', 'description' => "", 'cost_id' => 3, 'tier_id' => 3, 'image' => 'Volibear.png', 'enabled' => true]);

        // Fill champions cost 4.
        Champion::create(['name' => 'Akali', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Akali.png', 'enabled' => true]);
        Champion::create(['name' => 'Aurelion Sol', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'AurelionSol.png', 'enabled' => true]);
        Champion::create(['name' => 'Brand', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Brand.png', 'enabled' => true]);
        Champion::create(['name' => "Cho'Gath", 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Chogath.png', 'enabled' => true]);
        Champion::create(['name' => 'Draven', 'description' => "", 'cost_id' => 4, 'tier_id' => 1, 'image' => 'Draven.png', 'enabled' => true]);
        Champion::create(['name' => 'Gnar', 'description' => "", 'cost_id' => 4, 'tier_id' => 1, 'image' => 'Gnar.png', 'enabled' => true]);
        Champion::create(['name' => 'Jinx', 'description' => "", 'cost_id' => 4, 'tier_id' => 3, 'image' => 'Jinx.png', 'enabled' => true]);
        Champion::create(['name' => 'Kindred', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Kindred.png', 'enabled' => true]);
        Champion::create(['name' => 'Leona', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Leona.png', 'enabled' => true]);
        Champion::create(['name' => 'Sejuani', 'description' => "", 'cost_id' => 4, 'tier_id' => 2, 'image' => 'Sejuani.png', 'enabled' => true]);

        // Fill champions cost 5.
        Champion::create(['name' => 'Anivia', 'description' => "", 'cost_id' => 5, 'tier_id' => 2, 'image' => 'Anivia.png', 'enabled' => true]);
        Champion::create(['name' => 'Karthus', 'description' => "", 'cost_id' => 5, 'tier_id' => 2, 'image' => 'Karthus.png', 'enabled' => true]);
        Champion::create(['name' => 'Kayle', 'description' => "", 'cost_id' => 5, 'tier_id' => 1, 'image' => 'Kayle.png', 'enabled' => true]);
        Champion::create(['name' => 'Miss Fortune', 'description' => "", 'cost_id' => 5, 'tier_id' => 3, 'image' => 'MissFortune.png', 'enabled' => true]);
        Champion::create(['name' => 'Pantheon', 'description' => "", 'cost_id' => 5, 'tier_id' => 1, 'image' => 'Pantheon.png', 'enabled' => true]);
        Champion::create(['name' => 'Swain', 'description' => "", 'cost_id' => 5, 'tier_id' => 1, 'image' => 'Swain.png', 'enabled' => true]);
        Champion::create(['name' => 'Yasuo', 'description' => "", 'cost_id' => 5, 'tier_id' => 2, 'image' => 'Yasuo.png', 'enabled' => true]);
    }
}
