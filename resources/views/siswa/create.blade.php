@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Tambah Data Siswa </div>

                <div class="card-body">
                    <form action="{{route('siswa.store')}}" method="post">
                    
                    @csrf
                    <div class="form-grup">
                        <label>NIS</label>
                        <input type="text" name="nis" class="form-control" required>
                </div>
                <div class="form-grup">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-grup">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="5" required>
                        </textarea>
                </div>
                <div class="form-grup">
                        <label>Kelas</label>
                        <select name="id_kelas" class="form-control">
                        @foreach($kelas as $data)
                        <option value="{{$data->id}}"> {{$data->kelas}}</option>
                        @endforeach
                        </select>

                        <div class="form-group">
                            <label for="">Mata Pelajaran</label>
                            <select name="mapel[]" class="form-control" multiple>
                            @foreach ($mapel as $data)
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                            </select>
                </div>
                <div class="form-group"> </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
