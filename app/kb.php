<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kb extends Model
{
    protected $fillabel =['tgl','nama_ibu','usia','alamat','j_kontrasepsi','jml_anak','tgl_kem','ket'];

    public $timestamps = true;
}
