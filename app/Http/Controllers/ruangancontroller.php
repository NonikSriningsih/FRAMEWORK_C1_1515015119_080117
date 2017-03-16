<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
    public function awal()
    {

    	return "ruangancontroller";
    }

    public function tambah(){
    		return $this->simpan();
    }

    public function simpan(){
    	$Ruangan = new ruangan();
    	$Ruangan ->title ='Done';
    	$Ruangan ->save();
    	return"Data dengan judul {$Ruangan->title} telah disimpan";
    }
}
