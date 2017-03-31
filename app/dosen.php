<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
    protected $table= 'dosen';
    //protected $fillable= ['nama','nip','alamat','pengguna_id'];
public function pengguna()
{
	return $this->belongsTo(Pengguna::class);
}
//table ini juga berelasi dengan table lain yaitu pengguna, dengan kardinalitas one to one jika dilihat dari script yang tertulis di model pengguna.php
public function dosen_matakuliah(){
	return $this->hasMany(dosen_matakuliah::class);
}
//table dosen mempunyai relasi one to many dengan table dosen_matakuliah, jadi penempatan hasMany terletak di table yang kardinalitasnya one dan belongsTo terletak di table yang kardinalitasnya many dan berhubungan dengan tabel dosen ini, jadi penempatannya di table dosen_matakuliah
//hasMany akan merujuk tabel yang berhubungan jadi tabel disini yang dirujuk oleh hasMany adalah tabel dosen_matakuliah
}
