<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswacontroller extends Controller
{
    public function awal()
    {

    	return "mahasiswacontroller";
    }

    public function tambah(){
    		return $this->simpan();
    }

    public function simpan(){
    	$Mahasiswa = new mahasiswa();
    	$Mahasiswa ->nama ='Jumarni';
    	$Mahasiswa ->nim ='1515011';
    	$Mahasiswa ->alamat ='Sebatik';
    	$Mahasiswa ->pengguna_id = 1;
    	$Mahasiswa ->save();
    	return"Data dengan Nama {$Mahasiswa->nama} telah disimpan";
    }
}
