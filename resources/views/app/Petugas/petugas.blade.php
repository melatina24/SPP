@extends('Layout.base')
@section('content')
<section class="content-header">
	<h1>Petugas</h1>
</section>
<section class="content">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Data Petugas</h3>
			<button type="button" class="btn btn-success pull-right" data-target="#tambahData" data-toggle="modal">Tambah Data</button>

		</div>
		<div class="box-body">
			<table class="table table-hover">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Nomor Telepon</th>
					<th>Hak Akses</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
				@foreach($petugas as $key=>$data_petugas)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$data_petugas->nama}}</td>
					<td>{{$data_petugas->Jenis_kelamin}}</td>
					<td>{{$data_petugas->no_telp}}</td>
					<td>{{$data_petugas->level}}</td>
					<td>{{$data_petugas->alamat}}</td>
					<td><a href="{{url('/petugas_edit'.$data_petugas->user_id)}}" class="btn btn-warning">Edit</a>
						<a href="{{url('/petugas_destroy'.$data_petugas->user_id)}}" class="btn btn-danger">Hapus</a></td>
					@endforeach
				</tr>
			</table>
		</div>
		
	</div>
	<!-- Modal	 -->
	<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
			    <h5 class="modal-title" id="ModalLabel">Tambah Data Petugas</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
			  </div>
			  <form action="{{url('/petugas_create')}}" method="POST">
			  	<div class="modal-body">
			   		 {{csrf_field()}}
			   		<div class="form-group">
					   <label for="nama">Nama</label>
					   <input type="text" class="form-control" id="nama" name="nama" placeholder="Mansukkan Nama" required>
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
					   <label for="hak_akses">Hak Akses</label>
					   <select name="hak_akses" id="hak_akses" class="form-control">
					   		<option value="admin">Admin</option>
					   		<option value="petugas">Petugas</option>
					   </select>
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