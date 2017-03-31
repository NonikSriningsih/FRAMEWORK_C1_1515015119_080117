<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{

    protected $table='pengguna';
    // protected $fillable=['username','password'];

public function mahasiswa()
   {
   	return $this->hasOne(mahasiswa::class, 'pengguna_id');
   }
// pada fungsi ini merupakan fungsi untuk relasi one to one antara table pengguna dengan mahasiswa, jadi penulisan belongsTo nya terletak di table yang berhubungan yaitu di table mahasiswa
public function dosen()
{
	return $this->hasOne(dosen::class, 'pengguna_id');
}
// pada fungsi ini merupakan fungsi untuk relasi one to one antara table pengguna dengan dosen, jadi penulisan belongsTo nya terletak di table yang berhubungan yaitu di table dosen

}