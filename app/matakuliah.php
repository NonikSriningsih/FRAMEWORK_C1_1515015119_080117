<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    //
    protected $table= 'matakuliah';
    protected $fillable =['title','keterangan'];

public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_Matakuliah::class);
    }
//table matakuliah mempunyai relasi one to many dengan table dosen_matakuliah, jadi penempatan hasMany terletak di table yang kardinalitasnya one dan belongsTo terletak di table yang kardinalitasnya many dan berhubungan dengan tabel matakuliah ini, jadi penempatannya di table dosen_matakuliah
//hasMany akan merujuk tabel yang berhubungan jadi tabel disini yang dirujuk oleh hasMany adalah tabel dosen_matakuliah

}
