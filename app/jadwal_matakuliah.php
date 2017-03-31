<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    //
    protected $table = 'jadwal_matakuliah';
    // protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah'];
    public function dosen_matakuliah()
{
	return $this->belongsTo(dosen_matakuliah::class);
}
//penggunaan belongsTo ini untuk menandakan atau sebagai penghubung bahwa table jadwal_matakuliah ini mempunyai relasi dengan tabel yang lain (dosen_matakuliah).

public function ruangan(){
	return $this->hasMany(ruangan::class);
}
//table dosen mempunyai relasi one to many dengan table ruangan, jadi penempatan hasMany terletak di table yang kardinalitasnya one dan belongsTo terletak di table yang kardinalitasnya many dan berhubungan dengan tabel jadwal_matakuliah ini, jadi penempatannya di table ruangan
//hasMany akan merujuk tabel yang berhubungan jadi tabel disini yang dirujuk oleh hasMany adalah tabel ruangan

public function mahasiswa(){
	return $this->belongsTo(mahasiswa::class);
}
//belongsTo untuk menyatakan relasi yang terbuat antara table jadwal_matakuliah dengan table lain(mahasiswa).
}
