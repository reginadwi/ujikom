<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class balitasakit extends Model
{
    protected $fillabel =['tgl','nama_anak','jkk','usiaa','alamatt','diagnosa','ket','id_obat'];

    public $timestamps = true;

    public function obat()
    {
        return $this->belongsTo('App\obat', 'id_obat');
    }
}
