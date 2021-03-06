@extends('master')
@section('container')
<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Seluruh Data Dosen Matakuliah</strong>
        <a href="{{url('dosen_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>dosen_matakuliah</a>
        <div class="clearfix"></div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Dosen</th>
                <th>ID Matakuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1; ?>
            @foreach ($data as $dosen_matakuliah)
            <tr>
                <td>{{ $x++}}</td>
                <td>{{ $dosen_matakuliah->dosen_id or 'ID Dosen Kosong'}}</td>
                <td>{{ $dosen_matakuliah->matakuliah_id or 'ID Matakuliah Kosong'}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{url('dosen_matakuliah/edit/'.$dosen_matakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
                        <a href="{{url('dosen_matakuliah/lihat/'.$dosen_matakuliah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                        <a href="{{url('dosen_matakuliah/hapus/'.$dosen_matakuliah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop