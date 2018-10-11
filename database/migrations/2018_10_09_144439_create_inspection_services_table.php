<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inspection_id')->unsigned();
            $table->integer('service_id')->unsigned();

            
            $table->foreign('service_id')
                    ->references('id')
                    ->on('service_lists')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');

            $table->foreign('inspection_id')
                    ->references('id')
                    ->on('inspections')
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
        Schema::dropIfExists('inspection_services');
    }
}
