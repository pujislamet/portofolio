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
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1; ?>
                @foreach($identitas as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_tel }}</td>
                    <td><a href="{{ url('edit/?id='.$data->id) }}">Edit</a> | 
                        <a href="{{ url('hapus/'.$data->id) }}" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-lg-3">&nbsp;</div>
</div>
</div>
@stop