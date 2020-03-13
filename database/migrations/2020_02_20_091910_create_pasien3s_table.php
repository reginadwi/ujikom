<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasien3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien3s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_pasien');
            $table->string('nm_pasien');
            $table->string('usia');
            $table->string('alamat');
            $table->string('jk');
            $table->string('no_tlpn');
            $table->string('ket');
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
        Schema::dropIfExists('pasien3s');
    }
}
