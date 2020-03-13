<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $fillabel =['nm_obat','harga'];

    public $timestamps = true;


    public function rm()
    {
        return $this->hasMany('App\obat','id_obat');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
