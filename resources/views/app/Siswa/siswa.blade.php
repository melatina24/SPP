@extends('Layout.base')
@section('content')
<section class="content-header">
		<h1>Siswa</h1>
	</section>
<section class="content">
	<div class="box">
		<div class="box-header with-border">
		
				<h3 class="box-title">Data Siswa</h3>
			
			<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#tambahdata">
			  		Tambah Data Siswa
			</button>
		</div>
		<div class="box-body">
			
			<br>
			<br>
			<table class="table table-hover" id="datatable">
				<tr>
					<th>No</th>
					<th>NISN</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>No Telepon</th>
					<th>Alamat</th>				
					<th>Aksi</th>
				</tr>
				@foreach($siswa as $key=>$data)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$data->nisn}}</td>
					<td>{{$data->nis}}</td>
					<td>{{$data->nama}}</td>
					<td>{{$data->jenis_kelamin}}</td>
					<td>{{$data->no_telp}}</td>
					<td>{{$data->alamat}}</td>
					<td><a href="{{url('siswa_edit'.$data->id)}}" class="btn btn-warning btn-sm">Edit</a>
						<a href="{{url('siswa_destroy'.$data->user_id)}}" class="btn btn-danger btn-sm">Hapus</a></td>
					@endforeach	
				</tr>
				
			</table>

			</div>		
		</div>
	</div>

	<!-- Modal	 -->
	<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
			    <h5 class="modal-title" id="ModalLabel">Tambah Data Siswa</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
			  </div>
			  <div class="modal-body">
			   	<form action="{{url('/siswa_create')}}" method="POST">
			   		 {{csrf_field()}}
			   		<div class="form-group">
					   <label for="nisn">NISN</label>
					   <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" required>
					</div>
					<div class="form-group">
					   <label for="nis">NIS</label>
					   <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" required>
					</div>
					<div class="form-group">
					   <label for="nama">Nama</label>
					   <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
					</div>
					<div class="form-group">
					   <label for="jenis_kelamin">Jenis Kelamin</label>
					   <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
					   		<option value="L">Laki-laki</option>
					   		<option value="P">Perempuan</option>
					   </select>
					</div>
					<div class="form-group">
					   <label for="no_telp">Nomor Telepon</label>
					   <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor Telepon">
					</div>
					<div class="form-group">
					   <label for="alamat">Alamat</label>
					   <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
					</div>
					
			 </div>
			 <div class="modal-footer">
			    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> 
			    <button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			</form>
	    </div>
	  </div>
</section>

@stop
@section('js')
<script>
	$(document).ready(function(){
		$('#datatable').DataTable();
	});
</script>
@stop