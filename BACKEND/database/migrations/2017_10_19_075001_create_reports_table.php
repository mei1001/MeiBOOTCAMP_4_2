<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('mahasiswas_id')->unsigned();
            $table->foreign('mahasiswas_id')->references('id')->on('mahasiswas');
            $table->integer('assignments_id')->unsigned();
            $table->foreign('assignments_id')->references('id')->on('assignments');
             $table->decimal('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
