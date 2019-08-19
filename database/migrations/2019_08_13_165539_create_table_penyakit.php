<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenyakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_penyakit')->unique();
            $table->string('nm_penyakit');
            $table->string('sol_penyakit');
            $table->string('def_penyakit');
            $table->string('np_penyakit');
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
        Schema::drop('penyakit');
    }
}
