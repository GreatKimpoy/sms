<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicePerformedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_performeds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('step_id')->unsigned()->nullable();
            $table->string('current_step')->nullable();
            $table->timestamps();


            $table->foreign('job_id')
            ->references('id')
            ->on('job_services')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('step_id')
            ->references('id')
            ->on('steps')
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_performeds');
    }
}
