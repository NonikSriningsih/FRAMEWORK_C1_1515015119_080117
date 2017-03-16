<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahcontroller extends Controller
{
    public function awal()
    {

    	return "jadwal_matakuliahcontroller";
    }

    public function tambah(){
    		return $this->simpan();
    }

    public function simpan(){
    	$Jadwal_matakuliah = new jadwal_matakuliah();
    	$Jadwal_matakuliah ->mahasiswa_id =1;
    	$Jadwal_matakuliah ->ruangan_id =1;
    	$Jadwal_matakuliah ->dosen_matakuliah_id =14;
    	$Jadwal_matakuliah ->save();
    	return"Data dengan Dosen {$Jadwal_matakuliah->dosen_matakuliah_id} telah disimpan";
    }
}
