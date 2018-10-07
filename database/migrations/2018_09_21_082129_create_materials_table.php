<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle_part_id')->unsigned();
            $table->integer('step_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->integer('quantity');
        
            $table->foreign('vehicle_part_id')
            ->references('id')
            ->on('vehicle_parts')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('step_id')
            ->references('id')
            ->on('steps')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('job_id')
            ->references('id')
            ->on('job_orders')
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
