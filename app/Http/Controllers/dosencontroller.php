<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal()
    {

    	return "dosencontroller";
    }

    public function tambah(){
    		return $this->simpan();
    }

    public function simpan(){
    	$Dosen = new dosen();
    	$Dosen ->nama ='Nonik_Sriningsih';
    	$Dosen ->nip ='029348758';
        $Dosen ->alamat ='Loa_Bakung';
    	$Dosen ->pengguna_id =1;
    	$Dosen ->save();
    	return"Data dengan Nama {$Dosen->nama} telah disimpan";
    }
}
