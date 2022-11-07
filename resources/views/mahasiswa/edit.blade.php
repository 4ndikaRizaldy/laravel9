@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Data</h1>
    <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
        @method('put')
        @csrf

        <div class="mb-3">
            <label for="inputname" class="form-label">Nama</label>
            <input type="text" name="nama" placeholder="Nama" class="form-control" value="{{$mahasiswa->nama}}">
        </div>
        <div class="mb-3">
            <label for="inputnim" class="form-label">NIM</label>
            <input type="text" name="nim" placeholder="NIM" class="form-control" value="{{$mahasiswa->nim}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info" value="save">
    </form>
</div>

@endsection