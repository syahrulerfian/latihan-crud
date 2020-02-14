@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Siswa</div>

                <div class="card-body">
                
                    <div class="form-grup">
                    <label>NIS Siswa</label>
                    <input type="text" name="nis" value="{{$siswa->nis}}" 
                        class="form-control" readonly>
                        <label>Nama Siswa</label>
                    <input type="text" name="nama" value="{{$siswa->nama}}" 
                        class="form-control" readonly>
                        <label>Alamat Siswa</label>
                    <textarea name="alamat" class="form-control" cols="30" rows="5" readonly>{{$siswa->alamat}} </textarea> 
                        <label>Kelas Siswa</label>
                    <input type="text" value="{{$siswa->kelas->kelas}}" name="kelas" class="form-control" readonly>
                </div>
                
                <div class="form-group"> </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
