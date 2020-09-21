<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
	protected $table = 'supervisor'; 
	protected $fillable = ['id','nama_supervisor','jam','tanggal'];
}
