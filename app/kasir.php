<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    protected $fillabel =['no_pasien','nm_pasien','kode_resep','id_obat','id_perawatan'];

    public $timestamps = true;

    public function obat()
    {
        return $this->belongsTo('App\obat', 'id_obat');
    }

    public function perawatan()
    {
        return $this->belongsTo('App\perawatan', 'id_perawatan');
    }
}
