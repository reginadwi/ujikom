<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl');
            $table->string('nama_ibu');
            $table->string('usia');
            $table->string('alamat');
            $table->string('j_kontrasepsi');
            $table->string('jml_anak');
            $table->date('tgl_kem');
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
        Schema::dropIfExists('kbs');
    }
}
