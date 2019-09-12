<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions_levels', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->smallInteger('dps')->unsigned();
            $table->float('attack_speed')->unsigned();
            $table->smallInteger('damage')->unsigned();
            $table->tinyInteger('range')->unsigned();
            $table->smallInteger('health')->unsigned();
            $table->smallInteger('mana')->unsigned();
            $table->smallInteger('armor')->unsigned();
            $table->smallInteger('magic_resistance')->unsigned();

            $table->smallInteger('champion_id')->unsigned();
            $table->foreign('champion_id')
                ->references('id')
                ->on('champions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->tinyInteger('level_id')->unsigned();
            $table->foreign('level_id')
                ->references('id')
                ->on('levels')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->primary(['champion_id', 'level_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champions_levels');
    }
}
