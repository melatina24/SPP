@extends('Layout.base')
@section('content')
<section class="content-header">
		<h1>Kelas</h1>
	</section>
	<section class="content">
	<div class="row">
		<div class="col-md-4">
			<div class="box box-primary">
				<div class="box-header">
					<h4>Tambah Kelas</h4>
				</div>
				<div class="box-body">
					<form method="post" action="{{url('/kelas_create')}}">
						{{csrf_field()}}
						<div class="form-group">
						
                  <label for="nama_kelas">Nama Kelas</label>
                  <input type="text" class="form-control" id="nama_kelas" placeholder="Nama Kelas" name="nama_kelas">
                </div>
                <div class="form-group">
					<label for="jurusan_id">Jurusan</label>
					<select class="form-control" id="jurusan_id" name="jurusan_id">
						@foreach($jurusan as $data)
						<option value="{{$data->id}}">{{$data->singkatan}}</option>
						@endforeach
						
					</select>
				</div>	
				<div class="form-group">
					<label for="thnajaran_id">Tahun Ajaran</label>
					<select class="form-control" id="thnajaran_id" name="thnajaran_id">
						@foreach($tahunAjaran as $data)
						<option value="{{$data->id}}">{{$data->label}}</option>
						@endforeach
						
					</select>
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
				<div class="box-body">
					<table class="table table-striped">
						<tbody>
							<tr>
								<th>No</th>
								<th>Kelas</th>
								<th>Jurusan</th>
								<th>Tahun Ajaran</th>
								<th>Aksi</th>
							</tr>
							@foreach($kelas as $key=>$data)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$data->nama_kelas}}</td>
								<td>{{$data->jurusan->singkatan}}</td>
								<td>{{$data->tahunAjaran->label}}</td>
								<td><a href="{{url('/kelas_edit'.$data->id)}}" class="btn btn-warning btn-sm"> Edit </a>
									<a href="{{url('/kelas_destroy'.$data->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></td>
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