<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->string('sequence')->default(0);
            $table->boolean('isStartEnabled')->default(0);
            $table->boolean('isStopEnabled')->default(0);
            $table->string('actual_time')->nullable();

            $table->foreign('service_id')
                    ->references('id')
                    ->on('service_lists')
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
        Schema::dropIfExists('job_services');
    }
}
