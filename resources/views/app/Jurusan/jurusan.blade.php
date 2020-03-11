@extends('Layout.base')

@section('content')

<section class="content-header">
		<h1>Jurusan</h1>
	</section>
	<section class="content">
	<div class="row">
		<div class="col-md-4">
			<div class="box box-primary">
				<div class="box-header">
					<h3>Tambah Jurusan</h3>
				</div>
				<div class="box-body">
					<form method="post" action="{{url('/jurusan_create')}}">
						{{csrf_field()}}
						<div class="form-group">
						
                  <label for="nama">Nama Jurusan</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama Jurusan" name="nama">
                </div>
                <div class="form-group">
					<label for="singkatan">Singkatan</label>
					<input type="text" name="singkatan" id="singkatan" placeholder="Singkatan" class="form-control">
				</div>		
					
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
				</form>
			</div>
		</div>

		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header">
					<h3>Data Jurusan</h3>
				</div>
				<div class="box-body">
					<table class="table table-striped">
						<tbody>
							<tr>
								<th>No</th>
								<th>Jurusan</th>
								<th>Singkatan</th>
								<th>Aksi</th>
							</tr>
							@foreach($jurusan as $key=>$data)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$data->nama}}</td>
								<td>{{strtoupper($data->singkatan)}}</td>
								<td><a href="{{url('/jurusan_edit'.$data->id)}}" class="btn btn-warning btn-sm"> Edit </a>
									<a href="{{url('/jurusan_destroy'.$data->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></td>
								@endforeach
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

@stop