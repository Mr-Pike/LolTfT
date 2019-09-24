<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions_classes', function (Blueprint $table) {
            $table->smallInteger('champion_id')->unsigned();
            $table->foreign('champion_id')
                ->references('id')
                ->on('champions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->tinyInteger('class_id')->unsigned();
            $table->foreign('class_id')
                ->references('id')
                ->on('classes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->primary(['champion_id', 'class_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champions_classes');
    }
}
