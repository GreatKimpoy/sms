<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicianSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('technician_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('technician_id')
            ->references('id')
            ->on('technicians')
            ->onUpdate('cascade')
            ->onDelete('restrict'); 
            
            $table->foreign('category_id')
            ->references('id')
            ->on('service_categories')
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
        Schema::dropIfExists('technician_skills');
    }
}
