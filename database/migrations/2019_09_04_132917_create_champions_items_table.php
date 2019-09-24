<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions_items', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned();

            $table->smallInteger('champion_id')->unsigned();
            $table->foreign('champion_id')
                ->references('id')
                ->on('champions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->smallInteger('item_id')->unsigned();
            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->tinyInteger('order_number')->unsigned();

            $table->boolean('recommended');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champions_items');
    }
}
