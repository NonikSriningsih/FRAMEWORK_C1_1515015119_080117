<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMatakuliah;
use App\Dosen;
use App\Matakuliah;

class DosenMatakuliahController extends Controller
{
    public function awal()
    {
        return view('dosen_matakuliah.awal', ['data'=>DosenMatakuliah::all()]);
    }
    public function tambah()
    {
        return view('dosen_matakuliah.tambah');
    }
    public function simpan(Request $input)
    {
        $dosen_matakuliah = new DosenMatakuliah;
        $dosen_matakuliah->dosen_id = $input->dosen_id;
        $dosen_matakuliah->matakuliah_id = $input->matakuliah_id;
        $informasi = $dosen_matakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
public function edit($id)
{
    $dosen_matakuliah = DosenMatakuliah::find($id);
    return view('dosen_matakuliah.edit')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
}
public function lihat($id)
{
    $dosen_matakuliah = DosenMatakuliah::find($id);
    return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
}
public function update($id, Request $input)
{

    $dosen_matakuliah = DosenMatakuliah::find($id);
    $dosen_matakuliah->dosen_id = $input->dosen_id;
    $dosen_matakuliah->matakuliah_id = $input->matakuliah_id;
    $informasi = $dosen_matakuliah->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
}
public function hapus($id)
{

    $dosen_matakuliah = DosenMatakuliah::find($id);
    $informasi = $dosen_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
}
}
