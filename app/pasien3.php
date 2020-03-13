<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien3 extends Model
{
    protected $fillabel =['id_pasien','nm_pasien','usia','alamat','jk','no_tlpn','ket'];

    public $timestamps = true;

    // public function obat()
    // {
    //     return $this->hasMany('App\obat', 'id_obat');
    // }
}
