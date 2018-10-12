<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 45);
            $table->string('middleName', 45)->nullable();
            $table->string('lastName', 45);
            $table->text('Street')->nullable();
            $table->text('Barangay')->nullable();
            $table->text('City')->nullable();
            $table->date('Birthdate')->nullable();
            $table->string('Contact', 30);
            $table->string('Email')->nullable();
            $table->text('image')->nullable();
            $table->unique(['firstName', 'middleName','lastName']);
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
        Schema::dropIfExists('technicians');
    }
}
