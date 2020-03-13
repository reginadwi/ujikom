<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHamilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hamils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_ibu');
            $table->string('usiaaa');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('usia_kehamilan');
            $table->string('status_tt');
            $table->string('tp');
            $table->string('tekanan_darah');
            $table->string('bb');
            $table->string('diagnosa');
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
        Schema::dropIfExists('hamils');
    }
}
