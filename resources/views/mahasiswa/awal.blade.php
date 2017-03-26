@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data mahasiswa</strong>
		<a href="{{url('mahasiswa/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> mahasiswa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama mahasiswa</th>
				<th>NIM Mahasiswa</th>
				<th>Alamat Mahasiswa</th>
				<th>ID Pengguna Mahasiswa</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $mahasiswa)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $mahasiswa->nama or 'title kosong' }}</td>
				<td>{{ $mahasiswa->nim or 'keterangan kosong' }}</td>
				<td>{{ $mahasiswa->alamat or 'keterangan kosong' }}</td>
				<td>{{ $mahasiswa->pengguna_id or 'keterangan kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('mahasiswa/edit/'.$mahasiswa->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('mahasiswa/lihat/'.$mahasiswa->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('mahasiswa/hapus/'.$mahasiswa->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop