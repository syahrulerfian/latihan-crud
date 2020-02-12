@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">SHOW KELAS</div>

                <div class="card-body">
                
                    <div class="form-grup">
                        <label>Mata Pelajaran</label>
                    <input type="text" name="nama" value="{{$mapel->nama}}" 
                        class="form-control" readonly>
                        
                </div>
                
                <div class="form-group"> </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
