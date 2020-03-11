@extends('Layout.base')
@section('content')
<section class="content-header">
	<h1>Kelas</h1>
</section>
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3>Edit Kelas</h3>
		</div>
		<div class="box-body">
			<form method="post" action="{{url('/kelas_update')}}">
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$kelas->id}}">
				<div class="form-group">
					<label for="nama_kelas">Kelas</label>
					<input type="text" name="nama_kelas" class="form-control" value="{{$kelas->nama_kelas}}">
				</div>
				<div class="form-group">
					<label>Jurusan</label>
					<select name="jurusan_id" class="form-control" id="jurusan_id">
						@foreach($jurusan as $jrs)
						@if($kelas->jurusan_id ==$jrs->id)
						<option value="{{$jrs->id}}"selected>{{$jrs->singkatan}}</option>
						@else
						<option value="{{$jrs->id}}">{{$jrs->singkatan}}</option>
						@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Tahun Ajaran</label>
					<select class="form-control" name="thnajaran_id" id="thnajaran_id">
						@foreach($tahunAjaran as $thn)
						@if($kelas->thnajaran_id == $thn->id)
						<option value="{{$thn->id}}" selected>{{$thn->label}}</option>
						@else
						<option value="{{$thn->id}}">{{$thn->label}}</option>
						@endif
						@endforeach
					</select>
				</div>
			
		</div>
		<div class="box-footer">
			<a href="{{url('/kelas')}}" class="btn bg-purple">Kembali</a>
			<button type="submit" class="btn btn-warning">Perbarui</button>

			</form>
		</div>
	</div>
</section>
@stop