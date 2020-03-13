<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persalinan extends Model
{
    protected $fillabel =[  'nama_ibu','usiaa','alamatt','paritas','tp','tekanan_darah','bb','diagnosa','kettt','id_obat'];

    public $timestamps = true;

    public function obat()
    {
        return $this->hasMany('App\obat', 'id_obat');
    }
}
