<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rm extends Model
{
    protected $fillabel =['usiaa','id_obat','alamatt','kode_pasien','diagnosa','kode_resep','jkk','kett','nm_pasienn'];

    public $timestamps = true;

    public function obat(){
        return $this->belongsTo('App\obat','id_obat');
    }
}
