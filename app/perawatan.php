<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perawatan extends Model
{
    protected $fillabel =['kd_perawatan','nama_perawatan','harga_perawatan',''];

    public $timestamps = true;

    public function perawatan()
    {
        return $this->hasMany('App\perawatan','id_perawatan ');

    }


}

