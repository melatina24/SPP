@extends('Layout.base')
@section('content')

<section class="content-header">
		<h1>Jurusan</h1>
	</section>
	<section class="content">
	<div class="row">
		<div class="col-md-10">
			<div class="box box-primary">
				<div class="box-header">
					<h4>Edit Jurusan</h4>
				</div>
				<div class="box-body">
					<form method="POST" action="{{url('/jurusan_update')}}">
						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$data->id}}">
						<div class="form-group">
						
                  <label for="nama">Nama Jurusan</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama Jurusan" name="nama" value="{{$data->nama}}">
                </div>
                <div class="form-group">
					<label for="singkatan">Singkatan</label>
					<input type="text" name="singkatan" id="singkatan" placeholder="Singkatan" class="form-control" value="{{$data->singkatan}}">
				</div>		
					
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-warning">Perbarui</button>
					<a href="{{url('/jurusan')}}" class="btn bg-purple">Kembali</a>

					
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
@stop