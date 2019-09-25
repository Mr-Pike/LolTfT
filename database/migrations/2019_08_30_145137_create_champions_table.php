<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned()->primary();
            $table->string('name', 128)->unique();
            $table->mediumText('description')->nullable();
            $table->boolean('enabled')->default(true);

            $table->tinyInteger('tier_id')->unsigned();
            $table->foreign('tier_id')
                ->references('id')
                ->on('tiers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->tinyInteger('cost_id')->unsigned();
            $table->foreign('cost_id')
                ->references('id')
                ->on('costs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('image', 128)->unique();
            // $table->primary('id');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champions');
    }
}
