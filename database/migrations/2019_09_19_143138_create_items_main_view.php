<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsMainView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW _itemsMainView
        AS
        SELECT I0.id, I0.name, I0.description, I0.image, I0.tier_id,
            T.name AS tier_name,
            I0.id AS item_id, I0.name AS item_name, I0.image AS item_image,
            I1.id AS item1_id, I1.name AS item1_name, I1.image AS item1_image,
            I2.id AS item2_id, I2.name AS item2_name, I2.image AS item2_image,
            CONCAT('[', GROUP_CONCAT(DISTINCT(CONCAT('{\"id\": ', C.id, ', \"name\": \"', C.name, '\", \"image\": \"', C.image, '\", \"cost_cost\": \"', CS.cost,'\"}'))), ']') AS champions
            FROM Items I0
            LEFT JOIN Tiers T ON T.id = I0.tier_id
            LEFT JOIN Items I1 ON I0.item1_id = I1.id
            LEFT JOIN Items I2 ON I0.item2_id = I2.id
            LEFT JOIN Champions_Items CI ON CI.item_id = I0.id
            LEFT JOIN Champions C ON CI.champion_id = C.id
            LEFT JOIN Costs CS ON CS.id = C.cost_id
            WHERE I0.enabled = 1
            GROUP BY I0.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW _itemsMainView");
    }
}
