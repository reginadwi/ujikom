<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hamil extends Model
{
    protected $fillabel =['nama_ibu','usiaaa','alamat','pendidikan','pekerjaan','usia_kehamilan','status_tt','tp','tekanan_darah','bb','diagnosa','id_obat'];

    public $timestamps = true;

    public function obat()
    {
        return $this->belongsTo('App\obat', 'id_obat');
    }
}
