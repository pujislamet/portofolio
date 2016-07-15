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
        @if(Session::has('message'))
        <center><span class="label label-success"><?php echo (Session::get('message')); ?></span></center>
        @endif
        @foreach($identitas as $data)
        <center>
        <form method="post" action="{{ url('editPost') }}">
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <input type="hidden" value="{{ $data->id }}" readonly="" name="id" />
            Nama : <input class="form-control" type="text" value="{{ $data->nama }}" name="nama" />
            Alamat : <input class="form-control" type="text" value="{{ $data->alamat }}" name="alamat" />
            No Telepon : <input class="form-control" type="text" value="{{ $data->no_tel }}" name="no_tel" />
            <br /><button type="submit" class="btn btn-primary">Save</button>
        </form>
        </center>
        @endforeach
    </div>
    <div class="col-lg-3">&nbsp;</div>
</div>
</div>
@stop