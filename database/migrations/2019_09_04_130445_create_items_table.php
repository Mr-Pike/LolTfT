<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->smallIncrements('id')->unsigned();
            $table->string('name', 128)->unique();
            $table->mediumText('description');
            $table->boolean('enabled')->default(true);
            $table->string('image', 128)->unique();

            $table->tinyInteger('tier_id')->unsigned()->nullable();
            $table->foreign('tier_id')
                ->references('id')
                ->on('tiers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->smallInteger('item1_id')->unsigned()->nullable();
            $table->foreign('item1_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->smallInteger('item2_id')->unsigned()->nullable();
            $table->foreign('item2_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
