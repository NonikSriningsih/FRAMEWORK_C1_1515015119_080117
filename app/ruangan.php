<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    //
    protected $table ='ruangan';
    // protected $fillable = ['title'];
    public function jadwal_matakuliah()
{
	return $this->belongsTo(jadwal_matakuliah::class);
}
// pada tabel ini, ruangan berrelasi dengan tabel jadwal matakuliah, dengan kardinalitas jadwal_matakuliah adalah Many.
}
