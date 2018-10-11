<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned();
            $table->integer('part_id')->unsigned();

            $table->foreign('service_id')
                    ->references('id')
                    ->on('service_lists')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');

            $table->foreign('part_id')
                    ->references('id')
                    ->on('vehicle_parts')
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
        Schema::dropIfExists('service_parts');
    }
}
