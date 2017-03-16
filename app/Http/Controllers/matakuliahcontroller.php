<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
    public function awal()
    {

    	return "matakuliahcontroller";
    }

    public function tambah(){
    		return $this->simpan();
    }

    public function simpan(){
    	$Matakuliah = new matakuliah();
    	$Matakuliah ->title ='Mata Kuliah Pemrograman';
    	$Matakuliah ->keterangan ='3 sks';
    	$Matakuliah ->save();
    	return"Data dengan judul matakuliah {$Matakuliah->title} telah disimpan";
    }
}
