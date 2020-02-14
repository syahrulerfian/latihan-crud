@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">SHOW KELAS</div>

                <div class="card-body">
                
                    <div class="form-grup">
                        <label>Kelas</label>
                    <input type="text" name="kelas" value="{{$kelas->kelas}}" 
                        class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Daftar Siswa</label>
                     <ul>
                    @foreach($kelas->siswa as $data)
                    <li> 
	                {{ $data->nama }} - {{$data->nis}}</li>
                    @endforeach
                    </ul>
                    </div>
                <div class="form-group"> </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
