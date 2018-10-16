-<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inspection_id')->unsigned();
            $table->date('start');
            $table->time('start_time');
            $table->date('end')->nullable();
            $table->time('end_time')->nullable();
            $table->time('hours_worked')->nullable();
            $table->float('progressCount',5,2)->default(0);
            $table->boolean('isStatus')->default(0);
            $table->text('remarks')->nullable();

            $table->timestamps();

            $table->foreign('inspection_id')
            ->references('id')
            ->on('inspections')
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
        Schema::dropIfExists('job_orders');
    }
}
