<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsOriginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions_origins', function (Blueprint $table) {
            $table->smallInteger('champion_id')->unsigned();
            $table->foreign('champion_id')
                ->references('id')
                ->on('champions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->tinyInteger('origin_id')->unsigned();
            $table->foreign('origin_id')
                ->references('id')
                ->on('origins')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->primary(['champion_id', 'origin_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champions_origins');
    }
}
