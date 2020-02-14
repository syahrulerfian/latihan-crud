@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Ubah Daftar Siswa </div>

                <div class="card-body">
                    <form action="{{route('siswa.update',$siswa->id)}}" method="post">
                    
                    @csrf
                    @method('PATCH')
                    <div class="form-grup">
                        <label>NIS</label>
                        <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
                </div>
                <div class="form-grup">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
                </div>
                <div class="form-grup">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="5" value="{{ $siswa->alamat }}" required>
                        </textarea>
                </div>
                <div class="form-grup">
                        <label>Kelas</label>
                        <select name="id_kelas" class="form-control">
                        @foreach($kelas as $data)
                        <option value="{{$data->id}}" {{ $data->id == $siswa->id_kelas ? 'selected' : ''}}> {{$data->kelas}} </option>
                        @endforeach
                        </select>
                </div>
                <div class="form-group"> </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
