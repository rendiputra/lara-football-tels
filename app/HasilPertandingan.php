<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPertandingan extends Model
{
    //
    protected $table = 'hasil_pertandingan';
	protected $primaryKey = "id_hp";
	public $timestamps = false;
}
