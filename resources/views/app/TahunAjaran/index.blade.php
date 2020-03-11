@extends('Layout.base')
@section('content')
	<section class="content-header">
		<h1>Tahun Ajaran</h1>
	</section>
	<section class="content">
	<div class="row">
		<div class="col-md-4">
			<div class="box box-primary">
				<div class="box-header">
					<h4>Tambah Tahun Ajaran</h4>
				</div>
				<div class="box-body">
					<form method="post" action="{{url('/thn_ajaran_create')}}">

						 <div class="form-group">
						{{csrf_field()}}
              <label for="label">Tahun Ajaran <small>(format :yyyy/yyyy)</small></label>
              <input type="text" class="form-control" id="label" name="label">

            </div>
					
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
				</form>
			</div>
		</div>

		<div class="col-md-5">
			<div class="box box-primary">
				<div class="box-body">
					<table class="table table-striped">
						<tbody>
							<tr>
								<th>No</th>
								<th>Tahun Ajaran</th>
								<th>Aksi</th>
							</tr>
							@foreach($data as $key=>$thn)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$thn->label}}</td>
								<td><a href="#" class="btn btn-warning btn-sm"> Edit </a>
									<a href="{{url('/thn_ajaran_destroy'.$thn->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></td>
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