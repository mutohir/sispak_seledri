<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAturanPenyakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aturan_penyakit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_gejala');
            $table->integer('id_penyakit');
            $table->string('np');
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
        Schema::drop('aturan_penyakit');
    }
}
