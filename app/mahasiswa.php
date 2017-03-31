<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
    protected $table= 'mahasiswa';
    //protected $fillable= ['nama','nim','alamat','pengguna_id'];
    // protected $guarded=['id'];

    public function pengguna()
   {
   	return $this->belongsTo(pengguna::class);
   }
//table ini berelasi dengan table pengguna dengan kardinalitas one to one.
public function jadwal_matakuliah()
{
	return $this->hasMany(jadwal_matakuliah::class, 'mahasiswa_id');
}
//table mahasiswa mempunyai relasi one to many dengan table jadwal_matakuliah, jadi penempatan hasMany terletak di table yang kardinalitasnya one dan belongsTo terletak di table yang kardinalitasnya many dan berhubungan dengan tabel mahasiswa ini, jadi penempatannya di table jadwal_matakuliah
//hasMany akan merujuk tabel yang berhubungan jadi tabel disini yang dirujuk oleh hasMany adalah tabel jadwal_matakuliah

}
