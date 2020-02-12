@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Edit Mapel </div>

                <div class="card-body">
                    <form action="{{route('mapel.update',$mapel->id)}}" method="post">
                    
                    @csrf
                    @method('PATCH')
                    <div class="form-grup">
                        <label>Mata Pelajaran</label>
                        <input type="text" name="nama" value="{{$mapel->nama}}" class="form-control" required>
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