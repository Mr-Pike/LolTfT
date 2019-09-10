<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsMainView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW _championsMainView
        AS
        SELECT C.id, C.name, C.description, C.enabled, C.tier_id, C.cost_id, C.image,
        T.name AS tier_name,
        CS.cost AS cost_cost,
        CONCAT('[', GROUP_CONCAT(DISTINCT(CONCAT('{\"name\": \"', O.name, '\", \"image\": \"', O.image,'\"}'))), ']') AS origins,
        CONCAT('[', GROUP_CONCAT(DISTINCT(CONCAT('{\"name\": \"', CL.name, '\", \"image\": \"', CL.image,'\"}'))), ']') AS classes,
        CONCAT('[', GROUP_CONCAT(DISTINCT(CONCAT('{\"combined_name\": \"', I0.name, '\", \"combined_image\": \"', I0.image, '\", \"order_number\": \"', CI.order_number, '\", \"base1_name\": \"', I1.name, '\", \"base1_image\": \"', I1.image, '\", \"base2_name\": \"', I2.name, '\", \"base2_image\": \"', I2.image,'\"}')) ORDER BY CI.order_number), ']') AS items
        FROM Champions C
        INNER JOIN Tiers T ON C.tier_id = T.id
        INNER JOIN Costs CS ON CS.id = C.cost_id
        INNER JOIN Champions_Origins CO ON C.id = CO.champion_id
        INNER JOIN Origins O ON CO.origin_id = O.id
        INNER JOIN Champions_Classes CC ON C.id = CC.champion_id
        INNER JOIN Classes CL ON CL.id = CC.class_id
        INNER JOIN Champions_Items CI ON CI.champion_id = C.id
        INNER JOIN Items I0 ON I0.id = CI.item_id
        INNER JOIN Items I1 ON I0.item1_id = I1.id
        INNER JOIN Items I2 ON I0.item2_id = I2.id
        GROUP BY C.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW _championsMainView");
    }
}

/*
TEST DE VUE ...
SELECT C.id, C.name, C.description, C.enabled, C.tier_id, C.cost_id, C.image,
T.name AS tier_name,
CS.cost AS cost_cost,
GROUP_CONCAT(DISTINCT(CONCAT('{name: "', O.name, '", image: "', O.image,'"}'))) AS origines,
GROUP_CONCAT(DISTINCT(CONCAT('[{name: "', CL.name, '", image: "', CL.image,'"}]'))) AS classes,
GROUP_CONCAT(DISTINCT(CONCAT('[{combined_name: "', I0.name, '", combined_image: "', I0.image,'base1_name: "', I1.name, '", base1_image: "', I1.image,'base2_name: "', I0.name, '", base2_image: "', I0.image,'"}]'))) AS items
FROM Champions C
INNER JOIN Tiers T ON C.tier_id = T.id
INNER JOIN Costs CS ON CS.id = C.cost_id
INNER JOIN Champions_Origins CO ON C.id = CO.champion_id
INNER JOIN Origins O ON CO.origin_id = O.id
INNER JOIN Champions_Classes CC ON C.id = CC.champion_id
INNER JOIN Classes CL ON CL.id = CC.class_id
INNER JOIN Champions_Items CI ON CI.champion_id = C.id
INNER JOIN Items I0 ON I0.id = CI.item_id
INNER JOIN Items I1 ON I0.item1_id = I1.id
INNER JOIN Items I2 ON I0.item1_id = I2.id
GROUP BY C.id

*/
