<div class="form-group">
	<label class="col-sm-2 control-label">Id Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::text('mahasiswa_id',null,['class'=>'form-control','placeholder'=>"Masukan Mahasiswa id"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Ruangan untuk Kuliah</label>
	<div class="col-sm-10">
		{!! Form::text('ruangan_id',null,['class'=>'form-control','placeholder'=>"Masukan id Ruangan"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Id Dosen yang mengajar Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::text('dosen_matakuliah_id',null,['class'=>'form-control','placeholder'=>"Masukkan id Dosen yang mengajar"]) !!}	
	</div>
</div>
