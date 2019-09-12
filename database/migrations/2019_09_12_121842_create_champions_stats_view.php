<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsStatsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW _championsStatsView
        AS
        SELECT C.id, C.name, C.description, C.image,
        L.level,
        CL.level_id, CL.dps, CL.attack_speed, CL.damage, CL.range, CL.health, CL.mana, CL.armor, CL.magic_resistance
        FROM Champions C
        INNER JOIN Champions_Levels CL ON C.id = CL.champion_id
        INNER JOIN Levels L ON L.id = CL.level_id
        WHERE C.enabled = 1");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW _championsStatsView");
    }
}
