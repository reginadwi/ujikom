<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersalinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persalinans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgll');
            $table->string('nama_ibuu');
            $table->Integer('usiaa');
            $table->string('alamatt');
            $table->string('paritas');
            $table->string('tp');
            $table->string('tekanan_darah');
            $table->string('bb');
            $table->string('diagnosa');
            $table->string('kettt');
            $table->unsignedBigInteger('id_obat');
            $table->foreign('id_obat')->references('id')->on('obats')->onDelete('cascade');
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
        Schema::dropIfExists('persalinans');
    }
}
