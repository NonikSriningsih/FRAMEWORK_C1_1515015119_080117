@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('dosen_matakuliah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data dosen_matakuliah</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID Dosen yang Mengajar</td>
			<td>:</td>
			<td>{{ $dosen_id->title }}</td>
		</tr>
		<tr>
			<td>Matakuliah yang diajar</td>
			<td>:</td>
			<td>{{ $matakuliah_id->keterangan }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$dosen_matakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$dosen_matakuliah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
