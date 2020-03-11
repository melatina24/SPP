@extends('Layout.base')
@section('content')
<section class="content-header">
    <h1>Petugas</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3>Edit Data petugas</h3>
        </div>
        <div class="box-body">
            <form method="POST" action="{{url('/petugas_edit')}}">
            <input type="hidden" name="id" value="">   
                <div class="form-group">
                	<label for="nama">Nama</label>
                    <input type="text" class="form-control" value="">
                </div>
            
            </form>
        </div>    
    </div>
</section>

@stop