@extends('index')
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-3">&nbsp;</div>
    <div class="col-lg-6">
        <br />
        <center>
        <a href="{{ url('create') }}" class="btn btn-primary">Create</a>
        <a href="{{ url('readData') }}" class="btn btn-primary">Data List</a>
        </center>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Identitas
            </div>
            <div class="panel-body">
                @if(Session::has('message'))
                <center><span class="label label-success"><?php echo (Session::get('message')); ?></span></center>
                @endif
                <form method="POST" action="addProses">
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    Nama: <input type="text" name="nama" placeholder="Nama" class="form-control" /><br />
                    Alamat: <input type="text" name="alamat" placeholder="Alamat" class="form-control" /><br />
                    Telepon: <input type="text" name="no_tel" placeholder="Telepon" class="form-control" /><br />
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-3">&nbsp;</div>
</div>
</div>
@stop