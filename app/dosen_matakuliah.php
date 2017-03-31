<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    //
    protected $table = 'dosen_matakuliah';
    // protected $fillable = ['dosen_id','matakuliah_id'];
    public function dosen()
{
	return $this->belongsTo(dosen::class);
}
//belongsTo untuk menandakan bahwa table dosen_matakuliah ini berelasi dengan table lain(dosen).
public function matakuliah()
{
	return $this->belongsTo(matakuliah::class);
}
//selain berelasi dengan table dosen, table dosen_matakuliah juga berelasi dengan table matakuliah.
public function jadwal_matakuliah()
{
	return $this->belongsTo(jadwal_matakuliah::class);
}
//lalu juga mempunyai relasi dengan table jadwal_matakuliah.
}
