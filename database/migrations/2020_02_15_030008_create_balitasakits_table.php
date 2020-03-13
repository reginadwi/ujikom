<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitasakitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balitasakits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl');
            $table->string('nama_anak');
            $table->string('jkk');
            $table->Integer('usiaa');
            $table->string('alamatt');
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
        Schema::dropIfExists('balitasakits');
    }
}
