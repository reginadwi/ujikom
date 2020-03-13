<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */
    public function up()
    {
        Schema::create('rms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_pasien');
            $table->string('kode_resep');
            $table->string('nm_pasienn');
            $table->Integer('usiaa');
            $table->string('alamatt');
            $table->string('jkk');
            $table->string('diagnosa');
            $table->string('kett');
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
        Schema::dropIfExists('rms');
    }
}
