<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;
class dosen_matakuliahcontroller extends Controller
{
     public function awal()
    {

    	return "dosen_matakuliahcontroller";
    }

    public function tambah(){
    		return $this->simpan();
    }

    public function simpan(){
    	$Dosen_matakuliah = new dosen_matakuliah();
    	$Dosen_matakuliah ->dosen_id =3;
    	$Dosen_matakuliah ->matakuliah_id =1;
    	$Dosen_matakuliah ->save();
    	return"Data dengan id Dosen {$Dosen_matakuliah->dosen_id} telah disimpan";
    }
}
