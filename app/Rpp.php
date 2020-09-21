<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rpp extends Model
{
    protected $table = 'rpp'; 
    protected $fillable = ['nama_mapel','file','nilai','tanggal'];
}
